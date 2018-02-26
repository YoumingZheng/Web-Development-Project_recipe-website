<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bon Appitite" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='https://fonts.googleapis.com/css?family=UnifrakturMaguntia' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,600italic,700,400' rel='stylesheet' type='text/css'>
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
	<div class="banner">
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
							<a class="navbar-brand" href="index.php">Bon Appitite <span>Healthy And Tasty Food</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Home</a></li>
						
						<li><a href="AboutUs.html">About Us</li>
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
			<div class="banner-info">
				<div class="col-md-6 banner-info-left">
					<h1>Our website will provide your exquisite ways to meet your own appetite!</h1>
					
					
					<div class="more">
						<br>
						<a href="single1.php">More Contents</a>
					</div>
				</div>
				<div class="col-md-6 banner-info-right">
					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
							  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Sign In</span></li>
							  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Sign Up</span></li>
							  <div class="clear"></div>
							</ul>				  	 
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="sign-in-form">
											<div class="in-form">
												<form method="post" action="index.php">
													<?php include('errors.php');?>
													<input name="username" type="text" placeholder="Username" required>
													 <input type="password" class="form-control" name="password" placeholder="Enter password">
												
												<div class="ckeck-bg">
													<div class="checkbox-form">
														<div class="check-left">
															
															
														</div>
														<div class="check-right">
															
																<input name="login" type="submit" value="Login">
															
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<div class="sign-in-form">
											<div class="in-form Personal">
												<h4>Personal Information</h4>
												<form method="post" action="index.php">
													<?php include('errors.php');?>
													<input name="username" type="text" class="textbox" placeholder="Enter your Username" value="<?php echo $username; ?>">
													<input name="email" type="text" class="textbox" placeholder="Enter your Email" value="<?php echo $email; ?>" >
												
											
												
												    <input type="password" name="password1"class="password1" value="Enter your password here" placeholder="Enter your password">
												     <input type="password" name="password2"class="password2" value="Confirm your password..." placeholder="Confirm your password" >
													<input type="submit" value="submit" name="register">
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html> -->