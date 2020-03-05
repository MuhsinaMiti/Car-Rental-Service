
 

 <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h6 class="my-5 h2 text-left">Booking</h6>
    </br>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">


 

<p class = 'text-success'>
          <?php

$message = $this->session->message;

if(isset($message)){

  echo $message;
  $this->session->unset_userdata('message');
}

?></p>

            <div>
          <h6 class="modal-title">Booking information</h6>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">





              <form action="<?php echo base_url()?>save-booking" method="post">
                

                 <div class="form-group">
                  <input type="text" required="" name="customer_name" class="form-control" placeholder="name" value= "<?php echo $customer_info->customer_name;?>">

                  <!--value = "<?php echo $customer_info->customer_name;?>" -->
                </div>

                <div class="form-group">
                  <input type="hidden" name="customer_id" class="form-control"  value="<?php echo $customer_info->customer_id;?>">
                </div>
                  

                  <div class="form-group">
                  <input type="email" required="" name="email_address" class="form-control" placeholder="email*" value="<?php echo $customer_info->email_address;?>">
                </div>

                <div class="form-group">
                  <input type="number" required="" name="mobile_number" class="form-control" placeholder="mobile" value="">
                </div>
                
                <div class="form-group">
                  <input type="text" required="" name="car_delivery_address" class="form-control" placeholder="address to deliver the car" value="">
                </div>

                <div class="form-group">
                  <input type="date" required="" name="date" class="form-control" placeholder="from the date to book" value="">
                </div>

                <div class="form-group">
                  <input type="text" required="" name="days" class="form-control" placeholder="days" value="">
                </div>

                <div>
               <h6 class="modal-title">Payment</h6>
               </div>
              
             <div>
               <h6></h6>
             </div>


               <div class="form-group">
               <input type="radio" name="payment" value="payment" checked>Cash on delivery only<br>
              </div>

                </br>

                <?php
                $car_id=$this->session->userdata('car_id');
              if($car_id)

               {

               ?>
              
                <div class="form-group">
                  <input type="submit" name="Rbtn" value="Book Now" class="btn btn-block">
                </div>

                <?php }
              else{
                ?>
              <a href="<?php echo base_url("car-listing");?>" class="btn btn-warning"> Choose a Car </a>
               
             <?php } ?> 

             </br>            
               
              </form>

             </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
