<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wishlist | FashionBD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<style>
	img{
		height:90px;
		width: 90px;
	}
	.buttonn{
		background: #fe980f !important;
    color: #080808 !important;
    display: inline-block !important;
    font-size: 16px !important;
    height: 40px !important;
     overflow: hidden; 
    text-align: center !important;
    width: 97px !important;
    float: left !important;
     line-height: 26px; 
    margin-top: -10px;
    border: 1px solid black;
}

	}
</head>

</style>
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
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items"> <!-- cart -->
		<div class="container">
			<div class="breadcrumbs">
				<h1 class="headd">Wishlist</h1>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed table-hover">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td>Add to cart</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Saree/indian-lady-saree-600w-646509859.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4>Indian Embroidery Jorget Saree</h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>৳ 5600</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="btn btn-default buttonn" href="">Cart</a>
								</div>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Shoe/modern-businesswoman-working-woman-closeup-260nw-679753204.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">New exclusive black pencil heel</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>৳ 3500</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="btn btn-default buttonn" href="">Cart</a>
								</div>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Shirt/1c57f2f2-fc83-4c1e-9ffe-966758b4f6c41581635929981-3.webp" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">One Point black formal shirt</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>৳ 2300</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="btn btn-default buttonn" href="">Cart</a>
								</div>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="header_top"><!--footer bottom-->
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
		</div><!--/footer bottom-->
		</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>