

<div class="container">
  <br>  <p class="text-center"> <a href=""> </a></p>
<hr>

  
<div class="card">
  <div class="row">
    <aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="<?php echo base_url().$car_info->car_image?>" width="450" height= "300"></a></div>
</div> 

<!-- slider-nav.// -->
</article> 
    </aside>
    <aside class="col-sm-7">
<article class="card-body p-5">
  <h3 class="title mb-3"><?php echo $car_info->car_name?></h3>

<p class="price-detail-wrap"> 
  <span class="price h3 text-warning"> 
    <span class="currency"></span><span class="num"><?php echo $car_info->price_per_day?></span>
  </span> 
  <span>Tk/day</span> 
</p> 
<dl class="item-property">
  <dt>Description</dt>
  <dd><p><?php echo $car_info->car_overview?> </p></dd>
</dl>
<dl class="param param-feature">
  <dt>Brand</dt>
  <dd><?php echo $car_info->brand_name?></dd>
</dl>  
<dl class="param param-feature">
  <dt>Fuel</dt>
  <dd><?php echo $car_info->fuel_name?></dd>
</dl>  
<dl class="param param-feature">
  <dt>Delivery</dt>
  <dd><?php echo $car_info->location_name?></dd>
</dl> 

<hr>

  <hr>
 <?php
    $customer_id=$this->session->userdata('customer_id');
    if($customer_id)

    {

    ?>

<form action="<?php echo base_url()?>booking" method="post">
                
                
                  <input type="hidden" name="car_id" value ="<?php echo $car_info->car_id; ?>" class="form-control" placeholder="Password">
               
                
               
                <div class="form-group">
                  <input type="submit" value="Book Now " class="btn btn-default">
                </div>
              </form>

    
  <!--<a href="<?php echo base_url("booking");?>" class="btn btn-warning" > Book Now </a> -->

   <?php }
  else{
    ?>
<a href="<?php echo base_url("customer");?>" class="btn btn-warning"> Book Now </a>
               
 <?php } ?> 
  
</article> 
    </aside> 
  </div> 
</div>


</div>

      


            <!--   <div class="form-group">
                  <a href="<?php echo base_url()?>booking/<?php echo $car_info->car_id; ?>" class="btn btn-default"><i class="fa fa-shopping cart"></i>Book Now</a>
                </div> -->


<br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h4 class="text-white"> <br> </p>   <br>
<p><a class="" target="_blank" href="">   
 <i class=" "></i></a></p>
</div>
<br><br><br>
</article>