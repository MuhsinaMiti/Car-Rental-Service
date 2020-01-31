<!DOCTYPE HTML>
<html lang="en">




<!--Listing-grid-view-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
            <p><span>Results for your search.</span></p>
          </div>
          <div class="result-sorting-by">
            <p>Sort by:</p>
            <form action="#" method="post">
              <div class="form-group select sorting-select">
               
              </div>
            </form>
          </div>
        </div>


        <div class="row">
<?php
      foreach ($all_active_car as $v_car) 
    {
         
    ?>
          <div class="col-md-4 grid_listing">
            <div class="product-listing-m gray-bg">
           
              
          
              <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url().$v_car->car_image?>" class="img-responsive" alt="image" width="600" height= "300" /> </a>
               
                <div class="compare_item">
                  
                </div>
              </div>
              <div class="product-listing-content">
                <h5><a href="<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>"><?php echo $v_car->car_name?></a></h5>
                <p class="list-price">tk <?php echo $v_car->price_per_day?></p>
               
                <p><?php echo $v_car->car_overview?></p>
                
                
                <ul class="features_list">
                  <li><i class="fa fa-car" aria-hidden="true"></i><?php echo $v_car->fuel_name?></li>
                  <li><i class="fa fa-car" aria-hidden="true"></i><?php echo $v_car->brand_name?></li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $v_car->location_name?></li>
                </ul>
              </div>
            </div>
          </div>
         <?php } ?>    
          </div>


</div>
        
       




      <?php echo $car_filter;?> 
     <!-- <?php echo $sidebar_recent_car;?> -->

       


      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!--/Listing-grid-view--> 
 


<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 












<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<!--<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>-->


</body>


</html>