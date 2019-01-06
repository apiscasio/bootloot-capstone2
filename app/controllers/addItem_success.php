<?php 
	
	$pageTitle = "Add Item Successful";
	require_once("../partials/start_body.php"); 
	require_once("../controllers/connect.php");

?>

<?php require_once("../partials/navbar1.php") ?>

	<main class="container" id="addItemSuccess-page">
		<div class="container" id="addItemSuccess-container">
			
			<h2 class="mt-5 mb-5 pt-5"> Item Added Successfully </h2>

			<a class="btn btn-blue-grey my-3" type="button" href="../views/items.php"> Continue </a>

		</div>

	</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>