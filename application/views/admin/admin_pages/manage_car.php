<?php

//echo '<pre>';
//print_r ($all_brand);

?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Brands</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
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
										
									<a class="btn btn-info" href="" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>

									

									<a class="btn btn-danger" href="" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

									
									<a class="btn btn-info" href="" title = "Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>



									
                                    <a class="btn btn-info" href="" title = "Delete">
										<i class="halflings-icon white trash"></i> 
									</a>

									
								</td>

							
							</tr>

						<?php } ?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>