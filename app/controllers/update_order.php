<?php 
	require_once("connect.php");
	$id	= $_GET['id'];

	$status = $_GET['status'];

	if ($status == "Completed") {

		$update_order_query = "UPDATE orders SET status_id = 2 WHERE id = $id";
	} elseif ($status == "Canceled") {

		$update_order_query = "UPDATE orders SET status_id = 3 WHERE id = $id";
	}

	$result = mysqli_query($conn, $update_order_query);

	// header("Location: ../views/orders.php");
?>