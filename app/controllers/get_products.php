<?php

	require_once("connect.php");

	$sql = "SELECT * FROM items";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		$items = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	}
?>