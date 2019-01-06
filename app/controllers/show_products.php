<?php
	// session_start();
	
	require_once("connect.php");

	$sql = "SELECT * FROM items";

	$result = mysqli_query($conn, $sql);

	$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// if ($items1) {
	// 	echo json_encode($items1);
	// } else {
	// 	echo "";
	// }

?>