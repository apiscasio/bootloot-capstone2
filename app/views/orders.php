<?php 
	
	$pageTitle = "Transaction History";
	require_once("../partials/start_body.php"); 
	require_once("../controllers/connect.php");

?>

<?php require_once("../partials/navbar1.php") ?>

	<main class="container" id="orders-page">
		<div class="container" id="orders-container">

			<div class="row my-5">
			<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?> 
				<h3 class="mt-5 mb-5 text-center"> Orders Admin Page </h3>
			<?php } else if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) { ?>
				<h3 class="mt-5 mb-5 text-center"> My Orders </h3>
			<?php } ?>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<table class="table table-striped">
					 	<thead>
					 		<tr>
				 			<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?> 
								<td class="text-center font-weight-bold">Transaction Code</td>
					 			<td class="text-center font-weight-bold">Payment Method</td>
					 			<td class="text-center font-weight-bold">Status</td>
					 			<td class="text-center font-weight-bold">Actions</td>
							<?php } else if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) { ?>
								<td class="text-center font-weight-bold">Transaction Code</td>
					 			<td class="text-center font-weight-bold">Payment Method</td>
					 			<td class="text-center font-weight-bold">Status</td>
							<?php } ?>
					 		</tr>
					 	</thead>
					 	<tbody>
					 		
					 		<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) {  
								$admin_order_query = "SELECT o.id, o.transaction_code, o.payment_mode_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id)";
						 		$orders = mysqli_query($conn, $admin_order_query);
								foreach ($orders as $indiv_order) { 
							?>

							<tr>
						 		<td class="text-center"><?php echo $indiv_order['transaction_code'] ?></td>
						 		<td class="text-center"><?php 
						 			if ($indiv_order['payment_mode_id'] == 1) {
						 				echo "COD";
						 			} elseif ($indiv_order['payment_mode_id'] == 2) {
						 				echo "PayPal";
						 			}
						 			?>
						 		</td>
						 		<td class="text-center"><?php echo $indiv_order['status'] ?></td>
								<td class="text-center">
						 			<?php
						 				if($indiv_order['status'] == "Pending") { ?>
						 					<a href="../controllers/complete_order.php?id=<?php echo $indiv_order['id'] ?>" class="btn btn-success">Complete Order</a>
						 					<a href="../controllers/cancel_order.php?id=<?php echo $indiv_order['id'] ?>" class="btn btn-danger">Cancel Order</a>
						 			<?php } ?>
						 		</td>
							 	<?php } ?>
					 		</tr>

							<?php } else if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) {
								if ($_SESSION['user']['id']) {
					 			
						 			$userId = $_SESSION['user']['id'];
							 		$user_order_query = "SELECT o.user_id, o.transaction_code, o.payment_mode_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id) WHERE o.user_id = '$userId'";
							 		
							 		$orders = mysqli_query($conn, $user_order_query);

									foreach ($orders as $indiv_order) { 
							?>

					 		<tr>
						 		<td class="text-center"><?php echo $indiv_order['transaction_code'] ?></td>
						 		<td class="text-center"><?php 
						 			if ($indiv_order['payment_mode_id'] == 1) {
						 				echo "COD";
						 			} elseif ($indiv_order['payment_mode_id'] == 2) {
						 				echo "PayPal";
						 			}
						 			?>
						 		</td>
						 		<td class="text-center"><?php echo $indiv_order['status'] ?></td>
					 		<?php } ?>
								
					 		</tr>
					 		<?php } ?>
					 	</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
		</div>
		<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
	</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>