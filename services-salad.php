<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
.services-overview-gd{
	padding:1.2em;
	background:#f6f6f6;
	height : 16em;
}
	
.services-overview-grd {
	height : 18em;/********************************************************************************/
	clear:left;
}
.services-overview-grd img{
	/*width: auto;
	max-height: 100%;
	min-height: 100%;*/
	float:left;

}
.services-overview-log{
	margin-bottom: 2em;
}

	</style>
<title>Services</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bon Appetite" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.1.min.js"></script>

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

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>

	<div class="banner1">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" >Bon Appetite <span>Healthy And Tasty Food</span></a>
						</div>
					</div>

					
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="services.php">Services</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
					  </ul>
					</div>
				</nav>
			</div>
		</div>
	</div>

	
			<div class="services-overview">
				<div class="services-overview-log">
				<h3>Services Overview<a href="success.php?logout='1'"> <button name="logout" class="btn btn-danger">Log out</button></a></h3>
			</div>
				
				<div class="services-overview-grids container" style="margin: auto;">
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/010.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/010.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction16.html"><h4>Hazelnut and Chard Ravioli Salad</h4></a>
								<p>Choose a winter flavored ravioli, I used a fresh (but store-bought) sweet onion and red chard ravioli, but I suspect a butternut squash ravioli would be delicious as well. I sometimes precook the raviolis and keep them in a single layer on a parchment-lined baking sheet until I am ready to use them - this helps prevent the raviolis from melding into one another after cooking. 
</p>
							</div>
						</div>
					</div>
					</div>
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/011.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction17.html"><h4>An Exceptional Salad with an Unusual Coconut Oil Dressing</h4></a>
								<p>This salad is inspired by the Tatsoi, Macadamia Nuts, and Shaved Coconut with Yuzu Kosho Dressing recipe in Julia Sherman's new Salad for President Cookbook. Also, a note on yuzu kosho. Look for it online or in any Japanese grocery. It's very much worth keeping on hand, and try to look for one without artificial flavoring.
</p>
							</div>
						</div>
						</div>
					</div>
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/012.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction18.html"><h4>Joshua McFadden's Cucumber Salad</h4></a>
								<p>HS: A couple of notes before diving into the recipe. I added some cooked lentils to make this a full lunch. Also, please feel free to use a mix of cucumber varietals, if you have access to more than one. 
</p>
							</div>
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


</body>
</html>