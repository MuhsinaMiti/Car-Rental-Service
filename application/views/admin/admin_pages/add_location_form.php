<div style="color: green;">
	<?php

	//if(isset($success_message)){


	//	echo $success_message;
	//}


	?>

</div>




<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						
					</div>
					<div class="box-content">
						

							<?php echo form_open('car/save_location','class=form-horizontal');?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Location Name </label>
							  <div class="controls">
								<input type="text" name="location_name" value="" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'required>
								
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
