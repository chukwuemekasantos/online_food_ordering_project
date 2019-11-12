

<?php

	session_start();

	include_once 'include/sessionstart.php';

	include_once './contoller/select.php';

	include_once './contoller/insert.php';

	//functions from insert class  

	// $userObjectForInsertClass = new insert;

	// $updateFunctionForUser = $userObjectForInsertClass->updateUserData();


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Foodie:profile</title>
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
<!--//skycons-icons-->

<style type="text/css">
	
	input[type="text"] {
		border-style: none;
	}

	.select {
		border-style: none;
	}
	select{
		border-style: none;
	}
	#reset{
		display: none;
	}
	#message{
		display: none;
	}
</style>
</head>
<body>	
<?php

	include_once 'header.php';

?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

<style type="text/css">
	 #name, #email, #pass, #phone{
		height: 40px;
		border:1px solid;
		border-color: #cccccc !important;
		
	} 

	.btn-success{
		background-color: #68ae00;
	}   
	.btn-success:hover{
		background-color: #000;
	}  	
</style>
<div class="inner-block">
     <div class="typography">
     	<!--button-->
  <!--buttons-->
   <div class="typo-buttons">
	<div class="page-header">
        <h3>Profile Settings</h3>
      </div>
	      

				<div class="alert alert-success alert-dismissible col-sm-12" id="message">
					 <button type="button" class="close" data-dismiss="alert">&times;</button>
					    Updated successfully!
				</div>

			
       <form method="POST" id="userDataUpdate">
			 
			  <div class="form-group">
			    <label for="email">Full Name:</label>
			    <input type="text" class="form-control" id="name" name="full_name" value="<?=$_SESSION['data']['full_name']?>">
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" name="email" value="<?=$_SESSION['data']['email']?>">
			  </div>
			  <div class="form-group">
			    <label for="pass">Password:</label>
			    <input type="password" class="form-control" name="password" id="pass">
			  </div>
			  <div class="form-group">
			    <label for="phone">Phone:</label>
			    <input type="tel" class="form-control" id="phone" name="phone" value="<?=$_SESSION['data']['phone']?>">
			  </div>
			  
			  <button type="submit" class="btn btn-success form-control" name="update" onclick="updateUserData()">Update</button>
		</form> 
     
     </div>
      <!--//button-->
       <!--alerts-->
      <div class="typo-alerts">
	     
          <div class="clearfix"> </div>
      </div>
      <!--//alerts-->
      <!--Progress bars-->
      
      <!--//Progress bars-->
      <!--well-->
     
    <!--well-->
    <!--bagets-->
    
     </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php

include_once 'footer.php';

?>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
   
   <?php

   	include_once 'sidebar.php';

   ?>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
		<script src="js/bootstrap.js"> </script>
		<script type="text/javascript" src="js/fetch.js"></script>
<!-- mother grid end here-->
		<!-- <script type="text/javascript" src="js/productlogic.js"></script> -->
</body>
</html>                			