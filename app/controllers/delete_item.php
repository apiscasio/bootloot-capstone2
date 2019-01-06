<?php

	require_once("connect.php");

	if(isset($_POST['delete'])) {

		$id = $_GET['id'];

		echo $id;
	 		
		$sql = "DELETE FROM items WHERE id = '$id'";

		mysqli_query($conn, $sql) or die(mysqli_error($conn));

		echo "Item Deleted Successfully";

	} else {
		echo "You don't have permission to access this page.";
	}

	header("Location: ../views/items.php");
?>