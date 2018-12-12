<?php 
	
	$pageTitle = "user admin";
	require_once("../partials/start_body.php"); 
	  if (!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 2)) {
	    header("Location: error.php");
	  } 
	  require_once("../controllers/connect.php");
?>

<?php require_once("../partials/navbar.php") ?>

	<div class="container">
		<div class="row">
			<h4 class="mt-5 mb-5"> Orders Admin Page</h4>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<table class="table table-striped">
				 	<thead>
				 		<tr>
				 			<td class="text-center">Transaction Code</td>
				 			<td class="text-center">Status</td>
				 			<td class="text-center">Actions</td>
				 		</tr>
				 	</thead>
				 	<tbody>
				 		
				 		<?php
					 		$order_query = "SELECT o.id, o.transaction_code, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id)";
					 		$orders = mysqli_query($conn, $order_query);
							foreach ($orders as $indiv_order) { 
				 		?>
				 		<tr>
					 		<td class="text-center"><?php echo $indiv_order['transaction_code'] ?></td>
					 		<td class="text-center"><?php echo $indiv_order['status'] ?></td>
					 		<td class="text-center">
					 			<?php
					 				if($indiv_order['status'] == "Pending") { ?>
					 					<a href="../controllers/complete_order.php?id=<?php echo $indiv_order['id'] ?>" class="btn btn-success">Complete Order</a>
					 					<a href="../controllers/cancel_order.php?id=<?php echo $indiv_order['id'] ?>" class="btn btn-danger">Cancel Order</a>

					 			<?php } ?>
					 		</td>
				 		</tr>
				 		<?php } ?>
				 	</tbody>
				
				</table>
			</div>
		</div>
	</div>