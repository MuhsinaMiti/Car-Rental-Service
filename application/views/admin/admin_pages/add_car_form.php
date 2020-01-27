<?php

$message = $this->session->message;

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
						

							<?php echo form_open_multipart('car/save_car','class=form-horizontal');?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Car Name </label>
							  <div class="controls">
								<input type="text" name="car_name" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='[]'required>
								
							  </div>

							  </div>

							  <div class="control-group">
							  <label class="control-label" for="typeahead">Price Per Day </label>
							  <div class="controls">
								<input type="text" name="price_per_day"  id="typeahead"  data-provide="typeahead" data-items="4" data-source='[]'required>
								
							  </div>

							  </div>
							  

							  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Car Overview</label>
							  <div class="controls">
								<textarea name= "car_overview" class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>


							<div class="control-group">
							<label class="control-label" for="selectError3">Select Brand</label>

				       <div class="controls">
                             <select name="car_brand" id="selectError3">
                             	<option>Select Brand</option>
                             	<?php foreach($brand_info AS $brand){ ?>

                             		<option value="<?php echo $brand->brand_id?>"><?php echo $brand->brand_name; ?></option>

                             	<?php    } ?>

                             	 </select>
                          </div>
                        </div>




                        <div class="control-group">
							<label class="control-label" for="selectError3">Select Fuel</label>

				       <div class="controls">
                             <select name="car_fuel" id="selectError3">
                             	<option>Select Fuel</option>
                             	<?php foreach($fuel_info AS $fuel){ ?>

                             		<option value="<?php echo $fuel->fuel_id?>"><?php echo $fuel->fuel_name; ?></option>

                             	<?php    } ?>

                             	 </select>
                          </div>
                        </div>

                        


                        <div class="control-group">
							  <label class="control-label" for="fileInput">Car Image</label>
							  <div class="controls">
								<input name="car_image" class="input-file uniform_on" id="fileInput" type="file">
						</div>
						</div>


						<div class="control-group">
							  <label class="control-label" for="fileInput">Recent Car</label>
							  <div class="controls">
								<input name="recent_car" type="checkbox">
						</div>
						</div>


                        
                         <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>


							  
							
						  </fieldset>
						<?php echo form_close()?>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
