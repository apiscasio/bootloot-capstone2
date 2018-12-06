<?php

	require_once("connect.php");

	$username = htmlspecialchars($_POST["username"]);
	$password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_BCRYPT);
	$firstname = htmlspecialchars($_POST["firstname"]);
	$lastname = htmlspecialchars($_POST["lastname"]);
	$email = htmlspecialchars($_POST["email"]);
	$address = htmlspecialchars($_POST["home-address"]);

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0 ) { //mysqli_num_rows counts num of rows / checks if theres an existing record
		die("user exists");
	} else {
		$insert_query = "INSERT INTO users (username, password, first_name, last_name, email, home_address) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$address')";
		$result = mysqli_query($conn, $insert_query);
	}

	mysqli_close($conn);

?>