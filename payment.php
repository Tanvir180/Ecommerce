<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Payment</title>
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
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
   	   .pos{
        opacity: 0.9;
    }

	</style>
	</head>
	 <?php
         include 'insert.php';

			if(isset($_POST['submit']))
			{

					$email = $_POST['email'];
					$name = $_POST['username'];
					$bank = $_POST['bank'];
					$number = $_POST['number'];
					$tnx = $_POST['tnx'];
					$product = $_POST['product'];
					$amount = $_POST['amount'];


					$insertquery = "insert into payment(email,username,bank,number,transaction_id,product_id,amount) values('$email', '$name', '$bank', '$number', '$tnx', '$product', '$amount' )";
						$iquery =mysqli_query ($con, $insertquery);

						if($iquery){
							?>
						<script>
							alert("Payment is been stroed");
							location.replace("index.php");
						</script>
						<?php
					}else{
						?>
						<script>
							alert("payment is not been stroed");
						</script>
						<?php
					}
				}
           ?>
	<body>
		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
						<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
						<img src="images/home/FashionBD (4).png" alt="" height="150px">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9"><div class="navbar-header">
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
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> PAYMENT </h2>
						</div>
						<hr>
						<div class="card-body">
							
							<form action="#" method="POST">
								<div class="form-group text-light font-weight-bold">
									<label for="email">Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control form-control-lg" placeholder="Enter your email address">
								</div>
								<div class="form-group">
									<label for="name">Full Name <span class="text-danger">*</span></label>
									<input type="text" name="username" id="name" class="form-control" required="" placeholder="Please enter your name" >
									
								</div>
								<div class="form-group">
									<label for="bank">Mobile Banking <span class="text-danger">*</span></label>
									<select name="bank" id="dis"  class="form-control" required="">
										<option value="Bkash">BKash</option>
										<option value="Nagad">Nagad</option>
										<option value="Duch Bangla">Duch Bangla</option>
										
									</select>
								</div>
								<div class="form-group">
									<label for="number"> Number <span class="text-danger">*</span></label>
									<input type="text" name="number" id="number" class="form-control " required="" placeholder="Please enter your contact number" >
									
								</div>	
								<div class="form-group">
									<label for="tnx">Transaction ID <span class="text-danger">*</span></label>
									<input type="text" name="tnx" id="tnx" class="form-control " required="" placeholder="Please enter your Transaction Id" >
									
								</div>
								<div class="form-group">
									<label for="pr">Product ID <span class="text-danger">*</span></label>
									<input type="text" name="product" id="pr" class="form-control " required="" placeholder="Please enter your Product Id" >
									
								</div>
								
								<div class="form-group">
									<label for="amount">Amount <span class="text-danger">*</span></label>
									<input type="text" name="amount" id="amount" class="form-control" required="" placeholder="Please enter Amount" >
									
								</div>

								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Submit</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
		
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>