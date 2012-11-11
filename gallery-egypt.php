
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

<?php
require_once("flickr/phpFlickr.php");
// Create new phpFlickr object
$f = new phpFlickr("a78b27a2f0d0842837b5fe63888d3ede");
 
$i = 0;

$user = "lordrossg";

	// Find the NSID of the username inputted via the form
    $person = $f->people_findByUsername($user);
 
    // Get the friendly URL of the user's photos
    $photos_url = $f->urls_getUserPhotos($person['id']);
 
    // Get the user's first 36 public photos
    $photos = $f->people_getPublicPhotos($person['id'], NULL, NULL, 36);
 
	?>
<body onunload="" >

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
	
	<!-- start main container -->
	
	<div class="container">

		<div class="page-title">
			<h1>My Photos</h1>
		</div>
		
		<div class="divider clear"></div>
		
		<!-- start gallery -->				
				
		<div class="gallery-wrapper">
			<ul id="two-col" class="image-container">	
	<?php
    // Loop through the photos and output the html
    foreach ((array)$photos['photos']['photo'] as $photo) {
	?>
	<li>
					<div class="gallery-thumb">		
						<a href="<?php echo "" .  $f->buildPhotoURL($photo, "Square")  ?>" rel="prettyPhoto[75]" class="prettyPhoto">
							<img alt="Gallery: 2 column" title="<?php echo $photo[title] ?>" src="<?php echo "" .  $f->buildPhotoURL($photo, "Square")  ?>" style="width:384px; height:250x;">
							<span class="over-more" style="right: -100px;">Enlarge image</span>	
						</a>
					</div>
				</li>

	<?php
        $i++;
        // If it reaches the sixth photo, insert a line break
        if ($i % 3 == 0) {
            echo "<br>\n";
        }
    }
?> 

    </ul>
            </div>
		<!-- end gallery -->
		 		
	</div>
	
	<!-- end main container -->
 	
	<?php
		include 'dependants/footer.html';
	?>
	
</body>
</html>