<?php 
  $pageTitle = "Add Item";
  require_once("../partials/start_body.php");
  if (!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) {
    header("Location: error.php");
  } 
  require_once("../controllers/connect.php");
  require_once("../controllers/show_products.php");

?>

<?php require_once("../partials/navbar1.php") ?>

<main class="container" id="items-page">
	<div class="container" id="items-container">
    <div class="row my-5">

      <div>
        <a class="btn btn-primary mt-2" href="addItem.php"> Add Item </a>
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

                      <a data-id="<?php echo $item['id'] ?>" class="edit-item btn btn-sm btn-warning" href="edit_item.php?id=<?php echo $item['id'] ?>"> Edit Item </a>

                      <form method="POST" action="../controllers/delete_item.php?id=<?php echo $item['id'] ?>">
                        <button name="delete" data-id="<?php echo $item["id"] ?>" class="delete-item btn btn-sm btn-danger"> Delete Item </button>
                      </form>

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

<?php require_once("../partials/footer.php"); ?>
<?php require_once("../partials/end_body.php") ?>


<?php

$pageTitle = "admin items list";
require_once("../controllers/connect.php");
require_once("../controllers/get_categories.php");
require_once("../controllers/get_product.php");
require_once("../partials/start_body.php");
if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)){
  header(("Location: error.php"));
}
?>


   <!-- start of nav -->

  <?php require_once("../partials/navbar.php"); ?>

 <!--  <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("#navigation");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script> -->

  <!-- end of nav -->

  <main id="main" class="role farm-product">
    <div class="container">

      <div class="row pt-5">
        <div class="col-md-3">
          <h1 class="text-left">Livestock</h1>
        </div>
        <div class="col">
          <div class="input-group">
            <input id="search-form" type="text" name="search" class="form-control" placeholder="Search Product">
            <div class="input-group-append">
              <span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
            </div>
          </div>
        </div>
      </div>  
    </div>


    <div class="container-fluid mt-5">
      <section class="row">
        <div class="category-container col-md-3">
          <ul class="livestock list-group">
            <li class="list-group-item" id="showAll"> Show All</li>
            <?php foreach($categories as $category): ?>
              <li class="list-group-item" id="<?php echo $category['id'] ?>"> <?php echo $category["name"] ?></li>
            <?php endforeach; ?>  
          </ul>
        </div>




        <div class="products-container col-md-9">
          <div class="card-columns">
            <?php foreach($items as $item): ?>
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../app/assets/images/<?php echo $item['image'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="product.php?id=<?php echo $item['id'] ?>"><?php echo $item['item_name'] ?></a>
                  </h5>
                  <p class="card-text mb-1">Php <?php echo number_format($item['price'], 2, ".", ",") ?></p>
                  <input type="number" class="form-control" value=1>

                  <a href="edit_item.php?id=<?php echo $item['id']; ?>">
                  <button data-id="<?php echo $item["id"] ?>" class="add-cart btn btn-sm btn-outline-primary mt-1"> Edit </button></a>

                  <form method="POST" action="../controllers/delete_item.php?id=<?php echo $item['id'] ?>">
                  <button name="delete" data-id="<?php echo $item["id"] ?>" class="add-cart btn btn-sm btn-outline-danger mt-1"> Delete Item</button></form>
                </div>
              </div>
            <?php endforeach; ?>      
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php require_once("../partials/end_body.php") ?>