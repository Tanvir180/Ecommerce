<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | FashionBD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapreg.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Icon/css/font-awesome.min.css">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<style>
	body{
    background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    }
	.card{
		background: black!important;
		opacity: 0.8;
		
	}
	.form-group label
	{
		color: orange!important;
		font-size: 18px!important;
		
	}
	.form-group input,
	.form-group button,
	.form-group a{
		font-size: 15px!important;
	}
	h1{
		font-size: 80px;
		color: orange!important;
	}
	h2{
		font-size: 25px!important;
	}
	.already{
				color: white;
				font-size: 17px;
			}
			.al{
				color: orange;
				font-size: 17px;
			}
</style>
</head><!--/head-->

<body>
	<?php 
		$user="";
		$numbr="";
		$dob="";
		$district="";
		$address="";
		$email="";
        include 'insert.php';

		if(isset($_POST['submit'])){
         
		$email= $_POST['email'];

		$emailquery ="select * from logincustomer where email='$email'";
		$query = mysqli_query ($con,$emailquery) or die("query faild");

		$emailcount = mysqli_num_rows($query);

		if($emailcount){
			$email_pass=mysqli_fetch_assoc($query);
			$user=$email_pass['username'];
			$numbr=$email_pass['nmber'];
			$dob=$email_pass['dob'];
			$district=$email_pass['district'];
			$address=$email_pass['address'];
			}else{	
			?>
			<script>
			alert("Invalid Email");
			</script>
			<?php
				}
			}

        ?>
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
	<section>
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h1 class="text-danger text-center"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1>
							<h2 class="text-danger text-center">My Profile</h2>
						</div>
						<div class="card-body ">
							
							<form action="#" method="post">
								<div class="form-group">
									<label for="email">E-mail address</label>
									<input type="email" name="email" id="email"  class="form-control"value="<?php echo $email;?>" placeholder="Enter your email address" >
								</div>
								<div class="form-group text-center">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Ok</button>
								</div>
								<div class="form-group">
									<label for="name">Full Name </label>
									<input type="text" name="username" id="name" class="form-control" value="<?php echo $user;?>" >
									
								</div>
								<div class="form-group">
									<label for="nmbr">Contact Number</label>
									<input type="text" name="nmbr" id="nmbr" class="form-control "  value="<?php echo $numbr;?>" >
									
								</div>
								
								<div class="form-group">
									<label for="dob">Date of Birth</label>
									<input type="text" name="dob" id="date" class="form-control " value="<?php echo $dob;?>" >
								</div>
								<div class="form-group">
									<label for="dis">Division</label>
									<input type="text" name="division" id="division" class="form-control "  value="<?php echo $district;?>" >
								</div>
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" name="address" id="address" class="form-control"  value="<?php echo $address;?>" >
									
								</div>
								</div>
								
								<div class="card-footer text-center">
									<div>
										<p class="already"><span><a class="al" href="update_info.php?em=<?php echo $email;?> & nm=<?php echo $user;?> &cn=<?php echo $numbr;?> & dob=<?php echo $dob;?> & div=<?php echo $district;?> & add=<?php echo $address;?>">Update information ?</a></span></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer"><!--Footer-->
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
		</div><!--/footer bottom-->
		</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>