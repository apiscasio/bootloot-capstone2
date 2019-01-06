
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
	
 	<!-- Collapse button -->
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<!-- Collapsible content -->
	<div class="row justify-content-lg-center collapse navbar-collapse" id="collapsibleNav">
		<!-- Links -->
	    <ul class="col-lg-12 navbar-nav">
	    	<!-- USER ROLE -->
	    	<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) { ?> 
  	    	<li class="col-lg-2 offset-1 nav-item">
	        	<a class="nav-link vertical-center" href="catalog.php">Catalog</a>
	      	</li>
	      	<?php } ?>

	      	<!-- ADMIN ROLE -->
	    	<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?> 
      		<li class="col-lg-2 nav-item dropdown">
        		<a class="nav-link vertical-center dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
        		<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownCatalogLink">
          			<a class="dropdown-item" href="../views/items.php">Edit Items</a>
          			<a class="dropdown-item" href="../views/addItem.php">Add Items</a>
        		</div>
      		</li>
    		<?php } ?>
          
    		<form action="product.php" method="GET" class="col-lg-3 form-inline">
      			<div class="md-form my-1">
        			<input id="search-form" class="form-control active-amber d-block" name="search" type="text" placeholder="Search for products, trends and brands" aria-label="Search">
      			</div>
    		</form>

    		<!-- Navbar brand -->
		 	<a class="col-lg-2 navbar-brand" href="index.php"><img id="bootloot-nav" src="../assets/images/bootloot1.png"></a>

    		<!-- Dropdown USER FAV-->
    		<?php if (!isset($_SESSION['user'])) : ?>
      		<li class="col-lg-1 offset-lg-1 nav-item dropdown">

        		<a class="nav-link dropdown-toggle vertical-center" id="navbarDropdownMenuLink" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i></a>
        
		        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownLoginLink">
		            <a class="dropdown-item <?php if($section == "login"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/login.php?section=login">Sign In</a>
		            <a class="dropdown-item <?php if($section == "register"){ echo "active"; } ?>" href="/csp2-ecommerce/app/views/register.php?section=register">Sign Up</a>
		        </div>
          </li>
           
        <?php else : ?>

          <?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?> 
          <li class="col-lg-1 offset-lg-2 nav-item">
              <a class="nav-link vertical-center" href="../views/users.php">User Admin</a>
          </li>
          <?php } ?>

          <li class="col-lg-1 offset-lg-2 nav-item dropdown">

            <a class="nav-link dropdown-toggle vertical-center" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><i class="fa fa-user amber-text" aria-hidden="true"></i></a>
            
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownTrackOrdersLink">
             <span id="welcomeText" class="dropdown-item">Welcome, <?php echo $_SESSION['user']['username'] ?></span>
		        	<a class="dropdown-item" href="../views/profile.php">Account</a>

		          	<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) : ?>
		          	<a class="dropdown-item" href="orders.php">My Orders</a>
		          	<?php endif; ?>

                <?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) : ?>
                <a class="dropdown-item" href="orders.php">Orders Admin Page</a>

                <?php endif; ?>

		          	<a id="logout" class="dropdown-item" href="../controllers/logout.php">Sign Out</a>
		        </div>
		    </li>
        <?php endif; ?>

      		<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)) : ?>
<!--       		<li class="col-lg-1 nav-item">
        		<a class="nav-link vertical-center" href="catalog.php"><span id="wishlist -count" class="badge badge-pill badge-dark small"> 8 </span><i class="fa fa-heart" aria-hidden="true"></i></a>
      		</li> -->
      
      		<li class="col-lg-1 nav-item">
        		<a class="nav-link vertical-center" href="cart.php"><span id="cart-count" class="badge badge-pill badge-light small">
          		<?php 
            	if (isset($_SESSION['cart'])) {
              		echo array_sum($_SESSION['cart']);
            	} else {
              		echo 0; 
            	} ?> 
        		</span><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </li>
  			<?php endif; ?>

    		<!-- <li class="col-lg-1 nav-item">
		        <a class="nav-link" href="profile.php">Account</a>
		    </li> -->


	    </ul>
	</div>

</nav>

