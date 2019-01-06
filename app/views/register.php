<?php 

	$pageTitle = "Register";
	require_once("../partials/start_body.php");

?>

	<!-- navbar -->
	<?php require_once("../partials/navbar1.php") ?>

	<!-- registration layout -->
	<main id="main" role="main" class="mainRegister-container">
		<div class="register-container">
			<div class="row pt-5">
				<div class="col">
					<div class="row">
						<div id="newCustRegTab" class="col-md-6 vertical-center text-center py-3">
							<a href="register.php">New Customer</a>
						</div>
						<div class="col-md-6 vertical-center text-center py-3">
							<a href="login.php">Returning Customer</a>
						</div>
					</div>
				</div>
			</div>

			<section class="row">
				<div class="col">
					<h3 class="text-center py-3"> Create an account </h3>

					<form id="regForm-container">
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> First Name: </label>
									<input class="form-control" type="text" name="firstname" id="firstname">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Last Name: </label>
									<input class="form-control" type="text" name="lastname" id="lastname">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Username: </label>
									<input type="text" name="username" id="username" class="form-control">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Email Adress: </label>
									<input type="email" name="email" id="email" class="form-control">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Password: </label>
									<input type="password" name="password" id="password" class="form-control">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Confirm Password: </label>
									<input type="password" name="confirm-password" id="confirm-password" class="form-control">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Home Address: </label>
									<input type="text" name="home-address" id="home-address" class="form-control">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>

						<button id="add-user" type="submit" class="btn btn-blue-grey d-block mb-4"> Sign Up </button>

					</form>

				</div>
			</section>
		</div>
		<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
	</main>

<?php require_once("../partials/footer.php") ?>
<?php require_once("../partials/end_body.php") ?>
