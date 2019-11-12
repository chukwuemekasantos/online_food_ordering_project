

<?php

	session_start();

	include_once 'include/sessionstart.php';

	include_once './contoller/select.php';

	include_once './contoller/insert.php';

	//functions from insert class  

	//$adminObjectForInsertClass = new insert;

	//$updateFunctionForSandD = $adminObjectForInsertClass->updateSancksAndDricksProduct();

	// $updateFunctionForSwallow = $adminObjectForInsertClass->updateSwallowProduct();

	// $updateFunctionForFastFood = $adminObjectForInsertClass->updateFastFood();



	//fuctios from select class

	$adminObject = new select;

	$SelectProductBasedOnCategorysandd = $adminObject->SelectProductOnCategorySnacksanddricks();

	$SelectProductBasedOnCategoryfastf = $adminObject->SelectProductOnCategoryFastFood();

	$SelectProductBasedOnCategorySwallow = $adminObject->SelectProductOnCategorySwallow();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Foodie:products</title>
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
<body onload="sanckanddrnksUpdate()">	
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
<div class="inner-block">
     <div class="typography">
     	<!--button-->
		<div class="grid_3 grid_4">
			<div class="page-header">
	       	<h3>Products</h3>
	      </div>  
	     <div class="bs-example">

	     	<div class="container">
				  <style type="text/css">
				  	.productitle{
				  		color: black ;
				  	}
				  </style>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs col-md-12" style="border-style: none;">
				    <li class="nav-item">
				      <a class="nav-link active productitle" data-toggle="tab" href="#home">Drinks And Snacks</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link productitle" data-toggle="tab" href="#menu1">Food/Fast Food</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link productitle" data-toggle="tab" href="#menu2">Food/Swallow</a>
				    </li>
				  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active col-md-12"><br>
      <div class="col-md-10 table-responsive">          
			  <table class="table">

				    	<?php

				    	//	if ( $updateFunctionForSandD === "successful") :

				    	?>
				    		<div class="alert alert-success alert-dismissible col-sm-6" style="display: none;">
								 <button type="button" class="close" data-dismiss="alert">&times;</button>
								    Item is updated successfully!
							</div>

				    	<?php			
				    	//	endif;

				    	?>
			    <thead style="border-style: none;">
			      <tr>
			        <td>Product Name</td>
			        <td class="col-md-1">Product Price</td>
			        <td>Product Category</td>
			        <td class="col-sm-2">Product Status</td>
			      </tr>
			    </thead>
			    <tbody>
				    <?php

				    	foreach ($SelectProductBasedOnCategorysandd as $products) :
				    	
				    ?>
				   <form method="POST" id="updatesandd">
					  <tr>
					        <td style="display: none;"><input type="text" id="pid" name="product_id" class="form-control" value="<?=$products['product_id']?>" ></td>
					        <td><input type="text"  id="pname" name="product_name" class="form-control" value="<?=$products['product_name']?>"></td>
					        <td><input type="text" id="pprice" name="product_price" class="form-control" value="<?=$products['product_price']?>"></td>
					        <td>
						        <select class="form-control" class="select" id="pcategory" name="product_category">
						        	<option value="<?=$products['product_category']?>">Snacks and Drinks</option>
						        	<option value="swallow">Food/Swallow</option>
						        	<option value="fastfood">Food/FastFood</option>
						        </select>
					    	</td>
					        <td>
					        	<select class="form-control" class="select" id="pstatus" name="product_status">
					        		<option values="
						        		<?=$products['product_status']?>"><?=$products['product_status']?>
						        	</option> 	
					        		<option values="<?php echo ($products['product_status'] == "Yes")
					        			?"No":"Yes" ?>"><?php echo ($products['product_status'] == "Yes")
					        			?"No":"Yes" ?>
						        	</option>
						        	
						        </select>
						     </td>
					        
					         <td>
					         	<button type="submit" class="btn btn-xs btn-success" name="updatesanksanddrink" id="update">Update</button>
					         </td>
					      
					      </tr>
					   	</form>
				    <?php
				    	endforeach;
				    ?>
			    </tbody>
			  </table>
			</div>
    </div>
    <div id="menu1" class="container tab-pane fade col-md-12"><br>
      <div class="col-md-10">          
			  <table class="table table-borderless" style="border-bottom-style:none;">

			  	<?php

				    		if ( $updateFunctionForFastFood === "successful") :
				    	?>

				    		<div class="alert alert-success alert-dismissible col-sm-6">
								 <button type="button" class="close" data-dismiss="alert">&times;</button>
								    Item is updated successfully!
							</div>

				    	<?php			
				    		endif;

				    	?>

			     <thead style="border-style: none;">
			      <tr>
			        <td class="col-md-1">Product Id</td>
			        <td>Product Name</td>
			        <td class="col-md-1">Product Price</td>
			        <td>Product Category</td>
			        <td class="col-sm-1">Product Status</td>
			      </tr>
			    </thead>
			    <tbody>
			       <?php

				    	foreach ($SelectProductBasedOnCategoryfastf as $products) :
				    	
				    ?>

				     <form method="POST">
					      <tr>
					        <td><input type="text" id="pid" name="product_id" class="form-control" value="<?=$products['product_id']?>"></td>
					        <td><input type="text"  id="pname" name="product_name" class="form-control" value="<?=$products['product_name']?>"></td>
					        <td><input type="text" id="pprice" name="product_price" class="form-control" value="<?=$products['product_price']?>"></td>
					        <td>
						        <select class="form-control" class="select" id="pcategory" name="product_category">
						        	<option value="<?=$products['product_category']?>">Snacks and Drinks</option>
						        	<option value="swallow">Food/Swallow</option>
						        	<option value="fastfood">Food/FastFood</option>
						        </select>
					    	</td>
					        <td>
					        	<select class="form-control" class="select" id="pstatus" name="product_status">
					        		<option values="<?=$products['product_status']?>"><?=$products['product_status']?>
						        	</option>
						        	<option values="
						        		<?=$products['product_status']?>"><?=$products['product_status']?>
						        	</option> 	
						        </select>
						     </td>
					         <td><button type="button" id="edit" class="btn btn-xs btn-primary" onclick="edit()">Edit</button></td>
					         <td><button type="button" id="cancel" class="btn btn-xs btn-danger" onclick="cancel()">Cancel</button></td>
					         <td>
					         	<button type="submit" class="btn btn-xs btn-success" name="updatefastfood">Update</button>
					         </td>
					  
					      </tr>
				      </form>
				    <?php
				    	endforeach;
				    ?>
			    </tbody>
			  </table>
			</div>
    </div>
    <div id="menu2" class="container tab-pane fade col-md-12"><br>
     <div class="col-md-10">          
			  <table class="table table-borderless" style="border-bottom-style:none;">
			  	<?php

				   if ( $updateFunctionForSwallow === "successful") :
				?>

		    		<div class="alert alert-success alert-dismissible col-sm-6">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						    Item is updated successfully!
					</div>

		    	<?php			
		    		endif;

		    	?>
			    <thead style="border-style: none;">
			      <tr>
			        <td class="col-md-1">Product Id</td>
			        <td>Product Name</td>
			        <td class="col-md-1">Product Price</td>
			        <td>Product Category</td>
			        <td class="col-sm-1">Product Status</td>
			      </tr>
			    </thead>
			    <tbody>
			      <?php

				    	foreach ($SelectProductBasedOnCategorySwallow as $products) :
				    	
				    ?>
				       <form method="POST">
					      <tr>
					        <td><input type="text" id="pid" name="product_id" class="form-control" value="<?=$products['product_id']?>"></td>
					        <td><input type="text"  id="pname" name="product_name" class="form-control" value="<?=$products['product_name']?>"></td>
					        <td><input type="text" id="pprice" name="product_price" class="form-control" value="<?=$products['product_price']?>"></td>
					        <td>
						        <select class="form-control" class="select" id="pcategory" name="product_category">
						        	<option value="<?=$products['product_category']?>">Snacks and Drinks</option>
						        	<option value="swallow">Food/Swallow</option>
						        	<option value="fastfood">Food/FastFood</option>
						        </select>
					    	</td>
					        <td>
					        	<select class="form-control" class="select" id="pstatus" name="product_status">
					        		<option values="<?=$products['product_status']?>"><?=$products['product_status']?>
						        	</option>
						        	<option values="
						        		<?=$products['product_status']?>"><?=$products['product_status']?>
						        	</option> 	
						        </select>
						     </td>
					         <td><button type="button" id="edit" class="btn btn-xs btn-primary" onclick="edit()">Edit</button></td>
					         <td><button type="button" id="cancel" class="btn btn-xs btn-danger" onclick="cancel()">Cancel</button></td>
					         <td>
					         	<button type="submit" class="btn btn-xs btn-success" name="updatesanksanddrink">Update</button>
					         </td>
					  
					      </tr>
				      </form>

				    <?php
				    	endforeach;
				    ?>
			    </tbody>
			  </table>
			</div>
    </div>
  </div>
</div>

	     


		    
	     </div>
	  </div>
  <!--buttons-->
   <div class="typo-buttons">
	<div class="page-header">
        <h3>Buttons</h3>
      </div>
      <p class="grid1">
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
      </p>
      <p class="grid1 ">
        <button type="button" class="btn btn-1 btn-default">Default</button>
        <button type="button" class="btn btn-1 btn-primary">Primary</button>
        <button type="button" class="btn btn-1 btn-success">Success</button>
        <button type="button" class="btn btn-1 btn-info">Info</button>
        <button type="button" class="btn btn-1 btn-warning">Warning</button>
        <button type="button" class="btn btn-1 btn-danger">Danger</button>
        <button type="button" class="btn btn-1 btn-link">Link</button>
      </p>
      <p class="grid1">
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
      </p>
      <p class="grid1">
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
      </p>
     </div>
      <!--//button-->
       <!--alerts-->
      <div class="typo-alerts">
	       <div class="page-header">
	        <h3>Alerts</h3>
	      </div>
	      <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
            <div class="alert alert-success alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Success! Well done its submitted. </div>
            <div class="alert alert-info alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Info! take this info. </div>
            <div class="alert alert-warning alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Warning ! Dont submit this. </div>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                Error ! Change few things. </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
            <h4 class="text-blue title-border mb-30 bars">Tab</h4>            
            <div class="horizontal-tab">
              <ul class="nav nav-tabs">
                <li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false">Tab1</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Tab2</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Tab3</a></li>
                <li class="active"><a href="#tab4" data-toggle="tab" aria-expanded="true">Tab4</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="tab1">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 1 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 2 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab3">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 3 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane active" id="tab4">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 4 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
      </div>
      <!--//alerts-->
      <!--Progress bars-->
      <div class="typo-progresses">
        <div class="page-header">
        <h3>Progress bars</h3>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
        <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
        <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
      </div>
      </div>
      <!--//Progress bars-->
      <!--well-->
      <div class="typo-wells">
         <div class="distracted">
			  <h3 class="ghj">Wells</h3>
				   <div class="well">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
				   </div>
				   <div class="well">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
				   </div>
				   <div class="well">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				   </div>
		    </div>
	</div>
    <!--well-->
    <!--bagets-->
    <div class="typo-badges">
       <div class="appearance">
			 <h3 class="ghj">Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					  <table class="table table-bordered">
						<thead>
							<tr>
								<th width="50%">Classes</th>
								<th width="50%">Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					  </table>                    
				</div>
				<div class="col-md-6">
				  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
			    </div>
			   <div class="clearfix"> </div>
			</div>
    <!--bagets-->
         </div>
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
		<!-- <script type="text/javascript" src="js/productlogic.js"></script> -->
		<script src="js/fetch.js"></script>
<!-- mother grid end here-->
		<!-- <script type="text/javascript" src="js/productlogic.js"></script> -->
</body>
</html>                			