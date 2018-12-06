<?php

	require_once("connect.php");

	$sql = "SELECT * FROM categories";

	$result = mysqli_query($conn, $sql);

	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if ($categories) {
		echo json_encode($categories);
	} else {
		echo "";
	}

	// mysqli_close($conn);

?>