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
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="services.php">Services</a></li>
						
						<li><a href="menu.html">Menu</a></li>
						<li><a href="AboutUs.php">About us</a></li>
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
							<a href="images/09.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/09.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction15.html"><h4>Five Minute Avocado Dressing with Herbs and Spinach</h4></a>
								<p>I used it for a simple butter lettuce salad with toasted almonds and (more) herbs. Other ways I can imagine putting it to use? As a taco slather, as a generous dollop on a baked potato (or sweet potato), or on any of these lentil soups.
</p>
							</div>
						</div>
						</div>
					</div>
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/5.jpg"  alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction14.html"><h4>Pasta with Baby Kale, Toasted Pumpkin Seeds, and Pesto</h4></a>
								<p>Last week, on Instagram, I posted an on-the-fly, super-quick pasta dish I made for lunch. It was cute, little, elbow pasta tossed with the last of a jar of pesto, a few handfuls of baby kale, toasted pumpkin seeds, and a shower of lemon zest. So good! So easy! A number of you requested the recipe, and I've included it down below. 
	
</p>
							</div>
						</div>
						</div>
					</div>
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/07.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction13.html"><h4>Golden-Crusted Brussels Sprouts Recipe</h4></a>
								<p>This is a great way to eat brussels sprouts: cut in half and cooked until deliciously tender inside and perfectly brown and crusted on the outside.
	
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