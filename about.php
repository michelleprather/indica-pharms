<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Indica Pharms</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<!--STYLESHEETS-->
<link rel="stylesheet" type="text/css" href="css/styles.css">
<!--	BOOTSTRAP 4 CDN (IN BETA?)-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="mp.mansory.js" type="text/javascript"></script>	
<script>
	 $('.nav li a').on('click',function() {
   	 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    	&& location.hostname == this.hostname) {
     		 var $target = $(this.hash);
     		 $target = $target.length && $target
     	 || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
       		 var targetOffset = $target.offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 800);
       return false;
      }
    }
  });

</script>
<!--	RESONSIVE NAV SCROLL     -->
<script type="text/javascript">	
 $(document).ready(function($){

	$(window).scroll(function(){
		$scrol = $(document).scrollTop();
		console.log($scrol);
		if ($scrol > 60) 
		{
			$('.navbar').addClass('shrink');
			$('.navbar-brand>img').addClass('shrink');
			$('.navbar').addClass('navbar-fixed-top');
		}
		else
		{
			$('.navbar').removeClass('shrink');
			$('.navbar-brand>img').removeClass('shrink');
			$('.navbar').removeClass('navbar-fixed-top');


		}
	});

	/********************************************\
				One Nice Scrolling NaveBar 
	\********************************************/

	 $('.nav li a').on('click',function() {
   	 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    	&& location.hostname == this.hostname) {
     		 var $target = $(this.hash);
     		 $target = $target.length && $target
     	 || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
       		 var targetOffset = $target.offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 800);
       return false;
      }
    }
  });
});	
</script>	
</head>

<body>
	<?php
	include "header.php";
	?>
<!--
	<section id="page-title-header">
		<h1>Page Header</h1>
	</section>	
-->
	
	<section id="page-title-header">
		<h1>About Indica Pharms</h1>
	</section>
	
		
	<section id="box1" id="our-story">
		<p class="col-sm-10 col-sm-offset-1 lead" align="center">Indica Pharms is dedicated to curating the highest quality cannabis products in Southern California. We pride ourselves on providing quality care to our patients with a friendly and helpful attitude. </p>		
		<h1 class="col-xs-12">Our Story</h1>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
				<div class="col-sm-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
				</div>
				
				<div class="col-sm-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
				</div>				
			</div>
		</div>

	</section>
	
	<section id="box2">
					<h1 align="center" class="col-xs-12">Why Indica Pharms?</h1>				
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-sm-4">
			<img src="images/cbd-calm-15ml.png" class="img-responsive" style="max-height:400px; margin-left: auto;margin-right: auto;"> 	
			</div>
			
				

			<div class="col-sm-8">
						<ul id="about-list" class="block-content lead col-xs-10 col-xs-offset-2">
							<li>Organic</li>
							<li>Locally sourced and packaged</li>
							<li>Lab tested</li>
							<li>Highest Quality</li>
							<li>Travel ready</li>
						</ul>
						<p class=" col-xs-12" align="center">CBD, or Cannabidiol, has been researched for its anxiety-reducing properties. We've blended CBD with essential oils and CO2 extracts traditionally used, and researched, for these actions. Indica Pharms's formula's are different, and we believe among the best CBD blends on the market today.</p>
			</div>
		</div>
	</section>
<!--
	
	<section id="box3" id="carousel">
		
		
				

	</section>	
-->
	<?php include"ig-masonry.php";?>
<!--
	<section id="featured-in">
		<h1 class="col-xs-12">Featured In</h1>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-sm-2">
				<img src="images/flower1.png" class="img-responsive">
			</div>
			<div class="col-sm-2">
				<img src="images/flower1.png" class="img-responsive">
			</div>
			<div class="col-sm-2">
				<img src="images/flower1.png" class="img-responsive">
			</div>
			<div class="col-sm-2">
				<img src="images/flower1.png" class="img-responsive">
			</div>
			<div class="col-sm-2">
				<img src="images/flower1.png" class="img-responsive">
			</div>			
		</div>
	</section>
-->


    <?php
	include "footer.php";
	?>
	    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>

</body>
</html>