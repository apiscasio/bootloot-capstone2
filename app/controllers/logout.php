<?php 
	
	// destroy all sessions
	session_start();
	session_unset();
	session_destroy();

	// route user to the landing page
	header("Location: ../views/index.php");
?>