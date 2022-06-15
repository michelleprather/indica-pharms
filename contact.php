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
		<h1>Drop Us A Line</h1>
	</section>
	
		
	<section id="box1">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
			
<!--			<div class="col-md-8 col-md-offset-2">-->
<!--						<h1 align="center" class="col-xs-12">Drop Us A Line</h1>-->
						<p class="lead" align="center">Say hello, give a review or offer up some feedback. We would love to hear from you.</p>
						<form id="contact-form" method="post" action="contact-send2.php" role="form">

							<div class="messages"></div>

							<div class="controls">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="form_name">First Name *</label>
											<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="form_lastname">Last Name *</label>
											<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="form_email">Email *</label>
											<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="form_phone">Phone</label>
											<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_message">Message *</label>
											<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<p class="text-muted"><strong>* These fields are required</strong></p>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<div class="g-recaptcha" data-sitekey="6Ld1yj4UAAAAAJ5TV34z6La0jPdg04-35lwo0Gva"></div>
										</div>
									</div>

									<div class="col-md-12">
										<input type="submit" class="btn btn-default btn-lg btn-send" value="Send message">
									</div>
								</div>
								
							</div>

						</form>
<!-- 					<hr> -->
					</div><!-- /.8 -->		
		
	</section>
	
			

		 <?php include"ig-masonry.php";?>

<!--
	<section id="box2" id="subscribe-to-newsletter">
		<div class="container">
			<div class="row">
			

				<h1 class="col-xs-12">Subscribe</h1>
				<p class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">Enter your email address to get the most up to date information on events and news from Indica Pharms.</p>

			   <div class="input-group col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				  <input type="text" class="form-control input-lg" placeholder="yourname@gmail.com">
				  <span class="input-group-btn">
					<button class="btn btn-default btn-lg" type="button">Subscribe</button>
				  </span>
				</div> /input-group 
			</div>
		</div>
	</section>
-->
	
<!--
	<section id="box3">
		<h1>Heading 3</h1>
	</section>	
-->


    <?php include "footer.php";?>
	    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>

</body>
</html>