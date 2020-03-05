
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
            


        
       

        





