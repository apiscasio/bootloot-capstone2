<?php 
	
	$pageTitle = "user admin";
	require_once("../partials/start_body.php"); 
	  if (!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) {
	    header("Location: error.php");
	  } 
	  require_once("../controllers/connect.php");
?>

<?php require_once("../partials/navbar1.php") ?>

<main class="container my-5" id="users-page">
	<div class="container" id="users-container">
		<div class="row">
			<h4 class="mt-5 mb-5"> User Admin Page </h4>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<td class="text-center">User Name</td>
							<td class="text-center">First Name</td>
							<td class="text-center">Last Name</td>
							<td class="text-center">Email</td>
							<td class="text-center">Role</td>
							<td class="text-center">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$get_user_details_query = "SELECT u.id, u.first_name, u.last_name, u.username, u.email, r.name AS role FROM users u JOIN roles r ON (r.id = u.role_id)";
							$user_details = mysqli_query($conn, $get_user_details_query);
							foreach ($user_details as $indiv_user) { 
						?>
							<tr>
								<td class="text-center"><?php echo $indiv_user['username'] ?></td>
								<td class="text-center"><?php echo $indiv_user['first_name'] ?></td>
								<td class="text-center"><?php echo $indiv_user['last_name'] ?></td>
								<td class="text-center"><?php echo $indiv_user['email'] ?></td>
								<td class="text-center"><?php echo $indiv_user['role'] ?></td>
								<td class="text-center"><?php 
										$id = $indiv_user['id'];
										if ($indiv_user['role'] == "admin") {
									?>
										<a href="../controllers/grant_admin.php?id=<?php echo $id ?>" class="btn btn-danger">Revoke Admin</a>
									<?php } else { ?>
										<a href="../controllers/grant_admin.php?id=<?php echo $id ?>" class="btn btn-primary">Make Admin</a>
									<?php } ?>
								</td>
							</tr>		
						<?php } ?> <!-- /foreach -->

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>