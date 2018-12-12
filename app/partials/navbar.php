<nav class="navbar navbar-expand-lg navbar-light sticky-top">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">Cop A Boot</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
     <!-- Dropdown -->

    <?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['roles_id']==2)) { ?>
      <li class="nav-item dropdown">
          <a class="dropdown-item" href="../views/catalog.php">Catalog</a>
      </li>
    <?php } ?>

    <?php if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">Catalog</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownCatalogLink">
          <a class="dropdown-item" href="../views/items.php">Edit Items</a>
          <a class="dropdown-item" href="../views/addItem.php">Add Items</a>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="dropdown-item" href="../views/#.php">User Admin</a>
      </li>
    <?php } ?>
      <form class="form-inline">
        <div class="md-form">
          <input class="form-control" type="text" placeholder="Search for products, trends and brands" aria-label="Search">
        </div>
      </form>


    <!-- Dropdown -->
      <li class="nav-item dropdown">

      <?php if (!isset($_SESSION['user'])) : ?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownLoginLink">
            <a class="dropdown-item <?php if($section == "login"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/login.php?section=login">Login
            <a class="dropdown-item <?php if($section == "register"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/register.php?section=register">Register
        </div>
      <?php else : ?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><i class="fa fa-user amber-text fa-2x" aria-hidden="true"></i></a>
        
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownTrackOrdersLink">
          <a class="dropdown-item" href="../views/profile.php"> Welcome, <?php echo $_SESSION['user']['username']; ?> </a>

          <?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['roles_id']==2)) { ?>
              <a class="dropdown-item" href="#">Track My Orders</a>
          <?php } ?>

          <?php if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) { ?>
              <a class="dropdown-item" href="orders.php">Orders Admin Page</a>
          <?php } ?>

          <a id="logout" class="dropdown-item" href="../controllers/logout.php">Logout</a>
        </div>
      <?php endif; ?>

      </li>
        <?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['roles_id']==2)) { ?>
      <li class="nav-item">
        <a class="nav-link" href="catalog.php"><span id="likes-count" class="badge badge-pill badge-dark small"> 8 </span> Likes </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><span id="cart-count" class="badge badge-pill badge-dark small"> 
          <?php 
            if (isset($_SESSION['cart'])) {
              echo array_sum($_SESSION['cart']);
            } else {
              echo 0; 
            } 
          ?> 
        </span> My Cart </a>
      </li>
      <?php } ?>

    </ul>
    <!-- Links -->

  </div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->