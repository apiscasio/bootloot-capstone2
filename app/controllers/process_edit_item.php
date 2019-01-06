<?php

	require("connect.php");

	$id = $_GET['id'];
	
	$new_name = $_POST['name'];
	$new_price = $_POST['price'];
	$new_description = $_POST['description'];
	$new_category_id = $_POST['category_id'];
	$new_brand_id = $_POST['brand_id'];

	$new_newBrand = htmlspecialchars($_POST['newBrand']);
	$selected_val = $_POST['brand_id'];

	if ($selected_val == 999) {

		$sql_new_brand = "INSERT INTO brands (brand_name) VALUES ('$new_newBrand')";

		mysqli_query($conn, $sql_new_brand);
		
		$last_brand_id = mysqli_insert_id($conn);

		$new_brand_id = $last_brand_id;

	}

	if ($_FILES['image']['size'] !== 0) {
		move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/items/'.$_FILES['image']['name']);
		$new_image_path = $_FILES['image']['name'];
		$sql = "UPDATE items SET name = '$new_name', price = '$new_price', description = '$new_description', category_id = '$new_category_id', brand_id = '$new_brand_id', image = '$new_image_path' WHERE id = '$id'";
		
	} else {
		$sql = "UPDATE items SET name = '$new_name', price = '$new_price', description = '$new_description', category_id = '$new_category_id', brand_id = '$new_brand_id' WHERE id = '$id'";
	}

	mysqli_query($conn, $sql) or die(mysqli_error($conn));

	header("Location: edit_item_success.php");

?>