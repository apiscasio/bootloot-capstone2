<nav class="navbar navbar-expand-lg navbar-light sticky-top">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">BOOTLOOT</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
     <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Catalog</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownCatalogLink">
          <a class="dropdown-item" href="../views/catalog.php">View Catalog</a>
          <a class="dropdown-item" href="../views/addItem.php">Add Items</a>
          <a class="dropdown-item" href="../views/items.php">Edit Items</a>
        </div>
      </li>

      <form class="form-inline">
        <div class="md-form my-center">
          <input class="form-control mr-sm-2" type="text" placeholder="Search for products, trends and brands" aria-label="Search">
        </div>
      </form>


        <!-- Dropdown -->
          <li class="nav-item dropdown">

              <?php if (!isset($_SESSION['user'])) : ?>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"><i class="fa fa-user fa-2x py-0" aria-hidden="true"></i>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownLoginLink">
                    <a class="dropdown-item <?php if($section == "login"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/login.php?section=login">Login
                    <a class="dropdown-item <?php if($section == "register"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/register.php?section=register">Register
                </div>
              <?php else : ?>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"><i class="fa fa-user amber-text fa-2x py-0" aria-hidden="true"></i></a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownTrackOrdersLink">
                    <a class="dropdown-item" href="../views/profile.php"> Welcome, <?php echo $_SESSION['user']['username']; ?> </a>
                    <a class="dropdown-item" href="#">Track My Orders</a>
                    <a id="logout" class="dropdown-item" href="../controllers/logout.php">Logout</a>
                </div>
              <?php endif; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalog.php"> <!-- <i class="fa fa-heart fa-2x" aria-hidden="true"></i> --> <span id="likes-count" class="badge badge-pill badge-dark small"> 8 </span> Likes </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"> <!-- <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> --> 
              <span id="card-count" class="badge badge-pill badge-dark small"> 
                <?php 
                  if (isset($_SESSION['cart'])) {
                    echo array_sum($_SESSION['cart']);
                  } else {
                    echo 0; 
                  } 
                ?> 
              </span> My Cart </a>
          </li>

    </ul>
    <!-- Links -->


  </div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->