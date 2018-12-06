<?php
  
  $pageTitle = "Catalog Page";
  require_once("../controllers/connect.php");
  require("../controllers/show_products.php");
  require("../controllers/get_categories.php");
  require_once("../partials/start_body.php") 
?>


  <!-- Start your project here-->
  <main id="catalog-page" class="catalog-page container-fluid">

    <div id="logoJumbo" class="jumbotron text-center m-0"> BOOTLOOT </div>

  <!-- NAVBAR -->
    <?php require_once("../partials/navbar.php") ?>
  <!-- /NAVBAR -->

<!-- ======================================================================= -->
    
    <div class="container">
      <div class="row my-5">

          <!-- Search form -->
            <div class="input-group mt-5 active-purple-4 mb-4">
                <input id="search-form" class="form-control" name="search" type="text" placeholder="Search Product" aria-label="Search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search-icon"><i class="fa fa-search" aria-hidden="true"></i></i></span>
                </div>
            </div>

          <div class="col-md-3">
              
            <ul id="category-container" class="list-group">
              <li id="showAll" class="cat-item list-group-item"> Show All </li>
                <?php foreach ($categories as $category): ?>
                  <li id="<?php echo $category['id'] ?>" class="cat-item list-group-item"> <?php echo $category['name'] ?> </li>
                <?php endforeach; ?>
            </ul>
          <!-- <ul id="products-container" class="text-center"></ul> -->

          </div>

          <div class="col-md-9">

            <div id="products-container">
                <div class="card-columns">
                    <?php foreach ($items as $item): ?>
                      <div class="card">
                        <img class="card-img-top item-img-main" src="../../app/assets/images/items/<?php echo $item['image'] ?>" alt="card image cap">
                        <div class="card-body">
    
                            <h5 class="card-title"> <a href="product.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?>  </a></h5>
                            <p class="card-text">  &#8369; <?php echo number_format($item['price'], 2) ?> </p>
                            <input type="number" class="form-control" value=1>
                            <button data-id="<?php echo $item['id'] ?>" class="add-cart btn btn-sm btn-light"> Add to Cart </button>

                        </div>
                      </div>
                    <?php endforeach; ?>
                </div>
            </div>

          </div>
        </div>
      </div>

  </main>
  <!-- /Start your project here-->

<?php require_once("../partials/end_body.php") ?>
