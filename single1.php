<?php include('insert1.php');?>
  <?php 
                 $db=mysqli_connect('localhost','root','759111167','comments');
                 $sql="SELECT * FROM comments";
                 $result=mysqli_query($db, $sql);?>
<!DOCTYPE html>
<html>
<head>
<title>Single</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Bon Appetite" />
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
							<a class="navbar-brand" href="index.html">Bon Appetite <span>Healthy And Tasty Food</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="AboutUs.html">About us</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-8 sing-img-text">
				<img src="images/11.jpg" alt=" " class="img-responsive" />
				<div class="sing-img-text1">
					<h3>Delicious Cate </h3>
					<p class="est">Choose us , get more specific details with regard your own choices!</p>
					<div class="com">
						<h3>Comments</h3>
						<ul class="media-list">
						  <li class="media">
							<div class="media-left">
							  <a href="#">
								<img class="media-object img-responsive" src="c.jpg" alt="" />
							  </a>
							</div>
							<div class="media-body">
							 
							 <p class="lead"> <?php   while($row=mysqli_fetch_array($result)){
        
               echo "<p>".'Name: '.$row['name']."</p>";
               echo "<p>".'Comment: '.$row['comment']."</p>";
               //echo "<p>".$row['comment']."</p>";
             
     } ?></p>
                            

                             </p>
							  
							</div>
						  </li>
						  <li class="media">
							<div class="media-left">
							  <a href="#">
								
							  </a>
							</div>
							<div class="media-body">
							 
							 
							</div>
						  
						</ul>
					</div>
					
				</div>
			</div>
			<div class="col-md-4 sing-img-text-left">
				<div class="blog-right1">
					<div class="search">
						<h3>Bon Appitite</h3>
						<form>
							
						</form>
					</div>
					
					</div>
					
					<div class="related-posts">
						<h3>You may also want to see</h3>
						<div class="related-post">
							<div class="related-post-left">
								<a href="single.html"><img src="images/6.jpg" alt=" " /></a>
							</div>
							<div class="related-post-right">
								<h4>Most popular foods graded by CNN</h4>
								<a href="http://www.cnn.com/travel/article/world-best-food-dishes/index.html"><p>View!
									<span></span>
								</p></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="related-post">
							<div class="related-post-left">
								<a href="single.html"><img src="images/7.jpg" alt=" " /></a>
							</div>
							<div class="related-post-right">
								<h4>Cate exhibition in Japan!</h4>
								<a href="https://www.miraikan.jst.go.jp/en/sp/food/intoroduction.html"><p>View!
									<span></span></p></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="related-post">
							<div class="related-post-left">
								<a href="single.html"><img src="images/8.jpg" alt=" " /></a>
							</div>
							<div class="related-post-right">
								<h4>French Type</h4>
								<a href="https://www.citymeals.org/news-more/in-the-kitchen/on-the-menu?utm_campaign=SEM&utm_medium=cpc&utm_source=1707ML000000&origin=1707ML000000&gclid=Cj0KCQiAgs7RBRDoARIsANOo-Hiiiinq4NNr0JaSIi8V2bICiefeTw_2sBCm8suyqfFgBgySU1hDtG4aAtKzEALw_wcB"><p>View!
									<span></span></p></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="leave-a-comment">
				<div class="col-md-2"></div>
				<h3>Leave your comment Here</h3> 
				
				<form method="post" action="single1.php">

					&nbsp;&nbsp;&nbsp;<input name="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					
					
					<textarea type="text" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Your Comment here...';}" required="">Type Your Comment here...</textarea>
					<input name="upload" type="submit" value="Add Comment">
				</form>
			</div>
		</div>
	</div>
<!-- //single -->
<!--footer-->
	
	
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>