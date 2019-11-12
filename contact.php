
<?php

	session_start();

	include_once './admin/contoller/insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<style type="text/css">
	.account{
		background-color: #ffffff;
		padding-bottom: 40px;
	}
</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<?php

		include_once 'header.php';

	?>

	<div class="container contact_container" id="">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Map Container -->

		<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Contact Us</h1>
					<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
					<div>
						<p>(800) 686-6688</p>
						<p>info.deercreative@gmail.com</p>
					</div>
					<div>
						<p>mm</p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Mon-Fri</p>
						<p>Sunday: Closed</p>
					</div>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Follow Us</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Get In Touch With Us!</h1>
					<p>Fill out the form below to recieve a free and confidential.</p>
					<form method="POST" id="usermessage">
						<div>
							<div class="alert alert-success alert-dismissible col-sm-12" style="display: none;" id="usermessagesuccess">
								 <button type="button" class="close" data-dismiss="alert">&times;</button>
								    Message is sent successfully!
							</div>
							<?php 

								if (isset($_SESSION['data']['user_id'])):
								
							?>
							<input id="input_name" class="form_input input_name input_ph" type="number" name="id" style="display: none;" value="<?=$_SESSION['data']['user_id']?>">
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required." value="<?=$_SESSION['data']['full_name']?>" readonly>
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required." value="<?=$_SESSION['data']['email']?>" readonly>
							<input id="input_website" class="form_input input_website input_ph" type="tel" name="phone" placeholder="Phone" required="required" data-error="Phone is required." value="<?=$_SESSION['data']['phone'] ?>" readonly>
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
						<?php
							endif;
						?>
						<?php
							if (isset($_SESSION['data']['user_id'])) :
						?>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit" onclick="userMessage()"><?="send message"?></button>

						<?php
							else:

						?>
							<i style="color: #fb4343;"><?="Please Login to send Message"?></i>

						<?php
							endif;

						?>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		
	</div>

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
<script type="text/javascript" src="./admin/js/fetch.js"></script>
</body>

</html>
