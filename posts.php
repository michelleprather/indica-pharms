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
		<h1>Latest News</h1>
	</section>
	
		
	<section id="box1" class="container">
		 <div class="well visible-xs">
<!--                    <h4 align="center">Blog Search</h4>-->
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
		
		<nav class="breadcrumb">
		  <a class="breadcrumb-item" href="index.php">Home </a> /
		  <span class="breadcrumb-item active">Blog</span>
		</nav>
		
		
		
<!--	<h1>Heading 1</h1>	-->
              <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-sm-8">

<!--             <div class="left-panel">-->
<!--				<div class="col-sm-12">-->
<!--					<div class="panel panel-default">-->
<!--						<div class="panel-body">-->
							<div class="post item col-sm-12">
<!--								<div class="thumbnail">-->
									<a href="post-detail.php"><img src="images/AdobeStock_60977741.jpeg" alt="" class="img-responsive"/></a>
<!--								</div>-->
								<div class="icerik-bilgi">
									<a href="post-detail.php"><h2>San Francisco Brewery Ordered to Stop Production of CBD-Infused Beer</h2></a>
									
									<small>Published <strong>1 day ago</strong> on <strong>May 24, 2018</strong></small>

									<h5>Lifestyle</h5>
									<p>Authorities have ordered a San Francisco brewery to stop producing its line of beers infused with cannabidiol (CBD). Black Hammer Brewing, in the city’s SoMa district, began brewing CBD-infused beer last year. The brewer also includes terpenes commonly found in cannabis in its recipes to add the herb’s distinctive flavors.</p>
									
									<a href="" class="pull-right"><h4>Continue Reading</h4></a>
									
									<div class="btn-group">
										<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
									</div>
									
<!--									<hr />-->
<!--
									<a href="#">
									 <button type="button" class="btn btn-primary">
										<span class="btn btn-google">Read More <i class="fa fa-chevron-right"></i></span>
									 </button>
									 </a>
-->
								</div>
							</div>
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
				
<!--				<hr /> -->
				
				<div class="row">
				
			
<!--
				<div class="col-sm-6">
					<div class="item filter category3" data-order="4">
						<a href="post.php"><img src="images/AdobeStock_194054213.jpeg" class="img-responsive"></a>
						<div class="caption">
							<h4><a href="#">Title</a></h4>
							<h5>Category 3</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut condimentum eget nunc quis semper. </p>

							<a href="" class="pull-right"><h4>Continue Reading</h4></a>              
						 </div>
					</div>
				</div>
-->
					
					<div class="col-sm-6">
					<div class="post item filter recipes" data-order="3">
						<a href="post.php"><img src="images/AdobeStock_132557225.jpeg" class="img-responsive"></a>
						<div class="caption">
							<h4><a href="#">Brownies with CBD Infused Caramel Drizzle</a></h4>
							<small>Published <strong>2 days ago</strong> on <strong>May 23, 2018</strong></small>
							<h5>Recipes</h5>
							<p>These aren't your mother's brownies. A simple yet irresistible combination to take your edible game to the... </p>

							<a href="" class="pull-right"><h4>Continue Reading</h4></a>  
							
							<div class="btn-group">
										<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
									</div>
						 </div>
					</div>
				</div>
										
					
					
					<div class="col-sm-6">
					<div class="post item filter recipes" data-order="2">
						<a href="post.php"><img src="images/AdobeStock_167671414.jpeg" class="img-responsive"></a>
						<div class="caption">
							<h4><a href="#">New Research Shows That Cannabinoids May Treat Sleep Apnea</a></h4>
							<small>Published <strong>2 days ago</strong> on <strong>May 23, 2018</strong></small>
							<h5>Health</h5>
							<p>Sleep apnea masks are clunky and surgery is expensive. But new research shows that cannabinoids may treat sleep apnea.. </p>

							<a href="" class="pull-right"><h4>Continue Reading</h4></a>  
							
							<div class="btn-group">
										<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
									</div>
						 </div>
					</div>
				</div>
					
					<div class="col-sm-6">
					<div class="post item filter category1" data-order="1">
						<a href="post.php"><img src="images/AdobeStock_164923462.jpeg" class="img-responsive"></a>
						<div class="caption">
							<h4><a href="#">Jim Beam Heir Enters Cannabis Industry to end ‘Prohibition 2.0’</a></h4>
							<small>Published <strong>3 days ago</strong> on <strong>May 22, 2018</strong></small>
							<h5>Lifesyle</h5>
							<p>Ben Kovler, heir to the Jim Beam bourbon fortune, has announced that he is entering the legal cannabis industry. </p>

							<a href="" class="pull-right"><h4>Continue Reading</h4></a> 
							
							<div class="btn-group">
										<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
									</div>
						 </div>
					</div>
				</div>
					
					<div class="col-sm-6">
					<div class="post item filter category3" data-order="0">
						<a href="post.php"><img src="images/AdobeStock_145829001.jpeg" class="img-responsive"></a>
						<div class="caption">
							<h4><a href="#">Driving High</a></h4>
							<small>Published <strong>3 days ago</strong> on <strong>May 22, 2018</strong></small>
							<h5>Laws</h5>
							<p>As more and more states legalize cannabis for recreational use, authorities are attempting to establish and enforce standardized stoned-driving laws. </p>

							<a href="" class="pull-right"><h4>Continue Reading</h4></a>  
							
							<div class="btn-group">
										<a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Instagram"><i class="fa fa-instagram"></i></a>
									</div>
						 </div>
					</div>
				</div>

			
  		  	</div>

					<button align="center" id="load-more" type="button" class="btn btn-default btn-lg center-block"  href="#">Load More</button>					
				
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