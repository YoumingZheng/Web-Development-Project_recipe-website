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
							<a class="navbar-brand">Bon Appetite <span>Healthy And Tasty Food</span></a>
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
							<a href="images/018.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/018.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction6.html"><h4>Crustacean-inspired Garlic Roasted Crab</h4></a>
								<p>The buttery sauce that coats the crabmeat and the shells is part of the pleasure of this dish; to really enjoy it, dispense with the utensils and just eat the crab with your hands. Serve with a green salad dressed with tarragon vinaigrette and plenty of crusty sourdough bread. </p>
							</div>
						</div>
						</div>
					</div>
					<div class=" services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/016.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction4.html"><h4>Roasted Shrimp and Broccoli</h4></a>
								<p>One of my favorite walk-in-the-door meals is shrimp, roasted until hot and juicy, tossed over a quick bowl of pasta or shredded zucchini. The beautiful thing about shrimp is that, even if you're starting from frozen, they don't take but a few minutes to cook. Here's how to cook shrimp quickly and easily in the oven — such a treat! </p>
							</div>
						</div>
						</div>
					</div>
					<div class="services-overview-grid">
						<div class="services-overview-grd">
							<div class="col-sm-4">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/015.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="col-sm-8">
							<div class="services-overview-gd">
								<a href="introduction3.html"><h4>Roasted Shrimp Cocktail</h4></a>
								<p>The easiest roasted shrimp cocktail ever made with just 5 min prep. Yes, it’s just that easy!
								If you’re ever in need of a quick and easy appetizer, look no further because this can be made in 5 min. Yes. 5 min. </p>
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