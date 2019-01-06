<?php 
	
	$pageTitle = "Add Item Successful";
	require_once("../partials/start_body.php"); 
	require_once("../controllers/connect.php");

?>

<?php require_once("../partials/navbar1.php") ?>

	<main class="container" id="editItemSuccess-page">
		<div class="container" id="editItemSuccess-container">
			<h2 class="mt-5 mb-5 pt-5"> Item Edited Successfully </h2>

			<a class="btn btn-blue-grey my-3" type="button" href="../views/items.php"> Back to Catalog </a>
		</div>
		<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
	</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>