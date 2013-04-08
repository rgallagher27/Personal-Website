<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ross Gallagher</title>
  <meta charset="utf-8">
  <link href='images/favicon.ico' rel='shortcut icon'>
  <link href="jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
  <link href="jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script type="text/javascript" src="jackbox/js/libs/jquery.address-1.5.min.js"></script>
  <script type="text/javascript" src="jackbox/js/libs/Jacked.js"></script>
  <script type="text/javascript" src="jackbox/js/jackbox-swipe.js"></script>
  <script type="text/javascript" src="jackbox/js/jackbox.js"></script>
  <script type="text/javascript" src="jackbox/js/libs/StackBlur.js"></script>
  <script src="js/scripts.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
  <![endif]-->
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
	<![endif]-->
</head>
<body onload="initialize()">
<div id="main_bg">
  <div class="glow">

  </div>
  <div class="spinner">
      <span></span>
  </div>  
  <div class="main_container">
      <div class="container_12">
          <!-- Header -->
          <?php include_once('views/header.php'); ?>

          <!-- Splash Holder -->
          <?php include_once('views/splash.php'); ?>
              
          <!-- Content Holder -->
          <?php include_once('views/content.php'); ?>

          <!-- Footer Holder -->
          <?php include_once('views/footer.php'); ?>

      </div>
  </div>
</div>
<script src="js/main.js"></script>
</body>
</html>