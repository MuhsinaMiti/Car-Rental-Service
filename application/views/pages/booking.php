
 

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


       <h6 style="color:green">
          <?php

$message = $this->session->message;

if(isset($message)){

  echo $message;
  $this->session->unset_userdata('message');
}

?></h6>

            <div>
          <h6 class="modal-title">Booking information</h6>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">

              <form action="<?php echo base_url()?>update-booking" method="post">
                

                 <div class="form-group">
                  <input type="text" name="customer_name" class="form-control" placeholder="name" value="<?php echo $customer_info->customer_name;?>">
                </div>

                <div class="form-group">
                  <input type="hidden" name="customer_id" class="form-control"  value="<?php echo $customer_info->customer_id;?>">
                </div>
                  

                  <div class="form-group">
                  <input type="email" name="email_address" class="form-control" placeholder="email*" value="<?php echo $customer_info->email_address;?>">
                </div>

                <div class="form-group">
                  <input type="number" name="mobile_number" class="form-control" placeholder="mobile" value="<?php echo $customer_info->mobile_number;?>">
                </div>
                
                <div class="form-group">
                  <input type="text" name="car_delivery_address" class="form-control" placeholder="address to deliver the car" value="<?php echo $customer_info->car_delivery_address;?>">
                </div>
                <div class="form-group">
                  <input type="text" name="days" class="form-control" placeholder="days" value="<?php echo $customer_info->days;?>">
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
              
 
                <div class="form-group">
                  <input type="submit" name="Rbtn" value="Book Now" class="btn btn-block">
                </div>
               
              </form>

            </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
