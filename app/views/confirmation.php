<?php 

$pageTitle = "confirmation";
require_once ("../partials/start_body.php");
if (isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 1)) {
    header("Location: error.php");
  }
require_once ("../partials/navbar1.php");


 ?>

 <?php 
 	if(isset($_SESSION['txn_number']) && isset($_SESSION['address'])){
?>
	
<main class="container" id="confirmation-page">
	<div class="container" id="confirmation-container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h3 class="mt-5 mb-5">Confirmation Page</h3>
				<h4>Reference No.: <?php echo $_SESSION['txn_number'] ?></h4>
				<h4>Shipped to: <?php echo $_SESSION['address'] ?></h4>
				<p class="mt-5 mb-5">Thank you for shopping! your order is now being processed.</p>
				<a href="catalog.php" class="btn btn-blue-grey mb-5">Continue Shopping</a>
				<?php 
					unset($_SESSION['txn_number']);
					unset($_SESSION['address']);
				 ?>
			</div>
		</div>
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>


 	} <?php  } else {
 		header("Location: catalog.php");
 	}

  ?>

<?php require_once("../partials/footer.php"); ?>
<?php require("../partials/end_body.php") ?>