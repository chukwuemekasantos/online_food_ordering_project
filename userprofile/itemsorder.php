

<?php

	session_start();

	include_once 'include/sessionstart.php';

	include_once './contoller/select.php';

	include_once './contoller/insert.php';

	//functions from insert class  

	$userObjectForInsertClass = new insert;

	$updateFunctionForUser = $userObjectForInsertClass->updateUserData();


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Foodie:ordered items</title>
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
        <h3>Items Ordered</h3>
      </div>
	     <table class="table">
		      <tbody>
		        <tr>
		          <td><h1 id="h1-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
		          <td class="type-info">Semibold 36px</td>
		        </tr>
		        <tr>
		          <td><h2 id="h2-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
		          <td class="type-info">Semibold 30px</td>
		        </tr>
		        <tr>
		          <td><h3 id="h3-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
		          <td class="type-info">Semibold 24px</td>
		        </tr>
		        <tr>
		          <td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
		          <td class="type-info">Semibold 18px</td>
		        </tr>
		        <tr>
		          <td><h5 id="h5-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
		          <td class="type-info">Semibold 14px</td>
		        </tr>
		        <tr>
		          <td><h6  id="h6-bootstrap-heading">h6. Bootstrap heading</h6></td>
		          <td class="type-info">Semibold 12px</td>
		        </tr>
		      </tbody>
		    </table>
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
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
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
<!-- mother grid end here-->
		<!-- <script type="text/javascript" src="js/productlogic.js"></script> -->
</body>
</html>                			