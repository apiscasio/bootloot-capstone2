<?php 

  $pageTitle = "Boot Loot";
  require_once("../partials/start_body.php");
  require_once("../controllers/connect.php");

?>

  <!-- Start your project here-->
  <main id="landing-page" class="container-fluid">

    <!-- <div id="logoJumbo" class="jumbotron text-center m-0"> BOOTLOOT </div> -->

    <!-- NAVBAR -->
      <?php require_once("../partials/navbar1.php") ?>
    <!-- /NAVBAR -->

<!-- ======================================================================= -->

    <section class="row jumbo-land"> <!-- landing page section -->

      <div class="jumbotron p-0 m-0">

        <div id="bgJumbo1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../assets/images/bg11.jfif">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/bg12.jfif">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/bg13.jfif">
            </div>
          </div>
        </div>
      </div>
        <div id="jumboText1-container">
          <div id="comfort1Text" class="bgJumbo1Text"> MENS. </div>
          <div class="bgJumbo1Text"> Featuring favorites from top-rated</div>
          <div class="bgJumbo1Text"> brands like Crosby.</div>
          <button type="button" class="btn btn-outline-light waves-effect"> SHOP NOW </button>
        </div>

      <!-- <div class="col-12"> -->

      <div class="jumbotron p-0 m-0">
        <div id="bgJumbo2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../assets/images/bg10.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/bg14.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/bg16.jpg">
            </div>
          </div>
        </div>

      </div>
        <div id="jumboText2-container">
          <!-- <span id="comfortText" class="bgJumbo1Text"> Comfort1 </span> -->
          <div id="comfort2Text" class="bgJumbo1Text"> WOMENS. </div>
          <div class="bgJumbo1Text"> Featuring favorites from top-rated</div>
          <div class="bgJumbo1Text"> brands like Naturalizer.</div>
          <button type="button" class="btn btn-outline-light waves-effect mt-0"> SHOP NOW </button>
        </div>
          
      <!-- </div> -->

    </section> <!-- /landing page section -->

<!-- ======================================================================= -->
    
    <section id="feature-page" class="row"> <!-- featured items section -->

      <div class="row"> 

        <div class="col-12">

          <h3 class="jumbotron text-center bgNavy fontGold"> New Arrivals </h3>
          <div id="bgJumboFeature" class="jumbotron p-0 mt-0 col-12">

            <div id="featureCards" class="row">
              
              <div class="col-lg-3 col-md-3 col-sm-6">

                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img id="arrival1" class="card-img-top" src="../assets/images/items/14f.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <?php 
                    $get_feature_items_query = "SELECT id, name, price FROM items WHERE id = 18";
                    // $get_feature_items_query = "SELECT id, name, price FROM items WHERE id IN (14, 6, 12, 7)";
                    $feature_details = mysqli_query($conn, $get_feature_items_query);

                    foreach ($feature_details as $feature_item) {
                  ?>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="classard-title"> <a href="product.php?id=<?php echo $feature_item['id'] ?>"><?php echo $feature_item['name'] ?>  </a></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>&#8369; <?php echo number_format($feature_item['price'], 2) ?></strong></h5>
                    <!-- Text -->
                   
                    <button class="btn btn-outline-dark showProduct-btn"><a href="product.php?id=<?php echo $feature_item['id'] ?>"> SHOW PRODUCT </a></button>

                  </div>
                  <?php } ?>

                </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

              <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img id="arrival2" class="card-img-top" src="../assets/images/items/2f.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <?php 
                    $get_feature_items_query = "SELECT id, name, price FROM items WHERE id = 6";
                    $feature_details = mysqli_query($conn, $get_feature_items_query);

                    foreach ($feature_details as $feature_item) {
                  ?>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="classard-title"> <a href="product.php?id=<?php echo $feature_item['id'] ?>"><?php echo $feature_item['name'] ?>  </a></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>&#8369; <?php echo number_format($feature_item['price'], 2) ?></strong></h5>
                    <!-- Text -->
                   
                    <button class="btn btn-outline-dark showProduct-btn"><a href="product.php?id=<?php echo $feature_item['id'] ?>"> SHOW PRODUCT </a></button>

                  </div>
                  <?php } ?>

                </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

              <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img id="arrival3" class="card-img-top" src="../assets/images/items/3f.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <?php 
                    $get_feature_items_query = "SELECT id, name, price FROM items WHERE id = 12";
                    $feature_details = mysqli_query($conn, $get_feature_items_query);

                    foreach ($feature_details as $feature_item) {
                  ?>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="classard-title"> <a href="product.php?id=<?php echo $feature_item['id'] ?>"><?php echo $feature_item['name'] ?>  </a></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong> &#8369; <?php echo number_format($feature_item['price'], 2) ?></strong></h5>
                    <!-- Text -->
                   
                    <button class="btn btn-outline-dark showProduct-btn"><a href="product.php?id=<?php echo $feature_item['id'] ?>"> SHOW PRODUCT </a></button>

                  </div>
                  <?php } ?>
                  </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

              <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img id="arrival4" class="card-img-top" src="../assets/images/items/8f.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <?php 
                    $get_feature_items_query = "SELECT id, name, price FROM items WHERE id = 7";
                    $feature_details = mysqli_query($conn, $get_feature_items_query);

                    foreach ($feature_details as $feature_item) {
                  ?>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Title -->
                    <h4 class="classard-title"> <a href="product.php?id=<?php echo $feature_item['id'] ?>"><?php echo $feature_item['name'] ?>  </a></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>&#8369; <?php echo number_format($feature_item['price'], 2) ?></strong></h5>
                    <!-- Text -->
                   
                    <button class="btn btn-outline-dark showProduct-btn"><a href="product.php?id=<?php echo $feature_item['id'] ?>"> SHOW PRODUCT </a></button>

                  </div>
                  <?php } ?>
                  </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

            </div> <!-- /row -->

          </div> <!-- /jummboFeature -->
          
        </div> <!-- /col-12 -->
     
      </div> <!-- /row -->

    </section> <!-- /featured items section -->

<!-- ======================================================================= -->

    <section id="newarrival-page"> <!-- new arrivals section -->

      <div class="row">
        
        <div class="col">

          <h3 id="jumbotronNew" class="jumbotron text-center m-0 bgNavy fontGold"> Featured Brand </h3>
          <div id="bgJumboNew" class="row jumbotron p-0 col-12">

            <a id="dmlogo" href="feat_brand.php"><img src="../assets/images/dmlogo.jpg"></a>
            
              <!--Carousel Wrapper-->
              <div id="carousel-featbrand" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-featbrand" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-featbrand" data-slide-to="1"></li>
                  <li data-target="#carousel-featbrand" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner container-fluid" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/images/bg17.jfif" alt="First slide">
                  </div>
                  <!--/First slide-->
                  <!--Second slide-->
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/bg2.jpg" alt="Second slide">
                  </div>
                  <!--/Second slide-->
                  <!--Third slide-->
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/bg5.jpg" alt="Third slide">
                  </div>
                  <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-featbrand " role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-featbrand" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->


          </div> 

        </div> <!-- /col-12 -->

      </div> <!-- /row -->

    <!--Section: Contact v.2-->
    <section id="contactus">

          <h3 id="jumbotronContact" class="text-center fontGold"> Contact Us </h3>
          <!-- <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p> -->


      <!-- <div class="row"> -->
         
          <div id="bgJumboContact" class="row jumbotron p-0 container">

           <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-warning" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>Metro Manila, PH</p>
                    </li>

                    <li><i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>contact@bootloot.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
      
    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">Top</button>
  </main>
  <!-- /Start your project here-->

<?php require_once("../partials/footer.php") ?>
<?php require_once("../partials/end_body.php") ?>
