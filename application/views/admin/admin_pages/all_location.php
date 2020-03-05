<?php

//echo '<pre>';
//print_r ($all_location);

?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>locations</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>location Id</th>
								  <th>location Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php foreach($all_location as $location){?>

								<tr>
								<td><?php echo $location->location_id ?></td>
								<td class="center"><?php echo $location->location_name ?></td>

								<td> 
									<?php
                                     if ($location->location_status == 1){

                                     	echo 'Active';
                                     }elseif($location->location_status == 2){

                                     	echo'Inactive';
                                     }elseif($location->location_status == 3){

                                     	echo 'Deleted';

                                     	
                                     }
                                    ?>
										
									</td>
								
									<td class="center">
										<?php if($location->location_status == 1 || $location->location_status == 3){?>
									<a class="btn btn-info" href="<?php echo base_url("change-location-status/$location->location_id/2");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>

									<?php }elseif ($location->location_status == 2) {?>

									<a class="btn btn-danger" href="<?php echo base_url("change-location-status/$location->location_id/1");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

									<?php }?>
									<a class="btn btn-info" href="<?php echo base_url("edit-location/$location->location_id");?>" title = "Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>



									<?php if($location->location_status != 3) {?>
                                    <a class="btn btn-info" href="<?php echo base_url("change-location-status/$location->location_id/3");?>" onclick="return confirm('All car of this location will be deleted!!')" title = "Delete">
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


			<div class="map_wrap">

			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1QOwyxTBnA10cYfTyXjMatPQV9Z6wKMGP" width="640" height="480"></iframe>
           </div>