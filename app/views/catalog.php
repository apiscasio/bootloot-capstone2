<?php
  
  $pageTitle = "Catalog Page";
  require("../controllers/connect.php");
  require("../controllers/show_products.php");
  // require("../controllers/get_categories.php");
  require_once("../partials/start_body.php");

  if (isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 1)) {
    header("Location: error.php");
  }
?>

  <!-- Start your project here-->
  <main id="catalog-page" class="container-fluid">

<?php require_once("../partials/navbar1.php") ?>

   <div class="container">
      <div class="row my-5">

        <?php require_once("../partials/categories.php") ?>

          <div class="col-md-9">
            <h3 class="mb-3 text-center"> Catalog Page </h3>
            <div id="products-container">
                <div class="card-columns">
                <?php foreach ($items as $item): ?> 
                      <div class="card">
                        <img class="card-img-top item-img-main" src="../assets/images/items/<?php echo $item['image'] ?>" alt="card image cap">
                        <div class="card-body">
    
                            <h5 class="card-title"> <a href="product.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?>  </a></h5>
                            <p class="card-text"> &#8369; <?php echo number_format($item['price'], 2) ?> </p>
                            <input type="number" class="form-control" value=1>
                            <button data-id="<?php echo $item['id'] ?>" class="add-cart btn btn-sm btn-blue-grey"> Add to Cart </button>

                        </div>
                      </div>
                  <?php endforeach; ?>
                </div>

            </div>
          </div>
        </div>
      </div>
      <button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
  </main>
  <!-- /Start your project here-->

<?php require_once("../partials/footer.php"); ?>
<?php require("../partials/end_body.php") ?>
