<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "csp2_ecommerce_db";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn) {
		die("Connection Failed: " . mysqli_error($conn));
	}
?>