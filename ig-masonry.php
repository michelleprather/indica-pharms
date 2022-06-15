<section id="ig-masonry">

	<h4 align="center">Follow Us on <br> <img src="images/iconmonstr-instagram-11-48.png" width="30px" style="margin-right: 5px;"><img src="images/instgram-gold.png" width="150px" style="margin-right: 5px;"></h4>
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

</section>
		<h3 align="center" class="col-xs-12" style="margin-bottom:50px;">@IndicaPharms</h3>