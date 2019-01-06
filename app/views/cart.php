<?php 
$pageTitle = "Cart";
require_once("../partials/start_body.php");
require_once("../controllers/connect.php");

if (isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 1)) {
    header("Location: error.php");
  }

?>

<?php require_once("../partials/navbar1.php") ?>

<main class="container" id="cart-page">
	<div class="container" id="cart-container">
		<section class="row">
			<div class="col">
				<h3 class="mt-5 mb-5"> My Cart </h3>

				<div class="table-responsive">
					<table id="cart-items" class="table table-striped table-bordered">
						<?php if(isset($_SESSION['cart']) && (count($_SESSION['cart']) == 0 || count($_SESSION['cart']) == null)) {  ?>
						
							<h5>Your Shopping Cart is Empty</h5>
							<a type="button" class="btn btn-blue-grey mt-2 mb-5" href="catalog.php">Back to Shopping</a>

						<?php } else if (isset($_SESSION['cart']) && count($_SESSION['cart']) != 0) { count($_SESSION['cart']); ?>
			
						<thead>
							<tr class="text-center">
								<th>Item Name</th>
								<th>Item Price</th>
								<th>Item Quantity</th>
								<th>Item Subtotal</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>

							<?php 
							require_once("../controllers/connect.php");
							$cart_total = 0;
							foreach($_SESSION['cart'] as $id => $qty) {
									$sql = "SELECT * FROM items WHERE id = '$id'";
									$info = mysqli_query($conn, $sql);
									$item = mysqli_fetch_assoc($info);
									$subtotal = $_SESSION['cart'][$id] * $item['price'];
									$cart_total += $subtotal; ?>
							 <tr>
							 	<td> <?php echo $item['name'] ?></td>
							 	<td> <?php echo $item['price'] ?></td>
							 	<td> <input type="number" class="form-control text-right" value="<?php echo $qty ?>" data-id="<?php echo $id ?>"> </td>
							 	<td><?php echo $subtotal ?></td>
							 	<td> <button class="btn btn-danger item-remove" data-id="<?php echo $id ?>"> Remove From Cart</button></td>
							 </tr>

							 <?php 
							}
							 mysqli_close($conn);

							  ?>

						</tbody>

						<tfoot>
							<tr>
								<td class="text-right font-weight-bold align-middle" colspan="3">Total:</td>
								<td class="text-right font-weight-bold align-middle" id="total_price"><?php echo $cart_total; ?></td>
								<td class="text-center align-middle">
									<a href="checkout.php" class="btn btn-blue-grey"> Proceed to Checkout</a>
								</td>
							</tr>
						</tfoot>

						<?php } ?>
						
					</table>	
				</div>
			</div>
		</section>	
	</div>
	<button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
</main>


<?php require_once("../partials/footer.php"); ?>
<?php  require_once("../partials/end_body.php") ?>