<?php
	session_start();

	function getCartCount() {
		return array_sum($_SESSION['cart']);
	}

	$item_id = htmlspecialchars($_POST['item_id']);
	$item_quantity = htmlspecialchars($_POST['item_quantity']);

	if ($item_quantity == "0") { //from input is always a string
		unset($_SESSION['cart'][$item_id]);
	} else {
		if (isset($_SESSION['cart'][$item_id])) {
			//add it to our session variable
			$_SESSION['cart'][$item_id] += $item_quantity;
		} else { //cart is empty
			$_SESSION['cart'][$item_id] = $item_quantity; 
		}
	}

	echo getCartCount();

?>