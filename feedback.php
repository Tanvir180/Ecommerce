<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Feedback</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/Bootstraplogin.min.css" rel="stylesheet">

		<style type="text/css">
			
			.text-danger{
				font-weight: bold;
				font-size: 30px!important;
				float: right!important;
			}
			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
				background-repeat: no-repeat;
    			background-size: cover; 
   			    background-attachment: fixed;
			}
			.pos{
				opacity: .8;
			}
			h2{
				 color: orange !important;
                 font-size: 3rem;
                 /*font-weight: bold;*/
			}
			.textarea{
				font-size: 16px;
			}
			/*.mx-5 {
              margin-left: 6rem!important;
          }*/
		</style>
	</head>
	<body>

		<?php

			include 'insert.php';

			if(isset($_POST['submit']))
			{

					$name = $_POST['username'];
					$email = $_POST['email'];
					$subject = $_POST['product'];
					$feedback = $_POST['feedback'];

					$insertquery = "insert into feedback(name,email,product,feedback) values('$name','$email','$subject','$feedback')";
						$iquery =mysqli_query ($con, $insertquery);

						if($iquery){
							?>
						<script>
							alert("Feedback is been stroed");
							location.replace("index.php");
						</script>
						<?php
					}else{
						?>
						<script>
							alert("Feedback is not been stroed");
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
<section class="bdy">
	<div class="container my-5 ">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text text-center"> Feedback</h2>
						</div>
						<div class="card-body">
							
							<form action="#" method="post">
								<div class="form-group text-light font-weight-bold">
									<div class="form-group text-light font-weight-bold">
										<div class="form-group">
											<label for="username">Name <span class="text-danger">*</span></label>
											<input type="text" name="username" id="username" class="form-control" required="" placeholder="Enter Your Name">
										</div>
										<label for="email">Email Address <span class="text-danger">*</span></label>
										<input type="email" name="email" id="email"  class="form-control" required="" placeholder="Enter Your Email">
									</div>
									<div class="form-group">
										<label for="subject">Product Id<span class="text-danger">*</span></label>
										<input type="text" name="product" id="subject" class="form-control" required="" placeholder="Enter product's name">
									</div>
									<label for="address">Your Feedback <span class="text-danger">*</span></label>
									
									<textarea name="feedback" id="address" cols="30" rows="10" class="text"required="" placeholder="Give feedback"></textarea><br>
									
									<div class="card-footer">
										<div class="form-group text-center">
											<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Submit</button>
											<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
										</div>
									</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
</section>
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
			<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
		</body>
	</html>