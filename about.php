<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>About | FashionBD</title>
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<style>
		.media-object{
		width: 120px;
		height: 120px;
		border-radius: 50%;
		border: 1px solid orange;
		margin-left: 30%;
		margin-bottom: -8px;
		}
		.media-heading{
		border-bottom: 2px solid orange;
		}
		.pos{
		background-color: rgba(0,0,0,0.8) !important;
		}
		.par{
		color: white;
		}
		.pos:hover{
		cursor: pointer;
		background-color: transparent !important;
		color: black !important;
		transition: 1s all ease-in;
		transform: scale(1.1);
		text-shadow: 5px 5px 10px gray;
		}
		.par:hover{
		color: black;
		font-size: 15px;
		font-weight: 500;
		}
		.tx{
					font-weight: bold;
					font-size: 18px;
					font-family: 'Lobster', cursive;
	    }
        .main{
			list-style: none;
			padding: 0;
			margin: 0;
			height: 60px;
			background: #c7c7c7;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.main  li{
			height: 40px;
			width: 40px;
			background: #fff;
			color: #000;
			
			margin-left: 20px;
			text-align: center;
			line-height: 40px;
			font-size: 20px;
			
		}
		.main li:first-child{
			margin: 0;
			background: #3B5998 ;
			color: #fff ;
 
		}
		
		.main li:nth-child(2){
			
			background: #00ABF5;
			color: #fff ;
 
		}
		.main  li:nth-child(3){
			
			background: linear-gradient(#743CA8,#DF1639,#F6D101 ) ;
			color: #fff ;
 
		}
		
		.main li:hover{
			cursor: pointer;
			box-shadow: 5px 10px 15px #000; 
			/* first er ta left to right , 2nd top to bottom ,3rd blur,4th color*/
			transition: 1s all;
			transform: rotate(360deg);
			border-radius: 50%;
			/*background: red !important;*/
			color: red !important;

		}



		</style>
		</head><!--/head-->
		<body>
			<header id="header"><!--header-->
			<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
					<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
					<img src="images/home/FashionBD (4).png" alt="" / height="150px">
				</div>
			</div>
			<div class="col-md-8 clearfix">
				<div class="shop-menu clearfix pull-right">
					<ul class="nav navbar-nav">
						<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
						<li><a href="wishlist.php"><i class="fa fa-star-o" aria-hidden="true"></i> Wishlist</a></li>
						<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
						<li class="dropdown"><a href="#"><i class="fa fa-lock"></i>Sign up/Login as<i class="fa fa-angle-down"></i> </a>
						<ul role="menu" class="sub-menu">
							<li><a href="admin_login.php">Admin</a></li>
							<li><a href="logincustomer.php">Customer</a></li>
							<li><a href="#">Shopper</a></li>
							<li><a href="#">Delivery Boy</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->

<div class="header-bottom"><!--header-bottom-->
<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="mainmenu pull-left">
				<ul class="nav navbar-nav collapse navbar-collapse">
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="del_status.php">Delivery-status</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="search_box pull-right">
				<input type="text" placeholder="Search"/>
			</div>
		</div>
	</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->
<section class="bdy">
	<div class="container">
		<div class="sec1 tx"> <!-- about fashionbd -->
		<h1 class="headd">About FashionBD</h1>
		<p class="1">
			Launched in 2021,FashionBD is a big online shopping marketplace with an active presence in Bangladesh.
		</p>
		<p class="2">
			Online Shopping BD has never been easier. FashionBD.com is best online shopping store in Bangladesh that features 10+ million products at affordable prices. As bangaldesh's online shopping landscape is expanding every year, online shopping in dhaka, chittagong, khulna, sylhet and other big cities are also gaining momentum.
		</p>
		<p class="3">FashionBD has 30,000 seller and 500 brands and servers 5 millon customers across the region.FashionBD is among best websites for online shopping in bangladesh that promises fast, reliable and convenient delivery of products to your doorstep. </p>
		<p class="4">
			FashionBD being the trusted online shop in Bangladesh aims to provide a trouble-free shopping experience for the people of Bangladesh but is also providing ample opportunity for international online shopping from Bangladesh. FashionBD aims to make online shopping accessible to all parts of the country.
		</p>
		<p class="5">
			FashionBD is focused on providing an excellent customer experience,ease-of-purchase ,comprehensive cusmoter care and a hassle-free shopping and returns experience.
		</p>
		<p class="6">
			FashionBD is among best websites for online shopping in bangladesh that promises fast, reliable and convenient delivery of products to your doorstep.
		</p>
	</div>
	<div class="sec2"> <!-- location -->
	<h1 class="headd">Our Location</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116898.77998533717!2d90.4060074!3d23.7085915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8d73a64e709%3A0x65a4e99bd5bb0ebd!2sOld%20Dhaka%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1619450852441!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="about pt-3">
	<h1 class="headd">Contact Us</h1>   <!-- About us -->
	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 col-lg-4 offset-2">
				<div class="card pos">
					<div class="card-header">
						<img class="media-object" src="images/131045602_2830751513831075_2931227458033693863_n.jpg" alt="">
					</div>
					<div class="card-body">
						<h4 class="media-heading">Tanvir Ahammed</h4>
						<p class="par">
							MD. Tanvir Ahammed Hridoy<br>
							BSc in CSE, Jagannath University <br>
							hmhridoy65@gmail.com<br>
							Rajoir,Madaripur
						</p>
						<p class="par">
							<ul class="main">
								<li><a href="https://www.facebook.com/profile.php?id=100006887620772"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							
								
								<li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 ">
				<div class="card pos">
					<div class="card-header">
						<img class="media-object" src="images/165890223_1240529366345241_8442038963134689024_n.jpg" alt="">
					</div>
					<div class="card-body">
						<h4 class="media-heading">Susmita Saha</h4>
						<p class="par">
							Susmita Rani Saha<br>
							BSc in CSE, Jagannath University <br>
							pS4966829@gmail.com<br>
							Pansha,Rajbari

						</p>
						<p class="par">
							<ul class="main">
								<li><a href="https://www.facebook.com/priyasaha0"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
								<li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="footer-bottom"><!--footer bottom-->
<div class="header_top">
<div class="container">
<div class="row">
	<div class="col-sm-6 ">
		<div class="contactinfo">
			<ul class="nav nav-pills">
				<li><a href="">&copy; fashionBD.com 2021 All Rights Reserved.</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="social-icons pull-right">
			<ul class="nav navbar-nav">
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-linkedin"></i></a></li>
				<li><a href=""><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</div><!--/footer bottom-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>