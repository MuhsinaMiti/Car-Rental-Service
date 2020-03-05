
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Invoice</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered ">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Customer Name</th>
								  <th>Customer Phone Number</th>
								  <th>Car Delivery Address</th>
								  <th>Car Name</th>
								  <th>Price Per Day</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php foreach($all_invoice as $invoice){?>

								<tr>

								<td><?php echo $invoice->booking_id ?></td>
								<td class="center"><?php echo $invoice->customer_name ?></td>
								<td class="center"><?php echo $invoice->mobile_number ?></td>
								<td class="center"><?php echo $invoice->car_delivery_address ?></td>
								<td class="center"><?php echo $invoice->car_name ?></td>
								<td class="center"><?php echo $invoice->price_per_day ?></td>

							</tr>

						<?php }?>

						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>