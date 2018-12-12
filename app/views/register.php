<?php 

	$pageTitle = "Register";
	require_once("../partials/start_body.php");

?>

	<!-- navbar -->
	<?php require_once("../partials/navbar.php") ?>

	<!-- registration layout -->
	<main id="main" role="main">
		<div class="container py-5">
			<section class="row">
				<div class="col">
					<h1 class="text-center"> <img class="brand-logo img-fluid" width="50" height="50" src="#"> Register </h1>

					<form>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> First Name: </label>
									<input class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter First Name">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Last Name: </label>
									<input class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter Last Name">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Username: </label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Email Adress: </label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Password: </label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
									<span class="text-danger small"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label> Confirm Password: </label>
									<input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label> Home Address: </label>
									<input type="text" name="home-address" id="home-address" class="form-control" placeholder="Enter Home Address">
									<span class="text-danger small"></span>
								</div>
							</div>
						</div>

						<button id="add-user" type="submit" class="d-block btn btn-lg btn-primary mx-auto"> Sign Up </button>


					</form>

				</div>
			</section>
		</div>
	</main>

<?php require_once("../partials/end_body.php"); ?>