
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- start head -->
<head>

	<!-- start title -->
	<title>Ross Gallagher</title>
	
	<!-- start meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
	<!-- styles -->
 	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/isotope.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/dark-style.css" type="text/css" media="screen" />
		
	<!--[if lte IE 9]>
	<link rel='stylesheet' href='css/ie9.css' type='text/css' media='all' />
	<![endif]-->
	
	<!-- end styles -->
	
	<!-- start scripts -->
	<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	<script type='text/javascript' src='js/jquery.custom.js'></script>
	<script type='text/javascript' src='js/jquery.supersized.js'></script>
	<script type='text/javascript' src='js/jquery.supersized.shutter.min.js'></script>
	<script type='text/javascript' src='js/jquery-ui-1.8.18.custom.min.js'></script>
	<script type='text/javascript' src='js/jquery.tipsy.js'></script>
	<script type='text/javascript' src='js/jquery.form.js'></script>
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing.js'></script>
	<script type='text/javascript' src='js/jquery.preloader.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type='text/javascript' src='js/jquery.scroll.min.js'></script>
	<!-- end scripts -->
	
	<?php
		include 'dependants/slides.html';
	?>

</head>
<!-- end head -->

<!-- start body -->
<body class="page-template-template-homepage-php" onUnload="" >

	<!-- start dotted pattern -->
		<div class="bg-overlay"></div>
	<!-- end dotted pattern -->
		
	<!--start menu wrapper -->
	<div class="menu-wrapper clearfix">
		<!-- start logo -->
		<?php
				include 'dependants/logo.html';
			?>
		<!-- end logo -->
		
		<!-- start navigation -->
		<div class="main-nav">
			<?php
				include 'dependants/menu.html';
			?>		
		</div>
		<!-- end navigation -->
		
	</div>
	<!--end menu wrapper -->

 	
	<?php
		include 'dependants/footer.html';
	?>
	
</body>
</html>