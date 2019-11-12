
<?php
	
	session_start();
	
	include_once './contoller/select.php';

	include_once './contoller/insert.php';



	
	$page = $_REQUEST['page'];

	switch ($page) {
		case 'updateUsers':
			

			if (isset($_POST['full_name'])) {
		
					 $user_id = $_SESSION['data']['user_id'];
					$fname = $_POST['full_name'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$phone = $_POST['phone'];

					$userObjectForInsertClass = new insert;

					$registeredUsers = $userObjectForInsertClass->updateUserData($user_id,$fname,$email,$password,$phone);
					
					if ($registeredUsers == 'successful') {
						echo json_encode("updated");
					}
					// if ($registeredUsers == "success")
					//  {
			
					// 	echo json_encode("yes".' '. $name.' '.$email);
					// }
			}
			break;
		
		case 'addfooditem':
			
				
				if (isset($_POST['productname'])) {

				$productname = $_POST['productname'];
				$productprice = $_POST['productprice'];
				$productcategory = $_POST['productcategory'];
				$producttype = $_POST['producttype'];
				$status = "Yes";

				$adminObject = new insert;

				$adminAddItem = $adminObject->addProduct($productname,$productprice,$productcategory,$producttype,$status);

				if ($adminAddItem == "success") :
						echo json_encode('added');
						exit();
				elseif ($adminAddItem == "productexit") :
					echo json_encode('exit');
					exit();
				else:
				endif;

				}

			break;

		case 'updatesnacksanddrinks':

			if (isset($_POST['product_name'])) {
				$productid = $_POST['product_id'];
				$productname = $_POST['product_name'];
				$productprice = $_POST['product_price'];
				$productcategory = $_POST['product_category'];
				$productstatus = $_POST['product_status'];

				$adminObject = new insert;

				$adminAddItem = $adminObject->updateSancksAndDricksProduct($productid,$productname,$productprice,$productcategory,$productstatus);
				if ($adminAddItem == "successful") {
					echo json_encode("updated");
				}
			}


		break;

		default:
			# code...
			break;
	}


	
















?>