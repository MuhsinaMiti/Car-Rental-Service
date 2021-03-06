
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title><?php echo $title;?> | Car Rental</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.transitions.css" type="text/css">
<link href="<?php echo base_url()?>assets/css/slick.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

        
<!--Header-->
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">contact@rentcar.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:00-0000-0000-0">+11-123-456-786</a> </div>

              <?php
                  $customer_id=$this->session->userdata('customer_id');
                  if($customer_id)
                  {

                  ?>

                  <div class="login_btn"> <a href="<?php echo base_url("customer-logout");?>" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Logout</a>
                 <!-- <li><a href=""><?php echo $this->session->userdata('customer_name');?></a></li>--> 
                  </div>

               <?php }
               else{

               
               ?>
               <div class="login_btn"> <a href="<?php echo base_url("customer-login");?>" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login</a> </div>

             <?php } ?>
               
              
                  

               

           
            
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"> <?php echo $this->session->userdata('customer_name');?></i>
             <!-- <ul class="dropdown-menu">
                <li><a href="profile-settings.html">Profile Settings</a></li>
                <li><a href="Update-Password.html">Update Password</a></li>
                <li><a href="My-Booking.html">My Booking</a></li>
                <li><a href="Post-a-Testimonial.html">Post a Testimonial</a></li>
                <li><a href="My-Testimonial.html">My Testimonial</a></li>
                <li><a href="#">Sign Out</a></li>
              </ul>-->
            </a>
            </li>
          </ul>
        </div>
       
      </div>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url()?>">Home</a></li>
          <li><a href="<?php echo base_url('about-us')?>">About Us</a></li>
          <li><a href="<?php echo base_url('car-lisitng')?>">Car Listing</a></li>
          <li><a href="<?php echo base_url('contact-us')?>">Contact Us</a></li>
        </ul>
          
  <!-- Navigation end --> 
  
</header>
<!-- /Header --> 

<?php echo $banner;?>

<!-- /Banners --> 
<!-- Recent Car-->
<?php echo $recent_car;?>

<!-- Fun Facts-->
<?php echo $Fun_facts;?>

<!--Testimonial -->
<?php echo $testimonial;?>

<!--Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <h6>Useful Links</h6>
          <ul>

            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="<?php echo base_url('about-us')?>">About Us</a></li>
            <li><a href="<?php echo base_url('contact-us')?>">Contact Us</a></li>
            
          </ul>


        </div>

        <div class="col-md-3">
          <h6>Choose Car </h6>
          <ul>
            <li><a href="<?php echo base_url('car-lisitng')?>">Car Listing</a></li>
            <li><a href="<?php echo base_url()?>">Recent Car</a></li>
            
          </ul>


        </div>

        <div class="col-md-3">
          <h6>Admin </h6>
          <ul>

            <li><a href="<?php echo base_url('admin')?>">Admin Login</a></li>
          </ul>


        </div>
      


     <!--  <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 


<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>