
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        
     

     <div class="sidebar_widget">
          <div class="widget_heading">
            <h6><i class="fa fa-car" aria-hidden="true"></i> Search with Location</h6>
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


 <div class="sidebar_widget">
          <div class="widget_heading">
            <h6><i class="fa fa-car" aria-hidden="true"></i> Search with Brand</h6>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
              <?php 
             $brand_info=$this->car_model->get_all_active_brand();

            foreach($brand_info AS $brand){ ?>
                <div class="recent_post_title"> 
                  


                  <a href="<?php echo base_url()?>welcome/brand_car/<?php echo $brand->brand_id; ?>"><?php echo $brand->brand_name; ?></a>

                   </div>
                   <?php    } ?>


                    </li>
              
              
              
            </ul>
          </div>
        </div>

        </div>




      <!--Side-Bar-->
      
        
     

    
            


        
       

        






            


        
       

        





