

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h6 class="my-5 h2 text-left">Customer</h6>
    </br>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          

            <div>
          <h6 class="modal-title">Register</h6>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">

              <form action="<?php echo base_url()?>customer-registration" method="post">

               <div class="form-group">
                  <input type="text" name="customer_name" class="form-control" placeholder="Full Name">
                </div>
                  

                  <div class="form-group">
                  <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                  <input type="submit" value="Sign up" class="btn btn-block">
                </div>

              </form>

            </div>

                </div>
              </div>
            </div>

          </br>
             




        <div>     
          <h6 class="modal-title">Returning Login Your Account</h6>
      </div>

      

<!--<h3 style="color:red">-->
 <p class = 'text-danger'>
          <?php

$error_message = $this->session->error_message;

if(isset($error_message)){

  echo $error_message;
  $this->session->unset_userdata('error_message');
}

?></p>



           
         

      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="<?php echo base_url()?>customer-login" method="post">
                <div class="form-group">
                  <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                
               
                <div class="form-group">
                  <input type="submit" value="Sign In" class="btn btn-block">
                </div>
              </form>
            </div>

                </div>
                <!--Grid column-->
</div>
</div>
</div>
</div>
</div>
</main>  
<div>
</div>   
</br>          
                