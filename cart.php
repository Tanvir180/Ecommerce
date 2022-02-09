<!DOCTYPE html>
<html>
<head>
	<title>fashionBD</title>
</head>
<body>

	<?php 
     include("header.php");


   ?>

	 <div class="container">
	 	<div class="col-md-12 get_cart my-5">
	 		
	 	</div>
	 </div>


	 <script type="text/javascript">
	 	$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
              	$("#get_cart").html(data.out);
                $("#cart").text(data.da);
                $("#total").text(data.total);
              }
           });
           }

           setInterval(show_mycart,1000);

	 	});

	 	$(document).on("click",".remove",function(){
             var id = $(this).attr("id");

             var action = "delete";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});

	 		$(document).on("click",".clearall",function(){
             var id = $(this).attr("id");

             var action = "clearall";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});
	 </script>



<div class="text-center">
  
  <a class="btn btn-dark  col-md-2" href="payment.php">Payment</a>
</div>



<section>
  
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
  
</section>


</body>
</html>