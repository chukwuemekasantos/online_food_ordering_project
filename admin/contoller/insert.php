
<?php

include_once 'db.php';

class insert extends dbconnect
{
	
	public function insertNewAdmin()
	{

		if (isset($_POST['register'])) {
			 $name = $_POST['name'];
			 $admin_phone = $_POST['phone'];
			 $admin_email = $_POST['email'];
			 $pass = $_POST['password'];
			  $newpass = password_hash($pass , PASSWORD_DEFAULT);
			  $queryForSelect = "SELECT 1 FROM admin_reg WHERE admin_email = :admin_email";
			  $sqlForSelect = $this->conn->prepare($queryForSelect);
			  $sqlForSelect->execute([':admin_email' => $admin_email ]);
			  if ($sqlForSelect->fetchColumn()) {
			  	return "userfound";
			  }else{
			  	$query = "INSERT INTO admin_reg(admin_name,admin_email,admin_password,admin_phone) VALUES(:admin_name,:admin_email,:admin_password,:admin_phone)";
				 $sql = $this->conn->prepare($query);
				 $feedback = $sql->execute([':admin_name' => $name, ':admin_email' => $admin_email, ':admin_password' => $newpass, ':admin_phone' => $admin_phone]);
				 if ( $feedback) {
				 	return 'success';
				 }else{
				 	return 'nope';
				 }

			  }
			 
			}
		}


	public function addProduct($productname,$productprice,$productcategory,$producttype,$status)
	{
		
		//if (isset($_POST['add'])) {
			
			 $queryForSelect = "SELECT 1 FROM admin_add_product WHERE product_name = :product_name AND product_category = :product_category";
			  $sqlForSelect = $this->conn->prepare($queryForSelect);
			  $sqlForSelect->execute([':product_name' => $productname, ':product_category' => $productcategory ]);
			  if ($sqlForSelect->fetchColumn()) {
			  	return "productexit";
			  }else{
			  	$query = "INSERT INTO admin_add_product(product_name,product_category,product_type,product_price,product_status) VALUES(:product_name,:product_category,:product_type,:product_price,:product_status)";
				 $sql = $this->conn->prepare($query);
				 $feedback = $sql->execute([':product_name' => $productname, ':product_category' => $productcategory, ':product_type' => $producttype, ':product_price' => $productprice, ':product_status' => $status]);
				 if ( $feedback) {
				 	return 'success';
				 }else{
				 	return 'nope';
				 }
			  }
		//}
	}

	public function updateSancksAndDricksProduct($productid,$productname,$productprice,$productcategory,$productstatus)
	{
		//if (isset($_POST['updatesanksanddrink'])) {
			
			$sql = "UPDATE admin_add_product SET product_name = :productname, product_category = :productcategory 
			,product_price = :productprice, product_status = :productstatus WHERE product_id = '$productid'";
			$query = $this->conn->prepare($sql);
			$res = $query->execute([':productname' => $productname, ':productcategory' => $productcategory, ':productprice' => $productprice, ':productstatus' => $productstatus]);
			if ($res) {
				return 'successful';
			}
		//}
	}


	public function updateFastFood()
	{
		if (isset($_POST['updatefastfood'])) {
			$productid = $_POST['product_id'];
			$productname = $_POST['product_name'];
			$productprice = $_POST['product_price'];
			$productcategory = $_POST['product_category'];
			$productstatus = $_POST['product_status'];
			
			$sql = "UPDATE admin_add_product SET product_name = :productname, product_category = :productcategory 
			,product_price = :productprice, product_status = :productstatus WHERE product_id = '$productid'";
			$query = $this->conn->prepare($sql);
			$res = $query->execute([':productname' => $productname, ':productcategory' => $productcategory, ':productprice' => $productprice, ':productstatus' => $productstatus]);
			if ($res) {
				return 'successful';
			}
		}
	}


	public function updateSwallowProduct()
	{
		if (isset($_POST['updateswallow'])) {
			$productid = $_POST['product_id'];
			$productname = $_POST['product_name'];
			$productprice = $_POST['product_price'];
			$productcategory = $_POST['product_category'];
			$productstatus = $_POST['product_status'];
			
			$sql = "UPDATE admin_add_product SET product_name = :productname, product_category = :productcategory 
			,product_price = :productprice, product_status = :productstatus WHERE product_id = '$productid'";
			$query = $this->conn->prepare($sql);
			$res = $query->execute([':productname' => $productname, ':productcategory' => $productcategory, ':productprice' => $productprice, ':productstatus' => $productstatus]);
			if ($res) {
				return 'successful';
			}
		}
	}


	public function usersMessageForAdmin($id,$name,$email,$phone,$message){

		$query = "INSERT INTO user_message(users_name,users_email,users_phone,users_message,users_id) VALUES(:users_name,:users_email,:users_phone,:users_message,:users_id)";
				 $sql = $this->conn->prepare($query);
				 $feedback = $sql->execute([':users_name' => $name, ':users_email' => $email, ':users_phone' => $phone, ':users_message' => $message, ':users_id' => $id]);
				 if ( $feedback) {
				 	return 'sent';
				 }else{
				 	return 'nope';
				 }

	}


	 public function updateAdminData($fname,$email,$password,$phone)
	{

				 $admin_id = $_SESSION['data']['admin_id'];
				// $fname = $_POST['name'];
				// $email = $_POST['email'];
				// $password = $_POST['password'];
				 $newpass = password_hash($password, PASSWORD_DEFAULT);
				// $phone = $_POST['phone'];
				
				$sql = "UPDATE admin_reg SET admin_name = :fname, admin_email = :email 
				,admin_password = :password, admin_phone = :phone WHERE admin_id = '$admin_id'";
				$query = $this->conn->prepare($sql);
				$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $newpass, ':phone' => $phone]);
				if ($res) {
				  $queryForSelect = "SELECT * FROM admin_reg WHERE admin_id = :admin_id";
				  $sqlForSelect = $this->conn->prepare($queryForSelect);
				  $sqlForSelect->execute([':admin_id' => $admin_id]);
				  $updateRes = $sqlForSelect->fetch();
				  $_SESSION['data'] = $updateRes;
				  return "successful";
			}

	}

}


?>