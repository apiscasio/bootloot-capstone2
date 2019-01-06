<?php

	require_once("connect.php");

	$brandId = $_POST['brandId'];

	$sql = "SELECT * FROM items WHERE brand_id = '$brandId'";

	$result = mysqli_query($conn, $sql);

	$filteredByBrands = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if($filteredByBrands) {
		echo json_encode($filteredByBrands);
	} else {
		echo "";
	}

	// mysqli_close($conn);

?>