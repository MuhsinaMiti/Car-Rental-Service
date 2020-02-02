<?php
//echo '<pre>';
//print_r($this->session->all_userdata());
//echo'</pre>';
?>


<ul class="breadcrumb">
				
				<li><a href="<?php echo base_url('admin-dashboard'); ?>">Dashboard</a></li>
			</ul>
            
			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $car; ?><i class=""></i></div>
					<div class="title">Total Car</div>
						
				</div>

				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $customer; ?><i class=""></i></div>
					<div class="title">Total Customer</div>
						
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo $location; ?><i class=""></i></div>
					<div class="title">Total Location</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo $brand; ?><i class=""></i></div>
					<div class="title">Total Brand</div>
				</div>
					

			<div class="row-fluid">	

			<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo $fuel; ?><i class=""></i></div>
					<div class="title">Total Fuel</div>	
				
			</div>
		</div>
	
	
	