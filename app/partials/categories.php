      <div class="col-md-3">


        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo1">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                aria-expanded="false" aria-controls="collapseTwo1">
                <a href="../views/catalog.php"><h5 class="mb-0" id="showAll"> Show All </h5></a>
              </a>
            </div>

          </div>

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo2"
                aria-expanded="false" aria-controls="collapseTwo1">
                <h5 class="mb-0">
                  By Gender <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx1">
              <ul id="category-container" class="list-group">
                <?php 

                  require_once("../controllers/connect.php");

                  $sql_cat = "SELECT * FROM categories";

                  $result = mysqli_query($conn, $sql_cat);

                  if($result) {
                    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  }
                
                  foreach ($categories as $category): 
                ?>
                <li id="<?php echo $category['id'] ?>" class="cat-item list-group-item"> <?php echo $category['name'] ?> </li>
              <?php endforeach; ?>
              </ul>
            </div>
            
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo3">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo3"
                aria-expanded="false" aria-controls="collapseTwo3">
                <h5 class="mb-0">
                  By Brand <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo3" data-parent="#accordionEx1">

              <ul id="category-container" class="list-group">
                <?php 

                  require_once("../controllers/connect.php");
                  
                  $sql_brand = "SELECT * FROM brands";

                  $result = mysqli_query($conn, $sql_brand);

                  if($result) {
                    $brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  }
                
                  foreach ($brands as $brand): 
                ?>
                <li id="<?php echo $brand['id'] ?>" class="brand-item list-group-item"> <?php echo $brand['brand_name'] ?> </li>
              <?php endforeach; ?>
              </ul>

            </div>

          </div>
          <!-- Accordion card -->

        </div>
        <!-- Accordion wrapper -->

      </div>