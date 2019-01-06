<?php 
  $pageTitle = "Add Item";
  require_once("../partials/start_body.php"); 
  if (!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) {
    header("Location: error.php");
  } 
  require_once("../controllers/connect.php");

?>

<?php require_once("../partials/navbar1.php") ?>

<main id="addItem-page" class="container">

	<div class="container col-lg-10" id="addItem-container">
		<div class="col-lg-10 offset-lg-1">

			<h4 class="mt-5 mb-5 pt-5 text-center"> Add Item </h4>

			<form enctype="multipart/form-data" method="POST" action="../controllers/process_new_item.php" class="my-5">
				<!-- enctype="multipart/form-data" sends data as files, not as $_POST data -->			

				<div class="form-group"> Item Name:
					<input class="form-control" type="text" name="name" required>
				</div>

				<div class="form-group"> Price:
					<input type="number" name="price" class="form-control" min="1" required="">
				</div>

				<div class="form-group"> Description:
					<textarea class="form-control" rows="5" name="description"> </textarea>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group mt-5"> Category:
							<select name="category_id" class="mdb-select md-form colorful-select dropdown-info ml-2"> 
								<?php 
									$sql = "SELECT * FROM categories";
									$categories = mysqli_query($conn, $sql);

									foreach ($categories as $category) {
										extract($category);
										echo "<option value='$id'> $name </option>";
									}
								?>
							</select>
						</div>
						
						<div class="form-inline mt-5"> Brand:
							<select id="brandSelect" name="brand_id" class="mdb-select md-form colorful-select dropdown-info ml-2"> 
								<?php 
									$sql = "SELECT * FROM brands";
									$brands = mysqli_query($conn, $sql);

									foreach ($brands as $brand) {
										extract($brand);
										echo "<option value='$id'> $brand_name </option>";
									}
								?>
								<option value=99999> Other Brand </option>
							</select>
							<input id="newBrand" type="text" name="newBrand" class="form-control form-control-sm ml-3" placeholder="Type brand name here" style="display:none;">
						</div>

						<div class="form-group mt-5"> Image:
							<input class="form-control-file" type="file" name="image" required>
						</div>

					</div> <!-- /col-lg-6 -->


					<div class="col-lg-6">
						
						<div class="form-inline mt-5"> Size (US) and Quantity	:
							<select id="sizeSelect" name="size" class="mdb-select md-form colorful-select dropdown-info ml-2"> 

								<option> Select Size </option>
								<?php 
							
							$min_size = 6;
							$max_size = 13;

							for ($min_size; $min_size <= $max_size; $min_size += 0.5) {
								
								echo "<option value='$min_size'> $min_size </option>";
							}
						?>

								
							</select>

								<input id="qtyInput" type="number" name="qtyInput" class="form-control form-control-sm ml-3" placeholder="Input quantity" style="display:none;">
								
						</div>
					</div> <!-- /col-lg-6 -->
				</div>

				<button class="btn btn-blue-grey mt-2 mb-5"> Add Item </button>
				
			</form>
		</div>
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php") ?>




