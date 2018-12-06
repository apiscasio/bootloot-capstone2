<?php

	require_once("connect.php");

	if(isset($_POST['search'])) {

		// if(preg_match("/[A-Z | a-z]+/", $_POST["search"])) {
			$searchVal = $_POST['search'];
		// }
	} else {
		$searchVal = NULL;
	}

	$sql = "SELECT * FROM items WHERE name LIKE '%$searchVal%'";

	$result = mysqli_query($conn, $sql);

	$searchedItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if($searchedItems) {
		echo json_encode($searchedItems);
	} else {
		echo "";
	}

	mysqli_close($conn);
?>