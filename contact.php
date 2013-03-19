
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
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" />
		
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
	<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing.js'></script>
	<script type='text/javascript' src='js/jquery.preloader.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type='text/javascript' src='js/jquery.scroll.min.js'></script>
	<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
	<script type='text/javascript' src='js/jquery.form.js'></script>
	<!-- end scripts -->
	
	<?php
		include 'dependants/slides.html';
	?>

</head>
<!-- end head -->

<!-- start body -->
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
	<!-- end menu wrapper -->
	
	 <!-- start content wrapper -->	
	
	<div class="content page-content">
	
		<div class="page-title">
			<h1>Feedback</h1>
		</div>
		
		<div class="divider clear"></div>
		
		<div class="inner-content">	
		
			<!-- start google map. Add Google Maps to your website - http://maps.google.com/help/maps/getmaps/plot-one.html -->
			<iframe width="550" 
					height="300" 
					frameborder="0" 
					scrolling="no" 
					marginheight="0" 
					marginwidth="0" 
					src="https://maps.google.co.uk/maps?hl=en&amp;q=greenock+scotland&amp;ie=UTF8&amp;hq=&amp;hnear=Greenock,+Inverclyde,+United+Kingdom&amp;gl=uk&amp;t=h&amp;ll=55.956456,-4.772015&amp;spn=0.014415,0.047035&amp;z=14&amp;iwloc=A&amp;output=embed">
			</iframe>

			<br />
			<!-- end google map -->
			
			
			<p>You can use the form below to contact me about WebSite design and App Development ! </p>

											
			<!-- start feedback form -->
			<form method="post" class="contactForm" id="contactForm" action="mail/mail.php">
				<fieldset>
					<div>
						<label>Name*</label>
						<input type="text" value="" id="name" name="name" class="name validate[required,custom[onlyLetterNumber],maxSize[20]]">
					</div>
					
					<div>
						<label>Email*</label>
						<input type="text" value="" id="email" name="email" class="email  validate[required,custom[email]]">
					</div>
					
					<div>					
						<label>Message*</label><textarea id="mess" name="message" class="message validate[requied,length[6,3000]]"></textarea>
					</div>
					
					<p class="sent-result" style="display:none;">Your message sent successfully!</p>
					
					<div class="send-wrap">
						<input type="button" onClick="send('#contactForm')" value="Send Email">
					</div>
				</fieldset>
				
				<script type="text/javascript">
			
					function send(form) {

						var valid = jQuery('#contactForm').validationEngine('validate');
						if(valid == true){
							var options = {
									  url: jQuery('#contactForm').attr('action'),
									  type:'POST',
									  resetForm:true
									};
							jQuery('#contactForm').ajaxSubmit(options);
							jQuery('#contactForm').find('.sent-result').fadeIn()
							jQuery('#contactForm').find('.sent-result').delay(3000).fadeOut();
						}
					}				
			</script>
				
			</form>					
			<!-- end feedback form -->	
	
		</div>
		
		<!-- start sidebar -->
		<?php
			include 'dependants/side_widget.html'
		?>
	<!-- end sidebar -->

	</div>
	
	<!--  end content wrapper  -->
 	
	<?php
		include 'dependants/footer.html';
	?>
	
</body>
</html>