 <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>

           <?php 
             $car_info=$this->car_model->all_recent_car();
          
      foreach ($car_info as $v_car) 
       {
         
       ?>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url().$v_car->car_image?>" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              
              
              
            </ul>
          </div>
          <?php } ?>
        </div>