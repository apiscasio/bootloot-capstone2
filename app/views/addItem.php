<?php 
  $pageTitle = "Add Item";
  require_once("../partials/start_body.php"); 
  require_once("../controllers/connect.php");


?>

  	<!-- Start your project here-->
  	<main id="landing-page" class="container-fluid">

    <div id="logoJumbo" class="jumbotron text-center m-0"> BOOTLOOT </div>

    <!-- NAVBAR -->
      <?php require_once("../partials/navbar.php") ?>
    <!-- /NAVBAR -->

<!-- ======================================================================= -->

	<div class="col-lg-8 offset-lg-2">
		<h1 class="text-center mt-5"> <?php echo $pageTitle ?> </h1>
		<form enctype="multipart/form-data" method="POST" action="../controllers/process_new_item.php" class="mt-5">
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

			<div class="form-group"> Category:
				<select name="category_id"> 
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

			<div class="form-group"> Image:
				<input class="form-control-file" type="file" name="image" required>
			</div>

			<button class="btn btn-primary mt-2"> Add Item </button>

			
		</form>
	</div>

	</main>
  	<!-- /Start your project here-->


<?php require_once("../partials/end_body.php") ?>