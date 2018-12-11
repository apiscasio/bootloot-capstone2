<?php 
  $pageTitle = "Edit Item";
  require_once("../partials/start_body.php"); 
  require_once("../controllers/connect.php");

	$id = $_GET['id'];

	$sql = "SELECT * FROM items WHERE id= '$id'";

	$item = mysqli_fetch_assoc(mysqli_query($conn, $sql));

	extract($item);
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
		<form enctype="multipart/form-data" method="POST" action="../controllers/process_edit_item.php?id=<?php echo $id; ?>" class="mt-5">
			<!-- enctype="multipart/form-data" sends data as files, not as $_POST data -->			
			
			<div class="form-group"> Item Name:
				<input class="form-control" type="text" name="name" value="<?php echo $item['name'] ?>">
			</div>

			<div class="form-group"> Price:
				<input type="number" name="price" class="form-control" min="1" value="<?php echo $item['price'] ?>">
			</div>

			<div class="form-group"> Description:
				<textarea class="form-control" rows="5" name="description"><?php echo $item['description'] ?></textarea>
			</div>

			<div class="form-group"> Category:
				<select name="category_id"> 
					<?php 

						$sql = "SELECT * FROM categories";
						$categories = mysqli_query($conn, $sql);

						foreach ($categories as $category) {
							extract($category); 
							// extract is another war of getting data. it transforms the columns into variables.

							if ($category['id'] === $category_id) {

								echo "<option selected value='".$category['id']."'> ".$category['name']."</option>";
							} else {
								echo "<option value='".$category['id']."'> ".$category['name']."</option>";
							}
						}
					?>
				</select>
			</div>

			<div class="form-group"> Image:
				<img class="img-edit-item img-fluid" src="../assets/images/items/<?php echo $item['image'] ?>">
				<input class="form-control-file" type="file" name="image" value="<?php echo $item['image'] ?>">
			</div>

			<button data-id="<?php echo $item['id'] ?>" class="edit-item btn btn-sm btn-warning"> Edit Item </button>

			
		</form>
	</div>

	</main>
  	<!-- /Start your project here-->


<?php require_once("../partials/end_body.php") ?>