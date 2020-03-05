<?php

//echo '<pre>';
//print_r ($all_fuel);

?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>fuels</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Fuel Id</th>
								  <th>Fuel Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php foreach($all_fuel as $fuel){?>

								<tr>
								<td><?php echo $fuel->fuel_id ?></td>
								<td class="center"><?php echo $fuel->fuel_name ?></td>

								<td> 
									<?php
                                     if ($fuel->fuel_status == 1){

                                     	echo 'Active';
                                     }elseif($fuel->fuel_status == 2){

                                     	echo'Inactive';
                                     }elseif($fuel->fuel_status == 3){

                                     	echo 'Deleted';

                                     	
                                     }
                                    ?>
										
									</td>
								
									<td class="center">
										<?php if($fuel->fuel_status == 1 || $fuel->fuel_status == 3){?>
									<a class="btn btn-info" href="<?php echo base_url("change-fuel-status/$fuel->fuel_id/2");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>

									<?php }elseif ($fuel->fuel_status == 2) {?>

									<a class="btn btn-danger" href="<?php echo base_url("change-fuel-status/$fuel->fuel_id/1");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

									<?php }?>
									<a class="btn btn-info" href="<?php echo base_url("edit-fuel/$fuel->fuel_id");?>" title = "Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>



									<?php if($fuel->fuel_status != 3) {?>
                                    <a class="btn btn-info" href="<?php echo base_url("change-fuel-status/$fuel->fuel_id/3");?>" onclick="return confirm('All car of this fuel will be deleted!!')" title = "Delete">
										<i class="halflings-icon white trash"></i> 
									</a>

									<?php }?>
								</td>

							
							</tr>

						<?php }?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>