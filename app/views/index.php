<?php 

  $pageTitle = "Cop a Boot";
  require_once("../partials/start_body.php") 
?>

  <!-- Start your project here-->
  <main id="landing-page" class="container-fluid">

    <div id="logoJumbo" class="jumbotron text-center m-0"> BOOTLOOT </div>

    <!-- NAVBAR -->
      <?php require_once("../partials/navbar.php") ?>
    <!-- /NAVBAR -->

<!-- ======================================================================= -->

    <section class="row"> <!-- landing page section -->

      <div id="bgJumbo1" class="jumbotron p-0 m-0">
        <div data-animate-scroll='{  
      "scaleX": "1.5",  
      "scaleY": "1.5",  
      "x": "-10",  
      "y": "-10",  
      "rotation": "-3",  
      "alpha": "1",  
      "easingType": "Cubic.easeOut",  
      "duration": "1" }' id="jumboText1-container">
          <span id="comfortText" class="bgJumbo1Text"> Comfort </span>
          <span class="bgJumbo1Text"> and Style. </span>
          <p class="bgJumbo1Text"> UNITE.</p>
        </div>
      </div>

      <!-- <div class="col-12"> -->

        <div id="bgJumbo2" class="jumbotron p-0 m-0">

          <div id="jumboText2-container">
            <span id="comfortText" class="bgJumbo1Text"> Comfort </span>
            <span class="bgJumbo1Text"> and Style. </span>
            <p class="bgJumbo1Text"> UNITE.</p>
          </div>
          
          <span id="mensPage"> Mens </span>
          <span id="womensPage"> Womens </span>

        </div>
          
      <!-- </div> -->

    </section> <!-- landing page section -->

<!-- ======================================================================= -->

    <section id="feature-page" class="row"> <!-- featured items section -->

      <div class="row"> 

        <div class="col-12">

          <h3 class="jumbotron text-center m-0"> Featured Products </h3>
          <div id="bgJumboFeature" class="jumbotron p-0 mt-5 col-12">

            <div id="featureCards" class="row">
              
              <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                    <!-- Text -->
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>

                    <!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                    <!-- Twitter -->
                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                  </div>

                </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

              <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                    <!-- Text -->
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>

                    <!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                    <!-- Twitter -->
                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                  </div>

                </div>
                <!-- Card Wider -->
              </div> <!-- /col-4 -->

              <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- Card Wider -->
                <div class="card card-cascade wider">

                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                    <!-- Text -->
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>

                    <!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
                    <!-- Twitter -->
                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

                  </div>

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
        
        <div class="col-12">

          <h3 id="jumbotronNew" class="jumbotron text-center m-0"> New Arrivals </h3>
          <div id="bgJumboNew" class="jumbotron p-0 col-12">
            
            <!-- <div class="row"> -->
              
            <!-- </div> /row -->

          </div> 

        </div> <!-- /col-12 -->

      </div> <!-- /row -->

    </section> <!-- /new arrivals section -->

  </main>
  <!-- /Start your project here-->

<?php require_once("../partials/end_body.php") ?>
