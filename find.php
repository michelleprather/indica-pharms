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
//  });
});

//$(document).ready(function() {
//  $('#media').carousel({
//    pause: true,
//    interval: false,
//  });
//});	
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
	
		<style>
      #map {
        height: 800px;
        width: 100%;
       }
	   </style>
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
		<h1>Find Products</h1>
	</section>
	
		
	<section id="box1">
<!--		<h1 class="col-xs-12">Available at:</h1>-->
		<p class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 lead" align="center">Our product are currently not available for online purchase. Indica Pharms products are available for purchase at the following retailers.</p>
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Connected</h4>
					<p>5227 E 2nd St.</p>
					<p>Long Beach, CA 90803</p>
					<a href="tel:">(562)248-2474</a>
			</div>
			
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Long Beach Green Room</h4>
					<p>1735 E 7th St.</p>
					<p>Long Beach, CA 90813</p>
					<a href="tel:">(562)218-0021</a>
			</div>
			
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>ShowGrow Long Beach</h4>
					<p>3411 E Anaheim St.</p>
					<p>Long Beach, CA 90804</p>
					<a href="tel:">(562)494-8437</a>
			</div>
			
<!--		</div>-->
			
<!--		<div class="col-xs-6 col-sm-3 col-sm-offset-1">-->
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Care Alternative Meds</h4>
					<p>3009 E South St.</p>
					<p>Long Beach, CA 90805</p>
					<a href="tel:">(562)633-5874</a>
			</div>
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Nature's Healings</h4>
					<p>834 E 4th St.</p>
					<p>Long Beach, CA 90802</p>
					<a href="tel:">(562)437-6590</a>
			</div>
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>NatureCann LBC</h4>
					<p>4332 Atlantic Ave.</p>
					<p>Long Beach, CA 90807</p>
					<a href="tel:">(323)515-4500</a>
			</div>			
<!--		</div>-->
			
<!--		<div class="col-xs-6 col-sm-3 col-sm-offset-1">-->
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>One Love Beach Club</h4>
					<p>2767 E. Broadway</p>
					<p>Long Beach, CA 90803</p>
					<a href="tel:">(562)343-5388</a>
			</div>
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Long Beach Wellness Center</h4>
					<p>830 Atlantic Ave</p>
					<p>Long Beach, CA 90813</p>
					<a href="tel:">(562)285-0149</a>
			</div>
			<div class="store-info-listing col-xs-6 col-sm-4">
					<h4>Alternative Care Consultants</h4>
					<p>4201 Long Beach Blvd. </p>
					<p>Long Beach, CA 90807</p>
					<a href="tel:">(619)291-7215</a>
			</div>			
<!--		</div>	-->
			
		</div>
<div id="map" class="col-sm-10"></div>
<div id="info_div"></div>
	</section>
	

	
<!--
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMvyQUfRsh_udOEWaXafJpXeV1PBf3p6M&callback=initMap">
    </script>
-->
<!--
		<div>
		<select id="locationSelect" style="width:100%;visibility:hidden"></select></div>
	 <div id="map" style="width: 100%; height: 80%"></div>
		
	</section>
	<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMvyQUfRsh_udOEWaXafJpXeV1PBf3p6M&callback=initMap">
    </script>
-->
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

		<section style="margin-top: 50px;margin-bottom: 25px;">
		<h4 align="center" class="">Follow Us on <br> <img src="images/iconmonstr-instagram-11-48.png" width="30px" style="margin-right: 5px;"><img src="images/instgram-gold.png" width="150px" style="margin-right: 5px;"></h4>
			
		<div class="col-sm-8 col-sm-offset-2" id="my-gallery-container">		
			<div class="item" data-order="8">
				<img src="images/AdobeStock_174790986.jpeg" class="img-responsive">
			</div>			
			<div class="item" data-order="7">
				<img src="images/AdobeStock_145831745.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="6">
				<img src="images/AdobeStock_132557225.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="5">
				<img src="images/AdobeStock_145317509.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="4">
				<img src="images/AdobeStock_136105450.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="3">
				<img src="images/cbd-calm-3.jpg" class="img-responsive">
			</div>
			<div class="item" data-order="2">
				<img src="images/AdobeStock_159670715.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="1">
				<img src="images/AdobeStock_194054213.jpeg" class="img-responsive">
			</div>
			<div class="item" data-order="0">
				<img src="images/AdobeStock_128602239.jpeg" class="img-responsive">
			</div>

		</section>


	</div>
	<script type="text/javascript">
		jQuery(document).ready(function ( $ ) {
			$("#my-gallery-container").mpmansory(
				{
					childrenClass: 'item', // default is a div
					columnClasses: 'padding', //add classes to items
					breakpoints:{
						lg: 4, 
						md: 4, 
						sm: 4,
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
		
		<h3 align="center" class="col-xs-12" style="margin-top: 25px;margin-bottom: 50px;">#IndicaPharms</h3>

    <?php
	include "footer.php";
	?>
	    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
-->

</body>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMvyQUfRsh_udOEWaXafJpXeV1PBf3p6M&callback=initMap" async defer></script>
		<script>
function initMap() {
	var myMapCenter = {lat: 33.7700504, lng: -118.19373949999999};

	// Create a map object and specify the DOM element for display.
	var map = new google.maps.Map(document.getElementById('map'), {
		center: myMapCenter,
		zoom: 12,
		styles: [
            {elementType: 'geometry', stylers: [{color: '#143c2f'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#143c2f'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#a48e4c'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#a48e4c'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#236B54'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#55d3af'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#44A88B'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#44A88B'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#205c49'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#236B54'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#236B54'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#222222'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#222222'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#222222'}]
            }
          ]
	});


	function markStore(storeInfo){

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
			map: map,
			position: storeInfo.location,
			title: storeInfo.name,
			icon: 'images/marker2.png'
		});
		
//		  var contentString = '<div id="content">'+
//			  '<div id="siteNotice">'+
//			  '</div>'+
//			  '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
//			  '<div id="bodyContent">'+
//			  '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
//			  'sandstone rock formation in the southern part of the '+
//			  'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
//			  'south west of the nearest large town, Alice Springs; 450&#160;km '+
//			  '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
//			  'features of the Uluru - Kata Tjuta National Park. Uluru is '+
//			  'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
//			  'Aboriginal people of the area. It has many springs, waterholes, '+
//			  'rock caves and ancient paintings. Uluru is listed as a World '+
//			  'Heritage Site.</p>'+
//			  '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
//			  'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
//			  '(last visited June 22, 2009).</p>'+
//			  '</div>'+
//			  '</div>';

		var infowindow = new google.maps.InfoWindow({
			content: info_div
//			content: contentString
			
		});

		// show store info when marker is clicked
		marker.addListener('click', function(){
			showStoreInfo(storeInfo);
			infowindow.open(map, marker);
//			infowindow.close(map, marker);
			
		});
		
		// show store info when marker is clicked
//		marker.addListener('click', function(){
//			showStoreInfo(storeInfo);
//			infowindow.close(map, marker);			
//		});		
	}

	// show store info in text box
	function showStoreInfo(storeInfo){
		var info_div = document.getElementById('info_div');
		info_div.innerHTML = ''
			+ '<h4>' + storeInfo.name + '</h4>'
			+ '<h5>' + storeInfo.hours + '</h5>'		
			+ '<p>' + storeInfo.address + '</p>' 
			+ '<a>' + storeInfo.phone + '</a>'
		
		;
	}

	var stores = [
	{
		name: 'Connected',
		location: {lat: 33.7602891, lng: -118.13423499999999},
		hours: '8AM to 10PM',
		address: '5227 E 2nd St. <br /> Long Beach, CA 90803',
		phone: '(562)248-2474'
	},
	{
		name: 'Long Beach Green Room',
		location: {lat: 33.7831451, lng: -118.1521578},
		hours: '9AM to 9PM',
		address: '1735 E 7th St. <br /> Long Beach, CA 90813',
		phone: '(562)218-0021'
	},		
	{
		name: 'ShowGrow Long Beach',
		location: {lat: 33.7831451, lng: -118.1521578},
		hours: '9AM to 9PM',
		address: '3411 E Anaheim St. <br />Long Beach, CA 90804',
		phone: '(562)494-8437'
	},	
	{
		name: 'Care Alternative Meds',
		location: {lat: 33.859903, lng: -118.176596},
		hours: '9AM to 9PM',
		address: '3009 E South St. <br /> Long Beach, CA 90805',
		phone: '(562)633-5874'
	},
		{
		name: 'Nature\'s Healings',
		location: {lat: 33.861397, lng: -118.16189},
		hours: '8AM to 10PM',
		address: '834 E 4th St. <br /> Long Beach, CA 90802',
		phone: '(562)437-6590'
	},
	{
		name: 'NatureCann LBC',
		location: {lat: 33.835135, lng: -118.184719},
		hours: '9AM to 9PM',
		address: '4332 Atlantic Ave. Long Beach, CA 90807',
		phone: '(323)515-4500'
	},	
	{
		name: 'One Love Beach Club',
		location: {lat: 33.76579, lng: -118.159209},
		hours: '9AM to 9PM',
		address: '2767 E. Broadway <br /> Long Beach, CA 90803',
		phone: '(562)343-5388'
	},
	{
		name: 'Long Beach Wellness Center',
		location: {lat:  33.777202, lng:  -118.184569},
		hours: '8AM to 10PM',
		address: '830 Atlantic Ave <br /> Long Beach, CA 90813',
		phone: '(562)285-0149'
	},
	{
		name: 'Alternative Care Consultants',
		location: {lat: 33.83483, lng: -118.189837},
		hours: '9AM to 9PM',
		address: '4201 Long Beach Blvd. #410 <br /> Long Beach, CA 90807',
		phone: '(619)291-7215'
	},		
	];

	stores.forEach(function(store){
		markStore(store);
	});

}
</script>
	

</html>