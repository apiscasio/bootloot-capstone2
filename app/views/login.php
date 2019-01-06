<?php 
	$pagTitle = "Login";
	require_once("../partials/start_body.php");
?>

<?php require_once("../partials/navbar1.php") ?>

	<main class="mainLogin-container">
		<div class="login-container">
			<div class="row pt-5">
				<div class="col">
					<div class="row">
						<div class="col-md-6 vertical-center text-center py-3">
							<a href="register.php">New Customer</a>
						</div>
						<div id="returnCustLoginTab" class="col-md-6 vertical-center text-center py-3">
							<a href="login.php">Returning Customer</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="text-center"> Sign In </h2>
					<form>
						<div class="form-row py-5">
							<div class="col-md-8 offset-md-2">
								<div class="form-group">
									<label for="username-email"> Username or Email Address </label>
									<input type="text" name="username-email" id="username-email" class="form-control">
									<span class="text-danger small"></span>
								</div>
								<div class="form-group">
									<label for="password"> Password </label>
									<input type="password" name="password" id="password" class="form-control">
									<span class="text-danger small"></span>
								</div>

								<button id="login" type="submit" class="btn btn-blue-grey"> Sign In </button>
							</div>
						</div>
					</form>
				</div>
			</div>		
		</div>
		<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
	</main>

<?php require_once("../partials/footer.php") ?>
<?php require_once("../partials/end_body.php") ?>