<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
<!-- slider-product.//
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
</div>  -->

<!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
    </aside>
    <aside class="col-sm-7">
<article class="card-body p-5">
  <h3 class="title mb-3"><?php echo $car_info->car_name?></h3>

<p class="price-detail-wrap"> 
  <span class="price h3 text-warning"> 
    <span class="currency"></span><span class="num"><?php echo $car_info->price_per_day?></span>
  </span> 
  <span>BDT/day</span> 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p><?php echo $car_info->car_overview?> </p></dd>
</dl>
<dl class="param param-feature">
  <dt>Brand</dt>
  <dd><?php echo $car_info->brand_name?></dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Fuel</dt>
  <dd><?php echo $car_info->fuel_name?></dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Delivery</dt>
  <dd>Russia, USA, and Europe</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
  <div class="row">
    <div class="col-sm-5">
      <dl class="param param-inline">
        <dt>Quantity: </dt>
        <dd>
          <select class="form-control form-control-sm" style="width:70px;">
            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
          </select>
        </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
    <div class="col-sm-7">
      <dl class="param param-inline">
          <dt>Size: </dt>
          <dd>
            <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <span class="form-check-label">SM</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <span class="form-check-label">MD</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <span class="form-check-label">XXL</span>
          </label>
          </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
  </div> <!-- row.// -->
  <hr>
  <a href="#" class="btn btn-warning"> Book Now </a>
  
</article> <!-- card-body.// -->
    </aside> <!-- col.// -->
  </div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->


<br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h4 class="text-white"> <br> </p>   <br>
<p><a class="" target="_blank" href="http://bootstrap-ecommerce.com/">   
 <i class=" "></i></a></p>
</div>
<br><br><br>
</article>