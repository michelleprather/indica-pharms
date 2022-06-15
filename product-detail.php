<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Indica Pharms</title>
	<!--STYLESHEETS-->
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
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
//});
	
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
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
		<h1>CBD Calm</h1>
	</section>
	
		
	<section  class="container" id="box1">
	<nav class="breadcrumb col-xs-12">
		  <a class="breadcrumb-item" href="index.php">Home </a> /
		  <a class="breadcrumb-item" href="products.php">Products </a> /	
		  <a class="breadcrumb-item" href="#">CBD Oils </a> /		
		  <span class="breadcrumb-item active">CBD Calm</span>
		</nav>			
<!--			<section id="box1" id="featured-products">-->
<!--		<h1 class="col-xs-12">4 Flavor Experiences</h1>	-->
		
<!--		<hr />-->
		<p class="lead col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2" align="center">CBD, or Cannabidiol, has been researched for its anxiety-reducing properties. We've blended CBD with essential oils and CO2 extracts traditionally used, and researched, for these actions. Indica Pharms's formula's are different, and we believe among the best CBD blends on the market today.</p>
<!--		<hr />-->
<!--		<div>-->
<!--		  <div class='row'>-->
					 
					  <section class="row" id="product-description">
							<div class="col-sm-10 col-sm-offset-1" id="product-description">
								<div class="row">
									<div class="col-sm-4">
									<img alt="" src="images/cbd-calm-15ml.png" class="img-responsive" style="max-height:400px; margin-left: auto;margin-right: auto;">
									</div>
									<div class="col-sm-8">
										<h3>CBD Calm</h3>								
<!--										<h4>Indica </h4>-->
										<h5>5mL | 15mL | 30mL | 100mL</h5>
	
										<hr />

										<p>Cannabidiol CO2 extract from industrial hemp plant based in MCT Coconut oil and hemp essential oil. This hemp essential oil with CBD provides the full therapeutic action of the hemp plant without any psychoactive THC present. We also add Rosemary antioxidant to preserve freshness.</p>

										<p>Our 'Calm' formula has Lavender to create a calming synergistic effect with the CBD, we add Grapefruit essential oil to help the binding process as well. The calming nature of Lavender works great with CBD because they both bind to the endocannabinoid system.</p>
										
										<hr />
										
										<h4>Dosage</h4>	
										<p>We formulated all sizes of our CBD to be 1mg of CBD every 2 Drops (dropper included). We recommend starting with 5-10 mg (10-20 drops) to start, and ramping up from there to get the desired result..</p>

									</div>
								</div>
									 <a class="btn btn-default btn-lg btn-send center-block no-bottom-margin" id="find-us" href="find.php">Find A Dispensary Near You</a>
								</div>
						  
<!--							</div>  -->
			    
					 	</section>
											
					  

						</div>					  
					 
					  	  
					  </div>
					 
<!--
				  </div>
			  </div>                          
			</div>
-->
		  </div>
<!--		</div>		-->
<!--	</section>-->
<!--		<h1 class="col-xs-12">Heading 1</h1>	-->
		

		<?php include "ig-masonry.php" ?>
		
			

			
	<section id="box4" id="featured-products no-top-padding">
<!--		 <hr />-->
		<h1 class="col-xs-12 no-top-margin">You May Also Like...</h1>	
		  <div class='row'>
			<div class='col-md-8 col-md-offset-2'>
				<?php include"top-rated.php";?>
			</div>
			  

		  </div>
</section>
	</div>
	

					  <div class="row">
							<div class="col-sm-8 col-sm-offset-2" id="product-warning">
								<small>Our products have intoxicating effects and may be habit forming. Marijuana can impair concentration, coordination, and judgment. Do not operate a vehicle or machinery under the influence of this drug. There may be health risks associated with consumption of cannabis infused products. For use only by adults twenty-one and older. Keep out of the reach of children.</small>
							</div>  
					 	</div>
	</section>
		
<!--	</section>-->
	
<!--
	<section id="box2">
		<h1>Heading 2</h1>
	</section>
	
	<section id="box3">
		<h1>Heading 3</h1>
	</section>	
	
	<section id="box4">
		<h1>Heading 4</h1>
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