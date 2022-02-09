<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration</title>
		<link href="css/bootstrapreg.min.css" rel="stylesheet">
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
		<style type="text/css">
			.btn-danger {
   					 float: none !important;
   					margin-right: 76px!important;
                    margin-left: 76px!important;
            }

			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: 0.8;
				font-weight: bold;
			}
			.already{
				color: white;
				font-size: 17px;
			}
			.al{
				color: orange;
			}
		</style>
	</head>
	<body>

		<?php 
        include 'insert.php';

		if(isset($_POST['submit'])){
         

		$username=mysqli_real_escape_string($con, $_POST['username']);
		$number= mysqli_real_escape_string($con,$_POST['number']);
		$email= mysqli_real_escape_string($con,$_POST['email']);
		$dob= mysqli_real_escape_string($con,$_POST['dob']);
		$district=mysqli_real_escape_string($con, $_POST['district']);
		$address=mysqli_real_escape_string( $con,$_POST['address']);
		$password= mysqli_real_escape_string($con,$_POST['pass']);
		$cpassword= mysqli_real_escape_string($con,$_POST['pass1']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$pass1 = password_hash($cpassword, PASSWORD_BCRYPT);

		// $token=md5(time().$username);
		$token = bin2hex(random_bytes(15));

		$emailquery =" select * from logincustomer where email='$email' ";
		$query = mysqli_query ($con,$emailquery) or die("query faild");
				
		$emailcount = mysqli_num_rows($query);
		if($emailcount>0){
			?>
		<script>
			alert("Email Already Exists");
		</script>
		<?php
		}
		else{
          if($password===$cpassword)
          	// data and value check ===
		{
		$insertquery = "insert into logincustomer(username,nmber,email,dob,district,address,pass,pass1,token,status) values('$username','$number','$email', '$dob','$district' ,'$address','$pass','$pass1','$token','inactive')";
		$iquery =mysqli_query ($con, $insertquery);

		if($iquery){
				$to_email = $email;
                $subject = "Email Activation";
                $body = "Hi, $username. Click here to activate your account 
                 http://localhost/Project/activated.php?token=$token";
                $sender_email = "From:ps4966829@gmail.com";

               if (mail($to_email, $subject, $body, $sender_email)) {
                 $_SESSION ['msg']="Check your mail to activated your account $email";
                  header('location:logincustomer.php');
               } else {
               echo "Email sending failed...";
               }
 
	
		}else{
			?>
			<script>
			alert("Data Can't Insert");
		   </script>
		   <?php
		}
	}else{
			?>
		   <script >
			alert("Passwords are not matching");
		   </script>
		   <?php
		}
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
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Register</h2>
						</div>
						<div class="card-body ">
							
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
								<div class="form-group">
									<label for="name">Full Name<span class="text-danger">*</span></label>
									<input type="text" name="username" id="name" class="form-control" required="" placeholder="Please enter your name" >
									
								</div>
								<div class="form-group">
									<label for="number">Contact Number<span class="text-danger">*</span></label>
									<input type="text" name="number" id="number" class="form-control " required="" placeholder="Please enter your contact number" >
									
								</div>
								<div class="form-group">
									<label for="email">E-mail address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control "required="" placeholder="Please enter your email">
								</div>
								<div class="form-group">
									<label for="dob">Date of Birth <span class="text-danger">*</span></label>
									<input type="date" name="dob" id="dob"  class="form-control" required="">
								</div>
								<div class="form-group">
									<label for="dis">Division <span class="text-danger">*</span></label>
									<select name="district" id="dis"  class="form-control" required="">
										<option value="dhaka">Dhaka</option>
										<option value="rangpur">Rangpur</option>
										<option value="madaripur">Chittagong</option>
										<option value="khulna">Khulna</option>
										<option value="ragsahi">Rajsahi</option>
										<option value="ragsahi">Mymensing</option>
										<option value="ragsahi">Barishal</option>
										
									</select>
								</div>
								<div class="form-group">
									<label for="name">Address <span class="text-danger">*</span></label>
									<input type="text" name="address" id="address" class="form-control" required="" placeholder="Please enter your address" >
									
								</div>
								<div class="form-group">
									<label for="dis">Password <span class="text-danger">*</span></label>
									<input type="password" name="pass" id="pass" class="form-control"required="" placeholder="Please enter your password" ><br>
								</div>
								<div class="form-group">
									<label for="pass1">Conform Password <span class="text-danger">*</span></label>
									<input type="password" name="pass1" id="pass1" class="form-control " required="" placeholder="Please enter your password" >
								</div>
								</div>
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3">Register</button>
										<button type="reset" class="btn btn-danger mx-3">Reset</button>
										
									</div>
									<p class="already">Already a member? <span><a class="al" href="logincustomer.php">Login here</a></span></p>
								</form>
							</div>
						</div>
					</div>
				</div>
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