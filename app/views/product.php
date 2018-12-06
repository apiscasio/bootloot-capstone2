<?php

	$pageTitle = "Product Information";
	require_once("../controllers/connect.php");
	require_once("../controllers/get_product.php");
	require_once("../controllers/get_categories.php");
  require_once("../partials/start_body.php"); 

  extract($product);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> <?php echo $pageTitle ?> </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Start your project here-->
	  <main id="landing-page" class="container-fluid">

	    <div id="logoJumbo" class="jumbotron text-center m-0"> BOOTLOOT </div>

	    <!-- NAVBAR -->
	      <?php require_once("../partials/navbar.php") ?>
	    <!-- /NAVBAR -->

	<main id="main" role="main">

    <div class="container">
      <div class="row my-5">
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

                    <?php if($product !== null) : ?>

                        <img class="card-img-top item-img-main" src="../assets/images/items/<?php echo $image ?>" alt="card image cap">
                        <div class="card-body">
    
                            <h3 class="card-title"> <a href="product.php?id=<?php echo $id ?>"> <?php echo $name ?>  </a></h3>
                            <h6> <?php echo $description ?> </h6>
                            <p class="card-text">  &#8369; <?php echo number_format($price, 2) ?> </p>
                            <a href="" class="btn btn-sm btn-light"> Add to Cart </a>

                        </div>
                      </div>
                   <?php else: ?>
                    <h1> Product Not Found </h1>
                  <?php endif; ?>
                </div>
            </div>

          </div>
        </div>
      </div>


	</main>

<?php require_once("../partials/end_body.php") ?>
