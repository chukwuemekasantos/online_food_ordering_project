<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Foodie</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body >

<div class="super_container">

	<!-- Header -->

	<?php

		include_once 'header.php';

	?>

	<!-- Slider -->

	<div class="main_slider" id="main_slider" style="background-image:url(images/slider_1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2017</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="new_arrivals" id="cat">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Make Your Chioce</h2>
					</div>
				</div>
			</div>
			
			<br>
			<br>
		

			 <div class="container marketing">
				<div id="myCarousel1" class="carousel slide" data-ride="carousel">
			      <!-- Indicators -->
			      <div class="carousel-inner">
			        <div class="item active">
			         <div class="row">
			        <div class="col-lg-4">
			          <img src="images/drinks.png" alt="Generic placeholder image">
			          <h5>Drinks and Snacks</h5>
			          <p>
			          	<a class="btn btn-default btn-hover" href="#" role="button" 
			          	onclick="window.location.href='snackanddrinks.php'">Order &raquo;
			          	</a>
			          </p>
			        </div><!-- /.col-lg-4 -->
			        <div class="col-lg-4">
			          <img src="images/salate.png" alt="Generic placeholder image">
			          <h5>Food/Swallow</h5>
			          <p><a class="btn btn-default btn-hover" href="#" role="button" onclick="window.location.href='swallow.php'">Order &raquo;</a></p>
			        </div><!-- /.col-lg-4 -->
			        <div class="col-lg-4">
			          <img src="images/rice.png" alt="Generic placeholder image">
			          <h5>Food/Fast Food</h5>
			          <p><a class="btn btn-default btn-hover" href="#" onclick="window.location.href='fastfood.php'" role="button">Order &raquo;</a></p>
			        </div><!-- /.col-lg-4 -->
					 
			        </div>
			      </div>
			      </div><!-- /.carousel -->
				</div>
			</div>

		</div>
	
					

	

	<!-- New Arrivals -->
<section id="aboutsection">
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>About Foodie</h2>
					</div>
				</div>
			</div>
			<div class="marketing">
			      	<div class="carousel-inner">
					      <div class="item active">
					      <div class="row featurette">
					        <div class="col-md-7 text-head">
					          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					        </div>
					        <div class="col-md-5">
					          <img src="images/burger.png" alt="Fish and Chips">
					        </div>
					      </div>
					    </div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- Deal of the week -->

	
	<!-- Best Sellers -->
<section id="clientssection">
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Foodie Clients</h2>
					</div>
				</div>
			</div>
			<div class="row">
				    <div class="col-md-12">
      
             
					</div>
			</div>
		</div>
	</div>
</section>
	<br>
	<br>
	<!-- Benefit -->

	
	<!-- Newsletter -->


	<!-- Footer -->

	<?php

		include_once 'footer.php';
	?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script type="text/javascript" src="js/cus.js"></script>
<script src="js/custom.js"></script>
	
<script type="text/javascript">
	$(document).ready(function(){
		

		$('#quote-carousel').carousel({
    		pause: true, interval: 10000,
  		});

  	});
</script>

</script>
</body>

</html>
