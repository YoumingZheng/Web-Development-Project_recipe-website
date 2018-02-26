
<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head><meta http-equiv=refresh content="4;url=services.php"></head>
<title>Services</title>
<!--  -->
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
							<a class="navbar-brand" >Bon Appitite <span>Healthy And Tasty Food</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						
					
						
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
       
<div class="content">
    	<?php if (isset($_SESSION['success'])):?>
    		<div class="error success">
    	 <h3>
    	 	<?php echo $_SESSION['success'];
    	 	unset($_SESSION['success']);

    	 	?>
    		

    	</h3>		
    </div>
    	<?php endif ?>
    	<?php if(isset($_SESSION["username"])):?>
    		<p class="lead"><h1>Welocome!&nbsp; <?php echo $_SESSION['username']; ?></h1></p>
    		<br>
    		<p class="lead">If the page does not change in 5 seconds, then click this button</p>
    		<br>
    		<a href="services.php"><button name="jump" class="btn btn-primary">Go to Services</button></a></p>
    	<?php endif ?>	
    </div>

    
<!-- <p><a href="success.php?logout='1'">  <button name="logout" class="btn btn-danger" style="width:250px">Log out</button></a></p> -->
<!--footer-->

</body>
</html>