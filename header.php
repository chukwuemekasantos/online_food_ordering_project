<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<marquee>Welcome To Foodie, Home of Delicious Food</marquee>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#" onclick="window.location.href='index.php'">Foo<span style="color: #68ae00;">die</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#" onclick="window.location.href='index.php'">home</a></li>
								<li><a href="index.php#aboutsection">About Us</a></li>
								<li><a href="contact.php#contact_container">contact</a></li>
								<li><a href="#">Clients</a></li>
								<li class="account">

									<?php

										if (!isset($_SESSION['data'])):
											# code...
										
									?>
									<a href="#">
										<?="My Account
										<i class='fa fa-angle-down'></i>"?>
									</a>
									<ul class="account_selection">
										<li><a href="./userprofile/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="./userprofile/signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>

									<?php
										else:
									?>
										<a href="#" style="color: #fc8213;" onclick="window.location.href='./userprofile/index.php'">
										<?="Hello".' '.$_SESSION['data']['full_name']?>
										</a>	

									<?php
										endif;
									?>
								</li>
								
							</ul>
							
							<div class="hamburger_container" onclick="show()">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item has-children">
					<?php

						if (!isset($_SESSION['data'])):
							# code...
						
					?>
					<a href="#">
						<?="My Account
						<i class='fa fa-angle-down'></i>"?>
					</a>
					<ul class="menu_selection">
						<li><a href="#" onclick="window.location.href='./userprofile/login.php'"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#" onclick="window.location.href='./userprofile/signup.php'"><i class="fa fa-user-plus" aria-hidden="true" ></i>Register</a></li>
					</ul>
					<?php
						else:
					?>
						<a href="#" style="color: #fc8213;" onclick="window.location.href='./userprofile/index.php'">
						<?="Hello".' '.$_SESSION['data']['full_name']?>
						</a>	

					<?php
						endif;
					?>
				</li>
				<li class="menu_item"><a href="index.php#main_slider" onclick="hide()">home</a></li>
				<li class="menu_item"><a href="index.php#aboutsection" onclick="hide()">about us</a></li>
				<li class="menu_item"><a href="#" onclick="window.location.href='contact.php'">contact</a></li>
				<li class="menu_item"><a href="index.php#clients" onclick="hide()">clients</a></li>
			</ul>
		</div>
	</div>


	