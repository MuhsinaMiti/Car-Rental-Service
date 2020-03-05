<!DOCTYPE HTML>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit-icons.min.js"></script>

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Search Result</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="<?php echo base_url()?>">Home</a></li>
        <li>Car Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 






<!--Listing-grid-view-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        
 <div class="col-md-3">
  
  <?=form_open('welcome/search')?> 

 <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>

          <form action="#" method="get" id="header-search-form">
            <input type="text" name="query" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>

          <?=form_close();?>
          <?=form_error('query',"<p class='navbar-text text-danger'>",'</p>')?>
        </div>
          
        </div>


        <div class="row">
<?php
      foreach ($car as $v_car) 
    {
         
    ?>
          <div class="col-md-4 grid_listing">
            <div class="product-listing-m gray-bg">
           
              
          
              <div class="product-listing-img"> <a href="<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>"><img src="<?php echo base_url().$v_car->car_image?>" class="img-responsive" alt="image" width="600" height= "300" /> </a>




            <div>
              
                    <?php if($v_car->booking_status == 1){?>
                                                             
                 <div class="label_icon">Not avoilable</div>

                  <?php }else {?>

                  
                 <div class="label_icon">Avoilable</div>

                 <?php }?>

                </div>

                
               
                <div class="compare_item">
                  
                </div>
              </div>
              <div class="product-listing-content">
                <h5><a href="<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>"><?php echo $v_car->car_name?></a></h5>
                <p class="list-price"><span>Tk/day</span> <?php echo $v_car->price_per_day?></p>
               
              <!--  <p><?php echo $v_car->car_overview?></p> -->
                
                
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

         <!-- <ul style="list-style-type: none" class="uk-text-primary"><li style="float: left;padding: 10px"><?php echo $links; ?></li></span>  -->


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