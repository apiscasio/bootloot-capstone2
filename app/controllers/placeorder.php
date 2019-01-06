<?php 
session_start();
require_once("connect.php");

// sending email notif to the customer
use PHPMailer\PHPMailer\PHPMailer; //sending emails
use PHPMailer\PHPMailer\Exception; //error checking
//import phpmailer classes into namespace

//loads composer's autoloader
require "../vendor/autoload.php";

//PayPal dependencies
use PayPal\Rest\ApiContext; // to be able to use the API
use PayPal\Auth\OAuthTokenCredential; // to be able to login using client ID and Secret
use PayPal\Api\Payer; // to be able to set up the payer
use PayPal\Api\Item; // to be able to link our items
use PayPal\Api\ItemList; // to be able to link our orders
use PayPal\Api\Details; // to be able to list down the details of the transaction
use PayPal\Api\Amount; // to be able to set the amount
use PayPal\Api\Transaction; // to be able to create a transaction
use PayPal\Api\RedirectUrls; // to be able to go back once the payment has been processed
use PayPal\Api\Payment; // to be able to set up the payments
require "paypal/start.php";

//generating transaction number
function generate_new_transaction_number() {
	$ref_number = "";
	$source = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');

	for($i = 0; $i < 6; $i++) {
		$index = rand(0,15); //generates a random number given the range

		$ref_number .= $source[$index]; //concatenate a random character from the source array
	}

	$today = getdate(); //seconds since unix epoch
	return $ref_number . "-" . $today[0];
}

$user_id = $_SESSION['user']['id'];
$purchase_date = date("Y-m-d G:i:i");
// $payment_mode_id = 1; // hard-coded cod
$payment_mode_id = $_POST['payment_mode'];
$status_id = 1; // pending
$delivery_address = $_POST['addressLine'];

if($payment_mode_id == 1) { // cod

	//get all details of the order
	$transaction_code = generate_new_transaction_number();
	$cart_total = 0;

	foreach($_SESSION['cart'] as $id => $qty) {
		$cart_total_query = "SELECT * FROM items WHERE id = $id";
		$result = mysqli_query($conn, $cart_total_query);
		$item_info = mysqli_fetch_assoc($result);
		$cart_total += ($qty *$item_info['price']);
	}

	//writing into the database
	$sql_query = "INSERT INTO orders (user_id, transaction_code, purchase_date, total, status_id, payment_mode_id) VALUES ('$user_id', '$transaction_code', '$purchase_date', '$cart_total', '$status_id', '$payment_mode_id')";

	$result = mysqli_query($conn, $sql_query);

	// get the id of the newly created order
	$new_order_id = mysqli_insert_id($conn); //retrieves the most recently created id

	//insert values to the orders_items table using the $new_order_id
	if($result){
		foreach($_SESSION['cart'] as $id=>$qty){
		// $sql_query = "SELECT * FROM items WHERE id = $id";
		// $result = mysqli_query($conn, $sql_query);
		// $item_info = mysqli_fetch_assoc($result);

			$sql = "INSERT INTO orders_items (order_id, item_id, quantity)
			VALUES ('$new_order_id', '$id', '$qty')";
			$result = mysqli_query($conn, $sql);
		}
	}

	// clear the cart
	$_SESSION['cart'] = [];
	mysqli_close($conn);

	$mail = new PHPMailer(true); // creates a new instances of phpmailer
	// with the exceptions enabled;

	$staff_email = "orderu1008@gmail.com";

	$customer_email = $_SESSION['user']['email'];
	$subject = $_SESSION['user']['username']." - Order Confirmation";
	$body = "<div style='text-transform:uppercase;'><h3>Reference Number:".$transaction_code."</h3></div>"."<div>Ship to $delivery_address</div>";

	try {
		// $mail->SMTPDebug = 4; //enables verbose debug output
		$mail->isSMTP(); // Set mailer to use SMTP
		$mail->Host = "smtp.gmail.com";

		$mail->SMTPAuth = true; // enables SMTP authentication
		$mail->Username = $staff_email; // smtp username
		$mail->Password ="Order11111"; // smtp password
		$mail->SMTPSecure = "tls"; // Enables TLS encryption, 'ssl' is also accepted
		$mail->Port = 587;

		//sender and recipient
		$mail->setFrom($staff_email, "orderu1008"); //aliasing the sender
		$mail->addAddress($customer_email); // who the recipient will be

		//content
		$mail->isHTML(true); //sets email format to HTML
		$mail->Subject = $subject;
		$mail->Body = $body;

		//sending the actual email
		$mail->send();
		$_SESSION['txn_number'] = $transaction_code;
		$_SESSION['address'] = $delivery_address;
		header("Location: ../views/confirmation.php");

	} catch (Exception $e){
		echo "Message could not be sent. Mailer Error: ", $email->errorInfo;

	}

} else { // paypal
	$_SESSION['address'] = $_POST['addressLine'];

	$payer = new Payer();
	$payer->setPaymentMethod("paypal");

	$total = 0;
	$items = [];

	foreach ($_SESSION['cart'] as $id => $quantity) {
		$sql = "SELECT * FROM items WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$item = mysqli_fetch_assoc($result);
		$total += $item['price'] * $quantity;
		$indiv_item = new Item();
		$indiv_item->setName($item['name'])
				->setCurrency("PHP")
				->setQuantity($quantity)
				->setPrice($item['price']);
		$items[] = $indiv_item;
	}

	$item_list = new ItemList();
	$item_list->setItems($items);

	$amount = new Amount();
	$amount->setCurrency("PHP")->setTotal($total);

	$transaction = new Transaction();
	$transaction->setAmount($amount)
				->setItemList($item_list)
				->setDescription("Payment for Cop-A-Boot Purchase")
				->setInvoiceNumber(uniqid("CopABoot_"));

	$redirectUrls = new RedirectUrls();
	$redirectUrls->setReturnUrl("http://localhost/csp2-ecommerce/app/controllers/pay.php?success=true")
				->setCancelUrl("http://localhost/csp2-ecommerce/app/controllers/pay.php?success=false");

	$payment = new Payment();
	$payment->setIntent('sale')
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions([$transaction]);

	try {
		$payment->create($paypal); //$paypal from controllers/paypal/start.php
	} catch (Exception $e) {
		die ($e->getData());
	}

	$approvalUrl = $payment->getApprovalLink();

	header("Location:" .$approvalUrl);
}

// echo "User who ordered" . $user_id;
// echo "purchase date" . $purchase_date;
// echo "delivery adress" . $delivery_address;
// echo "transaction code" . $transaction_code;
// echo "amount to pay" . $cart_total;

?>