<?php 

$pageTitle = "Profile";
require_once("../partials/start_body.php");
require_once("../controllers/connect.php");
require_once("../partials/navbar1.php");

?>

<main class="container" id="profile-page">
	
	<div class="container my-5" id="profile-container">
		<div class="row">

			<div class="col-lg-8 offset-2">
				<div class="tab-content">
					<div class="tab-panel" id="profile" role="tabpanel">
						<h3 class="text-center">User Information</h3>
						<span id="update_status"></span>
						<form>
							
							<div class="form-group">
								<input type="text" name="user_id" id="user_id" class="form-control" value="<?php echo $_SESSION['user']['id']; ?>" hidden readonly>
							</div>

							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['user']['username']; ?>">
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="firstname">First Name:</label>
								<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $_SESSION['user']['first_name']; ?>"">
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="lastname">Last Name:</label>
								<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $_SESSION['user']['last_name']; ?>">
								<span class="validation"></span>
							</div>


							<div class="form-group">
								<label for="email">Email:</label>
								<input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['user']['email']; ?>">
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" name="address" id="address" class="form-control" value="<?php echo $_SESSION['user']['last_name']; ?>">
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="old_password">Old Password:</label>
								<input type="password" name="old_password" id="old_password" class="form-control" >
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="new_password">New Password:</label>
								<input type="password" name="new_password" id="new_password" class="form-control" >
								<span class="validation"></span>
							</div>

							<div class="form-group">
								<label for="confirm_password">Confirm Password:</label>
								<input type="password" name="confirm_password" id="confirm_password" class="form-control" >
								<span class="validation"></span>
							</div>

							<a id="update_user" class="btn btn-blue-grey" type="button" href="../controllers/update_user_success.php">Update</a>
						</form>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>



<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>