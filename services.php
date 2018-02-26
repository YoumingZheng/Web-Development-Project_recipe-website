<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Services</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bon Appetite" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand">Bon Appetite <span>Healthy And Tasty Food</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						
						<li class="active"><a href="services.html">Services</a></li>
						<li><a href="cart.html">Shopping</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="AboutUs.php">About us</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- services -->
	
			<div class="services-overview">
				<h3>Services Overview<a href="success.php?logout='1'"> <button name="logout" class="btn btn-danger">Log out</button></a></h3>
				
				<div class="services-overview-grids">
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="serviceimage/1.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/1.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
								<a href="services-vegan.php"><h4>Vegan Recipes</h4></a>
								<p>The recipes listed here are vegan, or easily made vegan (with a minor tweak or two). I only list them here if I've actually mentioned how to make the recipe vegan in the recipe or in the head notes of the recipe.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/5.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
								<a href="services-steak.php"><h4>Steak</h4></a>
								<p>Grilled Portobello mushroom may be called mushroom steak, and similarly for other vegetarian dishes.[4] Imitation steak is a food product that is formed into a steak shape from various pieces of meat. Grilled fruits, such as watermelon have been used as vegetarian steak alternatives.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/12.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
								<a href="services-quick.php"><h4>Quick Recipes</h4></a>
								<p>Quick recipes often become my favorites. They are the ones I revisit most often, the ones that have a tendency to become staples. I’m a believer that just because a recipe comes together quickly, doesn’t mean it's less special or delicious.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-overview-grids">
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="images/7.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/27.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
							<a href="services-salad.php"><h4>Salad Recipes</h4></a>
								<p>Having a repertoire of great salad recipes is important. This is a list of many of the best salads I’ve prepared over the years. There is a mix of green salads, grain salads - all with an emphasis on fresh, whole, seasonal, plant-based ingredients. Enjoy!</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="images/8.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/36.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
								<a href="services-breakfast.php"><h4>Breakfast / Brunch Recipes</h4></a>
								<p>Few people enjoy a proper breakfast more than I do. This is a list of many of the best breakfast and brunch recipes I’ve discovered over the years. Some are quick grab-and-go recipes, others are for when you have more time.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<a href="images/9.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="serviceimage/9.jpg" alt=" " class="img-responsive" />
							</a>
							<div class="services-overview-gd">
								<a href="services-seafood.php"><h4>Sea Food</h4></a>
								<p>When chef Michael Serpa left Neptune Oyster to open his own restaurant, we wondered: What would happen to the overflowing lobster roll? Or the crisp.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
		</div>
	</div>
<!-- //services -->
<!--footer-->

</body>
</html>