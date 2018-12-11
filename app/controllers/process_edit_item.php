<?php

	require_once("connect.php");

		$id = $_GET['id'];

		$sql = "SELECT * FROM items WHERE id= '$id'";

		$item = mysqli_fetch_assoc(mysqli_query($conn, $sql));

		extract($item);

		// $new_name = $_POST['name'];
		// $new_price = $_POST['price'];
		// $new_description = $_POST['description'];
		// $new_category_id = $_POST['category_id'];

		// move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/items/'.$_FILES['image']['name']);

		// $new_image_path = $_FILES['image']['name'];


		// $sql_query = "UPDATE items SET name = '$new_username', price = '$new_price', description = '$new_description', category_id = '$new_category_id', image = '$new_image_path'";
		// $result = mysqli_query($conn, $sql);
		// $sql_query2 = "SELECT * FROM items WHERE id = '$id'";
		// $result2 = mysqli_query($conn, $sql_query2);
		// $_SESSION['items'] = mysqli_fetch_assoc($result2);
		// mysqli_close($conn);

		// echo "Item Details Updated";


?>