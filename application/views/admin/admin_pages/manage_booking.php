
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Booking</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered ">
						  <thead>
							  <tr>
								  
								  <th>Customer Name</th>
								  <th>Customer Phone Number</th>
								  <th>Car Delivery Address</th>
								  <th>Car Name</th>
								  <th>Price Per Day</th>
								  <th>Order Date & Time</th>
								  <th>From</th>
								  <th>Days of Booking</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php foreach($all_booking as $booking){?>

								<tr>

								
                               
                                <td class="center"><?php echo $booking->customer_name ?></td>
								<td class="center"><?php echo $booking->mobile_number ?></td>
								<td class="center"><?php echo $booking->car_delivery_address ?></td>
								<td class="center"><?php echo $booking->car_name ?></td>
								<td class="center"><?php echo $booking->price_per_day ?></td>
								<td class="center"><?php echo $booking->order_date_time ?></td>
								<td class="center"><?php echo $booking->date?></td>
								<td class="center"><?php echo $booking->days?></td>
								<td class="center"><?php echo $booking->order_date_time ?></td>
								


								<td> 
									<?php
                                     if ($booking->booking_status == 1){

                                     	echo 'Approved';
                                     }else{

                                     	echo'Rejected';
                                     }
                                    ?>
										
									</td>

									<td class="center">
										<?php if($booking->booking_status == 1){?>
									<a class="btn btn-info" href="<?php echo base_url("change-booking-status/$booking->car_id/2");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>

									<?php }else  {?>

									<a class="btn btn-danger" href="<?php echo base_url("change-booking-status/$booking->car_id/1");?>" title = "Update Status">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>

									<?php }?>

							</tr>

						<?php }?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>