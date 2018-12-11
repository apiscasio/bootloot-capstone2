<?php

	require_once("connect.php");

	$name = htmlspecialchars($_POST['name']);
	$price = htmlspecialchars($_POST['price']);
	$description = htmlspecialchars($_POST['description']);
	$category_id = htmlspecialchars($_POST['category_id']);

	move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/items/'.$_FILES['image']['name']);

	$image_path = $_FILES['image']['name'];

	$sql = "INSERT INTO items (name, price, description, category_id, image) VALUES ('$name', '$price', '$description', '$category_id', '$image_path')";

	mysqli_query($conn, $sql) or die(mysqli_error($conn));

	echo "Item Added Successfully!";

	header("Location: ../views/catalog.php");
?>