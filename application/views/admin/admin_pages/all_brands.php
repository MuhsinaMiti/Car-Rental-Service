<?php

//echo '<pre>';
//print_r ($all_brand);

?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Brands</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Brand Id</th>
								  <th>Brand Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php foreach($all_brand as $brand){?>

								<tr>
								<td><?php echo $brand->brand_id ?></td>
								<td class="center"><?php echo $brand->brand_name ?></td>

								<td> 
									<?php
                                     if ($brand->brand_status == 1){

                                     	echo 'Active';
                                     }elseif($brand->brand_status == 2){

                                     	echo'Inactive';
                                     }elseif($brand->brand_status == 3){

                                     	echo 'Deleted';

                                     	
                                     }
                                    ?>
										
									</td>
								
									<td class="center">
										<?php if($brand->brand_status == 1 || $brand->brand_status == 3){?>
									<a class="btn btn-info" href="<?php echo base_url("change-brand-status/$brand->brand_id/2");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>

									<?php }elseif ($brand->brand_status == 2) {?>

									<a class="btn btn-danger" href="<?php echo base_url("change-brand-status/$brand->brand_id/1");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

									<?php }?>
									<a class="btn btn-info" href="<?php echo base_url("edit-brand/$brand->brand_id");?>" title = "Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>



									<?php if($brand->brand_status != 3) {?>
                                    <a class="btn btn-info" href="<?php echo base_url("change-brand-status/$brand->brand_id/3");?>" title = "Delete">
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