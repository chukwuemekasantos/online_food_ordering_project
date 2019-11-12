<?php

session_start();

	include_once './admin/contoller/select.php';

	$adminObject = new select;


	$adminFunctionForfastfoodType = $adminObject->SelectProductOnTypeFastFood();

	$SelectProductOnTypeMeat = $adminObject->SelectProductOnTypeMeat();

	$adminFunctionForDrinksType = $adminObject->SelectProductOnTypedrinks();

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

<style type="text/css">
	select{
	color: #1e1e27 !important;
	}

	select option:hover{
		background-color: #68ae00 !important;
	}

	.btn-primary{
		background-color: #68ae00;
		border-style: none;
	}

	.btn-primary:hover{
		background-color: #000;
	}

	#meat, #drinks, #recipe {
		display: none;
	}

	input[type="number"]{
		color: black;
	}

	#messageforfastfood, #messagefordrinks, #messageformeat{
		color: darkred;
	}
</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<?php

		include_once 'header.php';

	?>

	<!-- Slider -->

	<div class="container" style="margin-top: 125px;">
		
	</div>

	<!-- Banner -->


	<div class="new_arrivals">
		<div class="container">

			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Nice Chioce</h2>
					</div>
				</div>
			</div>

				<div class="container" style="margin-top: 50px; margin-bottom: 45px;">

				  <form method="post" id="fastfoodform">

					<div class="col-8 mx-auto" id="fastfood">
					  		<label id="messageforfastfood"></label>
					
							  	<div class="row">

							  		<div class="col-md-7">
									    <div class="form-group input-field">
									    		 <select name="fastfoodselect" class="custom-select form-control " style="height: 45px;" id="selectforfastfood">  
												    <option>Select Your Fast Food</option>
												    <?php
												    	foreach ($adminFunctionForfastfoodType as $value):
												    ?>

												    <option value="<?=$value['product_name']?>"><?=$value['product_name'].' '.
												    '<strike>N</strike>'.''.$value['product_price']?></option>
												    <?php
												    	endforeach;
												    ?>
												  </select> 
									    </div>
									 </div>
										
									<div class="col-md-4" style="display: none;">
											 <div class="form-group input-field">
												<input type="number" name="quantity" class="form-control" style="height: 45px;" value="<?=$value['product_price']?>" id="fastfoodprice">
											</div>
										</div>

										<div class="col-md-4">
											 <div class="form-group input-field">
												<input type="number" name="quantity" class="form-control" style="height: 45px;" placeholder="Quantity"  min="1" max="100" id="qforfastfood">
											</div>
										</div>
										<div class="">
											 <div class="form-group input-field">
												<button  type="button" class="btn btn-primary"  class="form-control" style="height: 45px;"><i class="fa fa-plus"></i></button>
											</div>
										</div>
										
									</div>
						   
							 <button type="button" class="btn btn-primary float-left" onclick="window.location.href='index.php#cat'" style="color: white;">Previous</button>
						    <button type="button" class="btn btn-primary float-right" id="fastfoodtomeat">Next</button>

					    </div>


					  <div class="col-8 mx-auto" id="meat">
					  		<label>Meat</label>
					  		<label id="messageformeat"></label>
					
							  	<div class="row">

							  		<div class="col-md-7">
									    <div class="form-group input-field">
									    		 <select name="fastfoodandmeat" class="cufastfoodtomeat-select form-control" style="height: 45px;" id="selectformeat">  
												    <option selected id="select">Select Your Fish and Meat</option>
												    <?php
												    	foreach ($SelectProductOnTypeMeat as $value):
												    ?>

												    <option value="<?=$value['product_name']?>"><?=$value['product_name'].' '.
												    '<strike>N</strike>'.''.$value['product_price']?></option>
												    <?php
												    	endforeach;
												    ?>
												  </select> 
									    </div>
									 </div>
									
										<div class="col-md-4" style="display: none;">
											 <div class="form-group input-field">
												<input type="number" name="quantity" class="form-control" style="height: 45px;" value="<?=$value['product_price']?>"  id="priceformeat">
											</div>
										</div>

										<div class="col-md-4">
											 <div class="form-group input-field">
												<input type="number" name="quantity" class="form-control" style="height: 45px; "placeholder="Quantity" id="qformeat">
											</div>
										</div>
										<div class="">
											 <div class="form-group input-field">
												<button  type="button" class="btn btn-primary"  class="form-control" style="height: 45px;"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
						   <button type="button" class="btn btn-primary float-left" id="backtofastfood" style="color: white;">Previous</button>
						    <button type="button" class="btn btn-primary float-right"  id="meattodrinks">Next</button>
					  </div>


					  <div class="col-8 mx-auto" id="drinks">
					  		<label>drinks</label>
					  		<label id="messagefordrinks"></label>
					
							  	<div class="row">

							  		<div class="col-md-7">
									    <div class="form-group input-field">
									    		 <select name="snacksanddrinks" class="cufastfoodtomeat-select form-control" style="height: 45px;" id="selectfordrinks">  
												    <option selected id="select">Select Your Drinks</option>
												    <?php
												    	foreach ($adminFunctionForDrinksType as $value):
												    ?>

												    <option value="<?=$value['product_name']?>"><?=$value['product_name'].' '.
												    '<strike>N</strike>'.''.$value['product_price']?></option>
												    <?php
												    	endforeach;
												    ?>
												  </select> 
									    </div>
									 </div>
									
										<div class="col-md-4">
											 <div class="form-group input-field">
												<input type="number" name="quantity" class="form-control" style="height: 45px; "placeholder="Quantity" id="qfordrinks">
											</div>
										</div>
										<div class="">
											 <div class="form-group input-field">
												<button  type="button" class="btn btn-primary"  class="form-control" style="height: 45px;"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
						   <button type="button" class="btn btn-primary float-left" id="backtomeat" style="color: white;">Previous</button>
						    <button type="button" class="btn btn-primary float-right" id="drinkstorecipe">Next</button>
					  </div>

					  <div class="col-8 mx-auto" id="recipe">
					  		<label>Foodie Recipe</label><br>
							  	<div class="row">

							  		<!-- <div class="col-md-7">
									    <div class="form-group input-field">
									    	<input type="text" name="" class="form-control" id="checkforfastfood">
									    </div>
									 </div>

									 <div class="col-md-7">
									    <div class="form-group input-field">
									    	<input type="text" name="" class="form-control" id="checkforfastfoodprice">
									    </div>
									 </div>
									 -->
										
								</div>

								 <table class="table table-borderless">
								    <thead>
								      <tr>
								        <th>Item name</th>
								        <th>Item Quatity</th>
								        <th>Item Price</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td><input type="text" name="" class="form-control" id="checkforfastfood"></td>
								        <td><input type="text" name="" class="form-control" id="checkqforfastfood"></td>
								        <td><input type="text" name="" class="form-control" id="checkforfastfoodprice"></td>
								      </tr>

								       <tr>
								        <td><input type="text" name="" class="form-control" id="checkformeat"></td>
								        <td><input type="text" name="" class="form-control" id="checkqformeat"></td>
								        <td><input type="text" name="" class="form-control" id="checkformeatprice"></td>
								      </tr>
								     
								    </tbody>
								  </table>
							  <button type="button" class="btn btn-primary float-left" id="backtodrinks" style="color: white;">Previous</button>
						    <button type="button" class="btn btn-primary float-right"  >Next</button>
					  </div>
					 
			  </form>
		
		</div>
			
	</div>
</div>
		


	<br>
	<br>
	

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">FAQs</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script type="text/javascript" src="js/cus.js"></script>
<script src="js/custom.js"></script>

<script>
		
	$(document).ready(function(){

		console.log($("#selectforfastfood").val());

		$("#fastfoodtomeat").on('click',function(){
			if ($("#selectforfastfood").val() !== "Select Your Fast Food" &&  $("#qforfastfood").val() == "") {
				 document.getElementById('messageforfastfood').innerText = "please enter the Quantity!";
				 $("#messageforfastfood").fadeOut(5000);
			}else if($("#selectforfastfood").val() !== "Select Your Fast Food" && $("#qforfastfood").val() < 1){
				document.getElementById('messageforfastfood').innerText = "please enter valid Quantity!";
			}else if($("#selectforfastfood").val() == "Select Your Fast Food" && $("#qforfastfood").val() > 0){
				document.getElementById('messageforfastfood').innerText = "please Select Your Fast Food!";
			}
			else{
				$("#recipe").hide();
				$("#fastfood").hide();
				$("#drinks").hide();
				$("#meat").show();
			}
		});
		
		$("#backtofastfood").click(function(){

				$("#fastfood").show();
				$("#meat").hide();
				$("#drinks").hide();
				$("#recipe").hide();
		})	

		$("#meattodrinks").click(function(){

			if ($("#selectformeat").val() !== "Select Your Fish and Meat" &&  $("#qformeat").val() == "") {
				 document.getElementById('messageformeat').innerText = "please enter the Quantity!";
			}else if($("#selectformeat").val() !== "Select Your Fish and Meat" && $("#qformeat").val() < 1){
				document.getElementById('messageformeat').innerText = "please enter valid Quantity!";
			}else if($("#selectformeat").val() == "Select Your Fish and Meat" && $("#qformeat").val() > 0){
				document.getElementById('messageformeat').innerText = "please Select Your Meat or Fish!";
			}else{
				$("#fastfood").hide();
				$("#meat").hide();
				$("#drinks").show();
				$("#recipe").hide();
			}

		})	

		$("#backtomeat").click(function(){

				$("#fastfood").hide();
				$("#meat").show();
				$("#drinks").hide();
				$("#recipe").hide();


		})	

		$("#drinkstorecipe").on('click',function(){
			if ($("#selectfordrinks").val() !== "Select Your Drinks" &&  $("#qfordrinks").val() == "") {
				 document.getElementById('messagefordrinks').innerText = "please enter the Quantity!";
			}else if($("#selectfordrinks").val() !== "Select Your Drinks" && $("#qfordrinks").val() < 1){
				document.getElementById('messagefordrinks').innerText = "please enter valid Quantity!";
			}else if($("#selectfordrinks").val() == "Select Your Drinks" && $("#qfordrinks").val() > 0){
				document.getElementById('messagefordrinks').innerText = "please select your Snacks!";
			}else{
				$("#fastfood").hide();
				$("#meat").hide();
				$("#drinks").hide();
				$("#recipe").show();

				document.getElementById("checkforfastfood").value = $("#selectforfastfood").val();
				document.getElementById("checkforfastfoodprice").value = $("#qforfastfood").val() * $("#fastfoodprice").val();
				document.getElementById("checkqforfastfood").value = $("#qforfastfood").val();
			
				document.getElementById("checkformeat").value = $("#selectformeat").val();
				document.getElementById("checkformeatprice").value = $("#priceformeat").val() * $("#qformeat").val();
				document.getElementById("checkqformeat").value = $("#qformeat").value();

			}
		})


		$("#backtodrinks").on('click',function(){

				$("#fastfood").hide();
				$("#meat").hide();
				$("#drinks").show();
				$("#recipe").hide();
		});

	});
</script>
<!-- <script src="js/fetch.js"></script> -->
</body>

</html>
