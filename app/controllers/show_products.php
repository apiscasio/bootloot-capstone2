<?php

	require_once("connect.php");

	$sql = "SELECT * FROM items";

	$result = mysqli_query($conn, $sql);

	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// var_dump(json_encode($rows));

	if ($items) {
		echo json_encode($items);
	} else {
		echo "";
	}

	mysqli_close($conn);

?>