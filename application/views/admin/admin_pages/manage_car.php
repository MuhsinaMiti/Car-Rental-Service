<?php

//echo '<pre>';
//print_r ($all_brand);

?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage Car</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Car Image</th>
								  <th>Car Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	<?php
						  	foreach ($all_car as $v_car)
						  	{
                            ?>
							

								<tr>
								
								<td class="center"><img src="<?php echo base_url().$v_car->car_image?>" width="100" height="100" ></td>


								<td>
									<?php
									echo $v_car->car_name;
									?>

								</td>

								
								<td> 
									<?php

									if ($v_car->car_status==1)
									{

										echo 'active';
									}
									if($v_car->car_status==2)
									{

										echo 'Inactive';
									}



                                   ?>
									
										
									</td>
								
									<td class="center">
									

									<?php

									if ($v_car->car_status==1)
									{

									?>	
									<a class="btn btn-info" href="<?php echo base_url();?>car-published/<?php echo $v_car->car_id?>" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>
                                    <?php
                                     }
                                    if  ($v_car->car_status==2)
                                    {

                                	?>
									

									<a class="btn btn-danger" href="<?php echo base_url();?>car-unpublished/<?php echo $v_car->car_id?>" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

								<?php } ?>

									
									<a class="btn btn-info" href="<?php echo base_url();?>car-edit/<?php echo $v_car->car_id?>" title = "Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>



									<?php
                                     
                                    if  ($v_car->car_status==1 || $v_car->car_status==2 )
                                    {

                                	?>
                                    <a class="btn btn-info" href="<?php echo base_url();?>car-delete/<?php echo $v_car->car_id?>" title = "Delete">
										<i class="halflings-icon white trash"></i> 
									</a>
                                  <?php } ?>
									
								</td>

							
							</tr>

						<?php } ?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>