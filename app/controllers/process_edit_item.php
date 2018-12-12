<?php

	require_once("connect.php");

		$id = $_GET['id'];
		
		$new_name = $_POST['name'];
		$new_price = $_POST['price'];
		$new_description = $_POST['description'];
		$new_category_id = $_POST['category_id'];

		if ($_FILES['image']['size'] !== 0) {
			move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/items/'.$_FILES['image']['name']);
			$new_image_path = $_FILES['image']['name'];
			$sql = "UPDATE items SET name = '$new_name', price = '$new_price', description = '$new_description', category_id = '$new_category_id', image = '$new_image_path' WHERE id = '$id'";
			
		} else {
			$sql = "UPDATE items SET name = '$new_name', price = '$new_price', description = '$new_description', category_id = '$new_category_id' WHERE id = '$id'";
		}
	
		if(!mysqli_query($conn, $sql)) {
			die(mysqli_error($conn)); 
		}

		echo "Item Details Updated";

		header("Location: ../views/items.php");


?>