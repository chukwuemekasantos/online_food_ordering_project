
<?php
	
	session_start();
	
	include_once './contoller/select.php';

	include_once './contoller/insert.php';


	//functions from insert class  



	// $page = $_REQUEST['_page'];

	// switch ($page) {
	// 	case 'profile':

	// 		 	//$admin_id = $_SESSION['data']['admin_id'];
	// 			$fname = $_POST['name'];
	// 			$email = $_POST['email'];
	// 			$password = $_POST['password'];
	// 			//$newpass = password_hash($password, PASSWORD_DEFAULT);
	// 			$phone = $_POST['phone'];

	// 			$userObjectForInsertClass = new insert;

	// 			$updateFunctionForAdmin = $userObjectForInsertClass->updateAdminData($fname,$email,$password,$phone);
				
	// 			if ($updateFunctionForAdmin === "successful")
	// 			 {
		
	// 				echo json_encode("yes".' '. $_POST['name']);
	// 			}

	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	$page = $_REQUEST['page'];

	switch ($page) {
		case 'profile':
			

			if (isset($_POST['email'])) {
		
					// $admin_id = $_SESSION['data']['admin_id'];
					 $fname = $_POST['name'];
					 $email = $_POST['email'];
					 $password = $_POST['password'];
					 $phone = $_POST['phone'];
					 $email = $_POST['email'];
					 $password = $_POST['password'];
					 

					$userObjectForInsertClass = new insert;

					$updateFunctionForAdmin = $userObjectForInsertClass->updateAdminData($fname,$email,$password,$phone,$password);
					
					if ($updateFunctionForAdmin === "successful")
					 {
			
						echo json_encode("yes".' '. $fname.' '.$email);
					}
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

				$updateSnacks = $adminObject->updateSancksAndDricksProduct($productid,$productname,$productprice,$productcategory,$productstatus);
				if ($updateSnacks == "successful") {
					echo json_encode("updated");
				}
			}


		break;

		case 'usermessage':
			if (isset($_POST['name'])) {
				$id = $_POST["id"];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$message = $_POST['message'];

				$adminObject = new insert;

				$usersMessage = $adminObject->usersMessageForAdmin($id,$name,$email,$phone,$message);

					echo json_encode($usersMessage);
			}
			break;
		default:
			# code...
			break;
	}


	
















?>