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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
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
		<h1>Latest News</h1>
	</section>
	
		
	<section id="box1" class="container">
	<nav class="breadcrumb col-xs-12">
		  <a class="breadcrumb-item" href="index.php">Home </a> /
		  <a class="breadcrumb-item" href="posts.php">Blog </a> /	
		  <a class="breadcrumb-item" href="#">Lifestyle </a> /		
		  <span class="breadcrumb-item active hidden-xs">San Francisco Brewery Ordered to Stop Production of CBD-Infused Beer
</span>
		</nav>			
<!--	<h1>Heading 1</h1>	-->
              <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-sm-8" id="blog-content">

                <!-- Blog Post -->

                <!-- Title -->
			
                <h2>San Francisco Brewery Ordered to Stop Production of CBD-Infused Beer</h2>

		
				
<!--				<h4>Lifestyle</h4>-->
				
				<p class="lead no-bottom-margin">Black Hammer Brewing will cease sales of Toke Back Mountain IPA and other infused brews.</p>
				
				
                <!-- Author -->
<!--
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>
-->

                <hr>

                <!-- Date/Time -->
<!--                <p><span class="glyphicon glyphicon-time"></span> August 24, 2018</p>-->
				<p><small>Published <strong>1 day ago</strong> on <strong>May 24, 2018.</strong></small><br/>By <strong>A.J.  Herrington </strong></p>
                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/AdobeStock_60977741.jpeg" alt="">

                <hr>

<!--				SOCIAL SHARE BUTTONS 			-->
				
				<div class="well social-buttons">
					<!--Facebook-->
					<a type="button" class="btn-floating btn-lg btn-fb"><i class="fa fa-facebook"></i></a>
					<!--Twitter-->
					<a type="button" class="btn-floating btn-lg btn-tw"><i class="fa fa-twitter"></i></a>
					<!--Google +-->
					<a type="button" class="btn-floating btn-lg btn-gplus"><i class="fa fa-google-plus"></i></a>
					<!--Linkedin-->
					<a type="button" class="btn-floating btn-lg btn-li"><i class="fa fa-linkedin"></i></a>
					<!--Instagram-->
<!--					<a type="button" class="btn-floating btn-lg btn-ins"><i class="fa fa-instagram"></i></a>-->
					<!--Pinterest-->
					<a type="button" class="btn-floating btn-lg btn-pin"><i class="fa fa-pinterest"></i></a>
					<!--Youtube-->
<!--					<a type="button" class="btn-floating btn-lg btn-yt"><i class="fa fa-youtube"></i></a>-->
					<!--Dribbble-->
<!--					<a type="button" class="btn-floating btn-lg btn-dribbble"><i class="fa fa-dribbble"></i></a>-->
					<!--Vkontakte-->
<!--					<a type="button" class="btn-floating btn-lg btn-vk"><i class="fa fa-vk"></i></a>-->
					<!--Stack Overflow-->
<!--					<a type="button" class="btn-floating btn-lg btn-so"><i class="fa fa-stack-overflow"></i></a>-->
					<!--Slack-->
<!--					<a type="button" class="btn-floating btn-lg btn-slack"><i class="fa fa-slack"></i></a>-->
					<!--Github-->
<!--					<a type="button" class="btn-floating btn-lg btn-git"><i class="fa fa-github"></i></a>-->
					<!--Comments-->
<!--					<a type="button" class="btn-floating btn-lg btn-comm"><i class="fa fa-comments"></i></a>-->
					<!--Email-->
					<a type="button" class="btn-floating btn-lg btn-email"><i class="fa fa-envelope"></i></a>
				</div>
				
				
                <!-- Post Content -->
                
				<p>Authorities have ordered a San Francisco brewery to stop producing its line of beers infused with cannabidiol (CBD). Black Hammer Brewing, in the city’s SoMa district, began brewing CBD-infused beer last year. The brewer also includes terpenes commonly found in cannabis in its recipes to add the herb’s distinctive flavors.</p>


                <p>So far, Black Hammer has released eight CBD beers. But it’s remaining brews in the series will have to be the last.</p>
				
				<div class="row">
					<blockquote class="blockquote col-xs-11 col-xs-offset-1">
					<p>"They’ve been extremely well received."</p>
					<small>Jim Furman owner, <cite>Black Hammer</cite></small>
					</blockquote>
				</div>
				
                <p>Recently the federal Alcohol and Tobacco Tax and Trade Bureau ordered Black Hammer to cease production. But interestingly, it’s not because of the status of cannabis under the Controlled Substances Act. Instead, it’s because of the bureau’s regulations requiring any non-standard beer ingredients to gain prior approval.</p>
				
                <p>The bureau maintains a list of ingredients that it allows in the production of beers. Breweries that wish to brew with other ingredients must first gain approval from the bureau. CBD, terpenes, and hemp are all not yet on that list.</p>
				
                <p>Jim Furman, the owner of Black Hammer, told local media that he had been “approaching it more from a CBD legality standpoint than a formula approval standpoint.”</p>
				<p>Black Hammer released its first CBD beer, Toke Back Mountain IPA, last year on April 20. The first brew’s success led to seven more offerings from Black Hammer.</p>
				
				
				<p>“They’ve been extremely well received,” Furman said. “Our line of CBD beers has been our most popular line.”</p>
				
				<p>Furman noted that his favorite of the bunch is the Hippie Hill imperial IPA, an ale infused with CBD and Tahoe OG terpenes.</p>
				
				<hr>
				
				<img class="img-responsive" src="images/AdobeStock_161652258.jpeg"  alt="">
				
				<hr>
				
				<p>“It’s unmistakable. So fresh,” he said. “It’s got the most dialed-in cannabis flavor profile.”</p>
				
				<p>Furman said that in order to start brewing his CBD beers again, lawmakers will probably have to change the federal status of hemp.</p>
				
				<p>“We believe that future approval of our formula may be dependent on hemp reclassification by the federal government/DEA,” he wrote in an email to the San Francisco Chronicle.</p>
				
				<p>He also noted that Congress had missed an opportunity to do just that when it failed to pass a farm bill that included provisions of Senate Majority Leader Mitch McConnell’s Hemp Farming Act of 2018.</p>
				
				<p>Luckily, Black Hammer is allowed to sell the rest of the CBD beer it has already brewed. Starting at 4:20 on May 24, the brewery will tap the last of its Toke Back to the Future. The American pale ale has 5 milligrams of CBD per serving. It will be available until the keg runs dry.</p>
				
				<div class="row">
					<blockquote class="blockquote col-xs-11 col-xs-offset-1">
					<p>"Starting at 4:20 on May 24, the brewery will tap the last of its Toke Back to the Future."</p>
					<small>Jim Furman owner, <cite>Black Hammer</cite></small>
					</blockquote>
				</div>
				
				<p>Each subsequent Thursday at 4:20, the brewery will release another keg. Furman said the event should last about nine weeks before the entire supply of CBD beers is exhausted. He also said that he plans to announce each week’s offering via Instagram, so customers can keep track of what’s currently on tap.</p>
				
				<p>Furman said that Black Hammer and its loyal patrons are sorry to the see the impending end of his brews infused with cannabis.</p>
				
				<p>“Our guests love the CBD beers, and we’re pretty sad that we have to stop producing them,” he said.</p>
<!--                <hr>-->

                <!-- Blog Comments -->

                <!-- Comments Form -->
<!--
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>
-->

                <!-- Posted Comments -->

                <!-- Author info -->
                <div class="well">
                    <div class="profile-circle pull-left hidden-xs" align="center"><img src="images/testimonial-temp.jpg"></div>
                    <div class="media-body">
                        <h4 class="media-heading">A.J. Herrinton
							<br>
						<div class="btn-group">
							<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
							<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
						</div>	
<!--                            <small>August 25, 2014 at 9:30 PM</small>-->
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						
                    </div>
                </div>

                <!-- Comment -->
<!--
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
-->
                        <!-- Nested Comment -->
<!--
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
-->
                        <!-- End Nested Comment -->
<!--                    </div>-->
<!--                </div>-->
<nav>
					<ul class="pager">
					<li><a href="#" class="btn btn-default btn-md pull-left">Previous</a></li>
					<li class="pull-right"><a href="#" class="btn btn-default btn-md pull-left">Next</a></li>
					</ul>
				</nav>
            </div>

            <!-- Blog Sidebar Widgets Column -->
			<?php
			include "sidebar.php";
			?>

        </div>
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

<script type="text/javascript">
		jQuery(document).ready(function ( $ ) {
			$("#my-gallery-container").mpmansory(
				{
					childrenClass: 'item', // default is a div
					columnClasses: 'padding', //add classes to items
					breakpoints:{
						lg: 6, 
						md: 6, 
						sm: 6,
						xs: 6
					},
					distributeBy: { order: false, height: false, attr: 'data-order', attrOrder: 'asc' }, //default distribute by order, options => order: true/false, height: true/false, attr => 'data-order', attrOrder=> 'asc'/'desc'
					onload: function (items) {
						//make somthing with items
					} 
				}
			);
		});
	</script>
	
    <?php
	include "footer.php";
	?>
	    <script src="vendor/jquery/jquery.min.js"></script>
   		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
	    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>

</body>
</html>