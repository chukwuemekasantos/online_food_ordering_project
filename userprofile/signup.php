
<?php

	include_once './contoller/insert.php';

	$userObject = new insert;

	$newRegUserFuction = $userObject->registerNewUser();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
 			<div class="signup-block">

				 <?php


				      if ($newRegUserFuction === 'userfound') {
				        ?>
				          <div class="alert alert-danger alert-dismissible col-md-12">
				          <button type="button" class="close" data-dismiss="alert">&times;</button>
				             Email is already in use! 
				        </div>
				        <?php
				          
				      }elseif ($newRegUserFuction === 'success') {

				        ?>
				         <div class="alert alert-success alert-dismissible col-md-12">
				          <button type="button" class="close" data-dismiss="alert">&times;</button>
				            You are registered successfully!
				        </div>
				        <?php
				      }
   				 ?>
 
				<form method="POST" id="userRegistrationForm">
					<input type="text" name="name" placeholder="Name" required="" value="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="text" name="phone"  placeholder="Phone No" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<!-- <ul>
								<li>
									<input type="checkbox" id="brand1" value="" required="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul> -->
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="register" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a></h4>
				  <h5><a href="../index.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 <a href="http://w3layouts.com/" target="_blank">Foodie</a> </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- <script type="text/javascript" src="js/fetch.js"></script>
 --><!-- mother grid end here-->
</body>
</html>


                      
						
