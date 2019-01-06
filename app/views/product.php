<?php

	$pageTitle = "Product Information";
	require("../controllers/connect.php");
	// require_once("../controllers/get_categories.php");
  require_once("../partials/start_body.php"); 

  // extract(var_array)act($product);
  
?>

  <main id="product-page" role="main">
	    <!-- NAVBAR -->
	      <?php require_once("../partials/navbar1.php") ?>
	    <!-- /NAVBAR -->

    <div class="container" id="productPage-container">
      <div class="row my-5">
          
          <?php require_once("../partials/categories.php") ?>

          <div class="col-md-9">
            <?php
              if(isset($_GET['search'])) {

                $searchVal = $_GET['search'];

                $sql = "SELECT * FROM items WHERE name LIKE '%$searchVal%' OR description LIKE '%$searchVal%'";

                $result = mysqli_query($conn, $sql);

                if($result !== null) {
            ?>
            <div id="products-container">

              <?php echo "<div class='chip chip-lg blue-gradient white-text mb-3'> $searchVal </div>" ?>

              <div class="card-columns">
              <?php foreach ($result as $product) { ?>
                <div class="card">
                  <img class="card-img-top item-img-main" src="../assets/images/items/<?php echo $product['image'] ?>" alt="card image cap">
                  <div class="card-body">

                      <h3 class="card-title"> <a href="product.php?id=<?php echo $product['id'] ?>"> <?php echo $product['name'] ?>  </a></h3>
                      <h6> <?php echo $product['description'] ?> </h6>
                      <p class="card-text">  &#8369; <?php echo number_format($product['price'], 2) ?> </p>
                      <a href="" class="btn btn-blue-grey"> Add to Cart </a>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php
                } else { 
                  $searchVal = NULL;
                }
              } 

            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
              $prod_id = htmlspecialchars($_GET['id']);

              $sql = "SELECT * FROM items where id = '$prod_id'";

              $result = mysqli_query($conn, $sql);

              foreach ($result as $product) { 
          ?>
                <div class="card">
                  <img class="card-img-top item-img-main" src="../assets/images/items/<?php echo $product['image'] ?>" alt="card image cap">
                  <div class="card-body">
                      <h3 class="card-title"> <a href="product.php?id=<?php echo $product['id'] ?>"> <?php echo $product['name'] ?>  </a></h3>
                      <h6> <?php echo $product['description'] ?> </h6>
                      <p class="card-text">  &#8369; <?php echo number_format($product['price'], 2) ?> </p>
                      <a href="" class="btn btn-blue-grey"> Add to Cart </a>
                  </div>
                </div>
          <?php
                } 
              } else {
                $prod_id = NULL;
              }
                  // mysqli_close($conn);
          ?>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
	</main>

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php"); ?>
