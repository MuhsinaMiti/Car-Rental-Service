
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        
     

     <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Select Location</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
              <?php 
             $location_info=$this->car_model->get_all_active_location();

            foreach($location_info AS $location){ ?>
                <div class="recent_post_title"> 
                  


                  <a href="<?php echo base_url()?>welcome/location_car/<?php echo $location->location_id; ?>"><?php echo $location->location_name; ?></a>

                   </div>
                   <?php    } ?>


                  
               


               
              </li>
              
              
              
            </ul>
          </div>
        </div>
            


        
       

        





