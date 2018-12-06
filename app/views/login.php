<?php 
	$pagTitle = "Login";
	require_once("../partials/start_body.php");
?>

<?php require_once("../partials/navbar.php") ?>

	<main class="container">
		<div class="row py-5">
			<div class="col">
				<h1 class="text-center"> <img class="brand-logo img-fluid" width="50" height="50" src="../assets/images/brand-logo-1.png"> LOGIN </h1>
				<form>
					<div class="form-row py-5">
						<div class="col-md-6 offset-md-3">
							<div class="form-group">
								<label for="username-email"> Username or Email Address </label>
								<input type="text" name="username-email" id="username-email" placeholder="Username or Email" class="form-control">
								<span class="text-danger small"></span>
							</div>
							<div class="form-group">
								<label for="password"> Password </label>
								<input type="password" name="password" id="password" placeholder="Password" class="form-control">
								<span class="text-danger small"></span>
							</div>

							<button id="login" type="submit" class="btn btn-block btn-success"> Sign In </button>
						</div>
					</div>
				</form>
			</div>
		</div>		
	</main>

<?php require_once("../partials/end_body.php") ?>