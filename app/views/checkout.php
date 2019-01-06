<?php  

	$pageTitle = "Checkout";
	require_once("../partials/start_body.php");
	if (isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 1)) {
	    header("Location: error.php");
	  }
	require_once("../partials/navbar1.php");
	require_once("../controllers/connect.php");	

?>


<?php 
if(!isset($_SESSION['user'])) {
	header("Location: login.php");
} else { ?>


<main class="container" id="checkout-page">
	<div class="container" id="checkout-container">
		<div class="container py-5">
			<section class="row">
				<div class="col">
					<h1 class="text-center mb-5">Checkout Page</h1>
					<form  method="POST" action="../controllers/placeorder.php">

						<div class="container">
							<div class="row mt-4">
								<div class="col-lg-8">
									<h4>Shipping Address</h4>
									<div class="form-group">
										<input type="text" name="addressLine" class="form-control" value="<?php echo $_SESSION['user']['home_address'] ?>">
									</div>
								</div>
								<h4>Payment Options</h4>
								<div class="form-group">
									<select class="form-control ml-3" id="payment_mode" name="payment_mode">
										<?php 
											$payment_mode_query = "SELECT * FROM payment_modes";
											$payment_modes = mysqli_query($conn, $payment_mode_query);

											foreach ($payment_modes as $payment_mode) {
												extract($payment_mode);
												echo "<option value='$id'> $name </option>";
											}
										?>
									</select>
								</div>
								<div class="col-lg-4 offset-8">
									<h4>Amount to Pay</h4>
									<div id="total-price" class="font-weight-bold">
										<?php 
										$cart_total=0;
										
										foreach($_SESSION['cart'] as $id => $qty) {
											$sql_query = "SELECT * FROM items WHERE id = $id";
											$item_info = mysqli_query($conn, $sql_query);
											$item = mysqli_fetch_assoc($item_info);
											$subTotal = $_SESSION['cart'][$id] * $item['price'];
											$cart_total += $subTotal;
										}
										echo "<h2> &#8369; " .number_format($cart_total, 2) ."</h2>";
										 ?>
									</div>
									<button type="submit" class="btn btn-blue-grey my-3">Place Order Now</button>
								</div>
							</div>
						</div>

					</form>
					<h4 class="mt-3">Order Summary</h4>
					<table class="table table-striped">
						<thead>
							<tr>
								<td class="text-center font-weight-bold">Item Name</td>
								<td class="text-center font-weight-bold">Item Size</td>
								<td class="text-center font-weight-bold">Item Price</td>
								<td class="text-center font-weight-bold">Item Quantity</td>
								<td class="text-center font-weight-bold">Item Sub-total</td>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach($_SESSION['cart'] as $id => $qty){
								$sql_query = "SELECT * FROM items WHERE id = $id";
								$item_info = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($item_info); ?>
								<tr>
									<td class="align-middle text-center"><?php echo $item['name']; ?></td>
									<td class="align-middle text-center"><?php echo "Size" ?></td>
									<td class="align-middle text-center"><?php echo "&#8369; " .number_format($item['price'], 2) ?></td>
									<td class="align-middle text-center"><?php echo $qty;?></td>
									<td class="align-middle text-center"><?php echo "&#8369; " .number_format(($qty * $item['price']), 2); ?></td>
								</tr>
							
							 <?php } 
							 mysqli_close($conn);

							 ?>
						</tbody>
					</table>
				</div>
			</section>
		</div>
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>

<?php } ?>



<?php  
require_once("../partials/end_body.php");


?>