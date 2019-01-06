<?php 
  $pageTitle = "Edit Item";
  require_once("../partials/start_body.php");
  if (!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) {
    header("Location: error.php");
  }  
  require_once("../controllers/connect.php");

	$id = $_GET['id'];

	$sql = "SELECT * FROM items WHERE id= '$id'";

	$item = mysqli_fetch_assoc(mysqli_query($conn, $sql));

	extract($item);
?>

<?php require_once("../partials/navbar1.php") ?>
  	
<main id="editItem-page" class="container">

	<div class="container col-lg-10" id="editItem-container">

		<div class="col-lg-10 offset-lg-1">

			<h2 class="mt-5 mb-5 pt-5"> <?php echo $pageTitle ?> </h2>

			<form enctype="multipart/form-data" method="POST" action="../controllers/process_edit_item.php?id=<?php echo $item['id'] ?>" class="mt-5">
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

				<div class="form-inline"> Brand:
					<select name="brand_id" id="brandSelect" class="mdb-select md-form colorful-select dropdown-info ml-2"> 
						<?php 

							$sql = "SELECT * FROM brands";
							$brands = mysqli_query($conn, $sql);

							foreach ($brands as $brand) {
								extract($brand); 
								// extract is another war of getting data. it transforms the columns into variables.

								if ($brand['id'] === $brand) {

									echo "<option selected value='".$brand['id']."'> ".$brand['brand_name']."</option>";
								} else {
									echo "<option value='".$brand['id']."'> ".$brand['brand_name']."</option>";
								}
							}
						?>
							<option value=999> Other Brand </option>
					</select>
							<input id="newBrand" type="text" name="newBrand" class="form-control form-control-sm ml-3" placeholder="Type brand name here" style="display:none;">
				</div>

				<div class="form-group"> Image:
					<img class="img-edit-item img-fluid" src="../assets/images/items/<?php echo $item['image'] ?>">
					<input class="form-control-file" type="file" name="image" value="<?php echo $item['image'] ?>">
				</div>

				<button data-id="<?php echo $item['id'] ?>" class="edit-item btn btn-sm btn-warning mb-5"> Edit Item </button>

			</form>
		</div>
	</div>	
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>



<?php require_once("../partials/end_body.php") ?>