<?php 
	
	$pageTitle = "Add Item Successful";
	require_once("../partials/start_body.php"); 
	require_once("../controllers/connect.php");

?>

<?php require_once("../partials/navbar1.php") ?>

	<main class="container" id="updateUser-page">
		<div class="container" id="updateUser-container">
			
			<h2 class="mt-5 mb-5 pt-5"> Profile Updated Successfully </h2>

			<a class="btn btn-blue-grey my-3" type="button" href="../views/login.php"> Sign in to continue </a>

		</div>
	</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>