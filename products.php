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
	
<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
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
		<h1>Products</h1>
	</section>
	
	
		
	<section id="box1" class="container">
		<nav class="breadcrumb">
		  <a class="breadcrumb-item" href="#">Home </a> /
		  <span class="breadcrumb-item active">Products</span>
		</nav>		
<!--		<h1 class="col-xs-12">All Products</h1>	-->
		    <!-- Page Content -->

        <div class="row">

            <div class="col-sm-4">
<!--                <p class="lead">All Products</p>-->
                <div class="list-group">
                    <a href="#" class="list-group-item">CBD Oils</a>
                    <a href="#" class="list-group-item">CDB Infused Edibles</a>
<!--                    <a href="#" class="list-group-item">Flower </a>-->
                    <a href="#" class="list-group-item">Concentrate </a>
<!--                    <a href="#" class="list-group-item">Edibles </a>-->
                    <a href="#" class="list-group-item">Vape Kits </a>
                    <a href="#" class="list-group-item">Other </a>
					
                </div>	
				
				  <!-- Products  -->
                <div class="well">
                    <?php include "top-rated-single.php" ?>
            </div>
			</div>

            <div class="col-sm-8">

<!--
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
-->
<div class="container-fluid">
		<div class="" id="my-gallery-container">
<!--			<h3>INDICA | SATIVA | HYBRID </h3>-->
			
			<div>
				<button class="btn btn-default btn-md filter-button" data-filter="all">All</button>
				<button class="btn btn-default btn-md filter-button" data-filter="indica">Indica</button>
				<button class="btn btn-default btn-md filter-button" data-filter="sativa">Sativa</button>
				<button class="btn btn-default btn-md filter-button" data-filter="hybrid">Hybrid</button>
			</div>
			<br/>			
			
			<a href="product-detail.php">
				<div class="item filter hybrid" data-order="0">
				<img src="images/AdobeStock_194054213.jpeg" class="img-responsive">
				<div class="caption">
                	<h4><a href="#">CDB Fudge</a></h4>
                  	<p>10mg THC</p>              
<!--                    <p>Hybrid</p>-->
			
<!--
                
                <div class="ratings row">
                     <p class="pull-right">15 reviews</p>
                     <p class="pull-right">
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
                     </p>
					</div>
-->
                 </div>
				</div>
			</a>
			
			<a href="product-detail.php">			
			<div class="item filter indica" data-order="1">
				<img src="images/cbd-calm-3.jpg" class="img-responsive">
				<div class="caption">
                	<h4><a href="#">CBD Calm</a></h4>
                  	<p>5mL | 15mL | 30mL | 100mL</p>              
<!--                    <p>Hybrid</p>-->
              
<!--
                <div class="ratings row">
                     <p class="pull-right">15 reviews</p>
                     <p class="pull-right">
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
                     </p>
					  </div>
-->
                 </div>				
			</div>
				
			</a>
			<div class="item filter sativa" data-order="2">
				<img src="images/AdobeStock_136105904.jpeg" class="img-responsive">
			<div class="caption">
                	<h4><a href="#">CBD Capsules</a></h4>
                  	<p>10mg THC</p>              
<!--                    <p>Hybrid</p>-->
<!--
                <div class="ratings row">
                     <p class="pull-right">15 reviews</p>
                     <p class="pull-right">
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
                     </p>
                </div>					
-->
                 </div>								
			</div>
			<div class="item filter indica" data-order="3">
				<img src="images/AdobeStock_132557225.jpeg" class="img-responsive">
				<div class="caption">
                	<h4><a href="#">"Pot" Brownies</a></h4>
                  	<p>10mg THC/ serving</p>              
<!--                    <p>Hybrid</p>-->
<!--
                <div class="ratings row">
                     <p class="pull-right">15 reviews</p>
                     <p class="pull-right">
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
                     </p>
                </div>					
-->
                 </div>		
			</div>
			<div class="item filter indica" data-order="4">
				<img src="images/AdobeStock_176572255.jpeg" class="img-responsive">
				<div class="caption">
                	<h4><a href="#">Vape Kit</a></h4>
   
<!--
                <div class="ratings row">
                     <p class="pull-right">15 reviews</p>
                     <p class="pull-right">
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
                     </p>
                 </div>	
-->
                </div>					
			</div>
		

		</div>


	</div>
	<script type="text/javascript">
		jQuery(document).ready(function ( $ ) {
			$("#my-gallery-container").mpmansory(
				{
					childrenClass: 'item', // default is a div
					columnClasses: 'padding', //add classes to items
					breakpoints:{
						lg: 4, 
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

            </div>

        </div>


	
	</section>
	
<!--
	<section id="box2">
		<h1>Heading 2</h1>
	</section>
	
	<section id="box3">
		<h1>Heading 3</h1>
	</section>	
-->
	
<!--
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