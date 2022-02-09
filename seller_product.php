
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Product insert</title>
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
    .tag{
			color:rgb(208,78,9);
		font-family: 'Lobster', cursive;
		font-weight: bold;
		}
	</style>
	</head>
	
	<?php 

include("connection.php");

if (isset($_POST['add'])) {
	
	$file = $_FILES['image']['name'];
	$name = $_POST['name'];
	$price = $_POST['price'];



	if (empty($file)  && empty($name) && empty($price)) {
		echo "fff";
	}else{
		$query = "INSERT INTO cart(name,price,image) VALUES('$name','$price','$file')";
		$res = mysqli_query($connect,$query);

		if ($res) {
		  move_uploaded_file($_FILES['image']['tmp_name'], "img/$file");

		  $name = "";
		  header("Location: seller_product.php");
		}else{
			
		}
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
				<img src="images/home/FashionBD (4).png" alt="" / height="150px">
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Seller</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
								<li><a href="seller_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
							</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> ADD PRODUCT </h2>
						</div>
						<hr>
						<div class="card-body bg-primary">
							
								
	 				<form method="post" enctype="multipart/form-data">
	 					<label>Choose Product Image</label>
	 					<input type="file" name="image" class="form-control">
	 					<label>Product Name</label>
	 					<input type="text" name="name" class="form-control">
	 					<label>Product Price</label>
	 					<input type="number" name="price" class="form-control">
	 					<input type="submit" name="add" class="btn btn-info my-5" value="Add New Product">
	 				</form>
	 		</div>
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