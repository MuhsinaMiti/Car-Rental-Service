<?php

$message = $this->session->userdata('message');

if(isset($message)){

	echo $message;
	$this->session->unset_userdata('message');
}

?>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						

						<?php echo form_open_multipart('car/update_car','class="form-horizontal" name="edit_car"');?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Name </label>
							  <div class="controls">
								<input type="text" name="car_name" value="<?php echo $car_info->car_name?>" class="span6 typeahead" id="typeahead"  required>

								<input type="hidden" name="car_id" value="<?php echo $car_info->car_id?>" class="span6 typeahead" id="typeahead"  required>
								
							  </div>

							  </div>

							  <div class="control-group">
							  <label class="control-label" for="typeahead">Price Per Day </label>
							  <div class="controls">
								<input type="text" name="price_per_day" value="<?php echo $car_info->price_per_day?>" id="typeahead"  data-provide="typeahead" data-items="4" data-source='[]'required>
								
							  </div>

							  </div>
							  

							  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Car Overview</label>
							  <div class="controls">
								<textarea name= "car_overview"  value="" class="cleditor" id="textarea2" rows="3"><?php echo $car_info->car_overview?></textarea>
							  </div>
							</div>


							<div class="control-group">
							<label class="control-label" for="selectError3">Select Brand</label>

				       <div class="controls">
                             <select name="car_brand" id="selectError3" value="<?php echo $car_info->brand_id?>">
                             	<option>Select Brand</option>
                             	<?php foreach($brand_info as $brand){ ?>

                             		<option value="<?php echo $brand->brand_id?>"><?php echo $brand->brand_name; ?></option>

                             	<?php    } ?>

                             	 </select>
                          </div>
                        </div>




                        <div class="control-group">
							<label class="control-label" for="selectError3">Select Fuel</label>

				       <div class="controls">
                             <select name="car_fuel" id="selectError3" value="<?php echo $car_info->fuel_id?>">
                             	<option>Select Fuel</option>
                             	<?php foreach($fuel_info AS $fuel){ ?>

                             		<option value="<?php echo $fuel->fuel_id?>"><?php echo $fuel->fuel_name; ?></option>

                             	<?php    } ?>

                             	 </select>
                          </div>
                        </div>

                         <div class="control-group">
							<label class="control-label" for="selectError3">Select Location</label>

				       <div class="controls">
                             <select name="car_location" id="selectError3" value="<?php echo $car_info->location_id?>">
                             	<option>Select Location</option>
                             	<?php foreach($location_info AS $location){ ?>

                             		<option value="<?php echo $location->location_id?>"><?php echo $location->location_name; ?></option>

                             	<?php    } ?>

                             	 </select>
                          </div>
                        </div>

                        


                        <div class="control-group">
							  <label class="control-label" for="fileInput">Car Image</label>
							  <div class="controls">
								<input name="car_image" class="input-file uniform_on" id="fileInput" type="file">
								
								<input name="car_old_image" class="input-file uniform_on" id="fileInput" value="<?php echo $car_info->car_image?>" type="hidden">
								<img src="<?php echo base_url(). $car_info->car_image?>" width ="50" height = "50">
						</div>
						</div>


						<div class="control-group">
							  <label class="control-label" for="fileInput">Recent Car</label>
							  <div class="controls">

							  	 <?php

							  	 if($car_info->recent_car==1)
							  	 {


							  	?>
								<input name="recent_car" type="checkbox" checked>

								<?php

							} else{
                                  

								?>

								<input name="recent_car" type="checkbox" >


							<?php

							}?>


						</div>
						</div>


                        
                         <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Car</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>


							  
							
						  </fieldset>
						<?php echo form_close()?>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    <script>
      	document.forms['edit_car'].elements['car_brand'].value=<?php echo $car_info->car_brand ?>;

      	document.forms['edit_car'].elements['car_fuel'].value=<?php echo $car_info->car_fuel ?>

      	document.forms['edit_car'].elements['car_location'].value=<?php echo $car_info->car_location ?>
    </script>   

	