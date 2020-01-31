
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Dashboard</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url()?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url()?>assets/admin_assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url()?>assets/admin_assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url()?>assets/admin_assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url()?>assets/admin_assets/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/admin_assets/img/favicon.png">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				
				<a class="brand" href=""><span>Dashboard</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
							<li><a href="<?php echo base_url('admin-logout')?>"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url('admin-dashboard')?>"></i><span class="hidden-tablet">Admin Dashboard</span></a></li>	
						<li><a href="<?php echo base_url('register-admin')?>"><i class=""></i><span class="hidden-tablet"> Rgister Admin</span></a></li>

						<li><a href="<?php echo base_url('add-brand')?>"><i class=""></i><span class="hidden-tablet"> Add Brand</span></a></li>
						<li><a href="<?php echo base_url('all-brand')?>"><i class=""></i><span class="hidden-tablet"> Manage Brand</span></a></li>

						<li><a href="<?php echo base_url('add-fuel')?>"><i class=""></i><span class="hidden-tablet"> Add Fuel</span></a></li>
						<li><a href="<?php echo base_url('all-fuel')?>"><i class=""></i><span class="hidden-tablet"> Manage Fuel</span></a></li>

						<li><a href="<?php echo base_url('add-location')?>"><i class=""></i><span class="hidden-tablet"> Add Location</span></a></li>
						<li><a href="<?php echo base_url('all-location')?>"><i class=""></i><span class="hidden-tablet"> Manage Location</span></a></li>
						
                        <li><a href="<?php echo base_url('add-car')?>"><i class=""></i><span class="hidden-tablet"> Add Car</span></a></li>
						<li><a href="<?php echo base_url('manage-car')?>"><i class=""></i><span class="hidden-tablet"> Manage Car</span></a></li>


						
						
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">

			    <?php echo $admin_maincontent; ?>
			</div>
</div>
</div>

		
			




	<footer>

		<p>
			<span style="text-align:right;float:right">&copy; 2020 <a href="" alt="Dashboard">Dashboard</a></span>
			
		</p>

	</footer>


	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url()?>assets/admin_assets/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url()?>assets/admin_assets/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url()?>assets/admin_assets/js/excanvas.js"></script>
	<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.js"></script>
	<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/counter.js"></script>
	
		<script src="<?php echo base_url()?>assets/admin_assets/js/retina.js"></script>

		<script src="<?php echo base_url()?>assets/admin_assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
