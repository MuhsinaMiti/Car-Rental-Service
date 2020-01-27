<!-- Recent Car-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Recent Car</a></li>
        </ul>
        <ul></ul>
      </div>



      
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

      <?php
      foreach ($all_recent_car as $v_car) 
       {
         
       ?>

          <div class="col-list-3">
            <div class="recent-car-list">
              <div class="car-info-box"> <a href="#"><img src="<?php echo base_url().$v_car->car_image?>" class="img-responsive" alt="" width="600" height= "300"></a>
                  <!--<div class="label_icon" BOOK CAR</a></div>-->
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i>Brand</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>fuel type</li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Seats</li>
                </ul>
              </div>
              <div class="car-title-m">
                <h6><a href="<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>"><?php echo $v_car->car_name?></a></h6>
                <span class="price">BDT <?php echo $v_car->price_per_day?></span> 
              </div>
                <div class="inventory_info_m">
                  <p><?php echo $v_car->car_overview?></p>
                  <div class="form-group">
                  <a href="<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>" class="btn btn-default"><i class="fa fa-shopping cart"></i>Car Details</a>
                </div>
<!--"<?php echo base_url()?>car-details/<?php echo $v_car->car_id; ?>" -->

                 </div>


            </div>
          </div>
          <?php } ?>
        
      
        
</section>
<!-- /Recent Car --> 