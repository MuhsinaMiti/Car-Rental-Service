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
           
              
          
              <div class="product-listing-img"> <a href="#"><img src="assets/images/featured-img-2.jpg" class="img-responsive" alt="image"  /> </a>
                <div class="label_icon">Used</div>
                <div class="compare_item">
                  <div class="checkbox">
                    <input type="checkbox" value="" id="compare21">
                    <label for="compare21">Compare</label>
                  </div>
                </div>
              </div>
              <div class="product-listing-content">
                <h5><a href="#">Maserati QUATTROPORTE 1,6</a></h5>
                <p class="list-price">$89,000</p>
                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
                <ul class="features_list">
                  <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                  <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                  <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                </ul>
              </div>
            </div>
          </div>
         <?php } ?>    
          </div>


</div>
        
       




      <?php echo form_open('welcome/getRecords','class=form-horizontal');?>
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
          </div>


          <div class="sidebar_filter">

            <div class="list-group">

              <div class="form-group select">
               <select name="brand_id" class="form-control">
                  <option>Select Brand</option>

                  <?php foreach($brand_info AS $brand){ ?>
                  <option value="<?php echo $brand->brand_id?>"><?php echo $brand->brand_name; ?></option>

                  <?php    } ?>
                  
                </select>
              </div>

                

             <div class="form-group select">
               <select name="fuel_id" class="form-control">
                  <option>Select Fuel</option>
                  <?php foreach($fuel_info AS $fuel){ ?>
                  <option value="<?php echo $fuel->fuel_id?>"><?php echo $fuel->fuel_name; ?></option>

                  <?php    } ?>
                  
                </select>
              </div>   

             </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>
        
       <?php echo form_close()?> 

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="assets/images/post_200x200_1.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              
              
              
            </ul>
          </div>
        </div>
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