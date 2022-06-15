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
});
	
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
		<h1>Weedmaps Menu</h1>
	</section>
	
		
	<section id="box1" >
<!--		<div class="container">-->
		<div class="col-sm-10 col-sm-offset-1">
		
				<script type="text/javascript">var wmenu_id = 40793;</script>
				<script type="text/javascript" src="http://legalmarijuanadispensary.com/components/com_weedmenu/weedmenu-widget.js"></script>		
			</div>		
<!--		</div>-->
	</section>
	
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