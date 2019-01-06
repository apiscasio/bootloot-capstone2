<?php

	require_once("connect.php");

	$name = htmlspecialchars($_POST['name']);
	$price = htmlspecialchars($_POST['price']);
	$description = htmlspecialchars($_POST['description']);
	$category_id = htmlspecialchars($_POST['category_id']);
	$brand_id = htmlspecialchars($_POST['brand_id']);
	$newBrand = htmlspecialchars($_POST['newBrand']);

	move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/items/'.$_FILES['image']['name']);

	$image_path = $_FILES['image']['name'];

	$selected_val = $_POST['brand_id'];

	if ($selected_val == 99999) {
		$sql_new_brand = "INSERT INTO brands (brand_name) VALUES ('$newBrand')";

		mysqli_query($conn, $sql_new_brand);
		
		$last_brand_id = mysqli_insert_id($conn);
	
		$brand_id = $last_brand_id;
	}

	$sql = "INSERT INTO items (name, price, description, category_id, image, brand_id) VALUES ('$name', '$price', '$description', '$category_id', '$image_path', '$brand_id')";

	mysqli_query($conn, $sql); 
	
	$last_item_id = mysqli_insert_id($conn);

	$item_id = $last_item_id;

	for ($i = 6; $i <= 13; $i += 0.5) {
		$size = htmlspecialchars($_POST['size']);
		$quantity = htmlspecialchars($_POST['size_qty']);

		if ($quantity !== null) {

			$sql_new_stock = "INSERT INTO stocks (item_id, size, quantity) VALUES ('$item_id', '$size', '$quantity')";
			mysqli_query($conn, $sql_new_stock) or die(mysqli_error($conn));
		}
	}

	header("Location: addItem_success.php")

?>
