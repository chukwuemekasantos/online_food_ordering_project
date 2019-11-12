
<?php

include_once 'db.php';

class insert extends dbconnect
{


	public function input_validation($input)
	{
		return htmlentities(htmlspecialchars(stripcslashes(trim($input))));
	}
	
	public function registerNewUser()
	{

		if (isset($_POST['register'])) {
			 $name = $this->input_validation($_POST['name']);
			 $phone = $this->input_validation($_POST['phone']);
			 $email = $this->input_validation($_POST['email']);
			 $pass = $this->input_validation($_POST['password']);
			  $newpass = password_hash($pass , PASSWORD_DEFAULT);
			  $queryForSelect = "SELECT 1 FROM reg_users WHERE email = :email";
			  $sqlForSelect = $this->conn->prepare($queryForSelect);
			  $sqlForSelect->execute([':email' => $email ]);

			 
			  if ($sqlForSelect->fetchColumn()) {
			  	return "userfound";
			  }else{
			  	$query = "INSERT INTO reg_users(full_name,email,password,phone) VALUES(:full_name,:email,:password,:phone)";
				 $sql = $this->conn->prepare($query);
				 $feedback = $sql->execute([':full_name' => $name, ':email' => $email, ':password' => $newpass, ':phone' => $phone]);
				 if ( $feedback) {
				 	return 'success';
				 }else{
				 	return 'nope';
				 }

			  }
			 
			}
	}


	public function addProduct(){
		
		if (isset($_POST['add'])) {
			$fname = $_POST['fname'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$status = "Yes";
			 $queryForSelect = "SELECT 1 FROM admin_add_product WHERE full_name = :full_name AND product_category = :product_category";
			  $sqlForSelect = $this->conn->prepare($queryForSelect);
			  $sqlForSelect->execute([':full_name' => $fname, ':product_category' => $email ]);
			  if ($sqlForSelect->fetchColumn()) {
			  	return "productexit";
			  }else{
			  	$query = "INSERT INTO admin_add_product(full_name,product_category,product_price,product_status) VALUES(:full_name,:product_category,:product_price,:product_status)";
				 $sql = $this->conn->prepare($query);
				 $feedback = $sql->execute([':full_name' => $fname, ':product_category' => $email, ':product_price' => $password, ':product_status' => $status]);
				 if ( $feedback) {
				 	return 'success';
				 }else{
				 	return 'nope';
				 }
			  }
		}


	}

	public function updateUserData($user_id,$fname,$email,$password,$phone)
	{
			

				$newpass = password_hash($password , PASSWORD_DEFAULT);
				
				$sql = "UPDATE reg_users SET full_name = :fname, email = :email 
				,password = :password, phone = :phone WHERE user_id = '$user_id'";
				$query = $this->conn->prepare($sql);
				$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $newpass, ':phone' => $phone]);
				if ($res) {
				  $queryForSelect = "SELECT * FROM reg_users WHERE user_id = :user_id";
				  $sqlForSelect = $this->conn->prepare($queryForSelect);
				  $sqlForSelect->execute([':user_id' => $user_id]);
				  $updateRes = $sqlForSelect->fetch();
				  $_SESSION['data'] = $updateRes;
				  return "successful";
			}

	}


	public function updateFastFood()
	{
		if (isset($_POST['updatefastfood'])) {
			$productid = $_POST['product_id'];
			$fname = $_POST['full_name'];
			$password = $_POST['product_price'];
			$email = $_POST['product_category'];
			$phone = $_POST['product_status'];
			
			$sql = "UPDATE admin_add_product SET full_name = :fname, product_category = :email 
			,product_price = :password, product_status = :phone WHERE product_id = '$productid'";
			$query = $this->conn->prepare($sql);
			$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $password, ':phone' => $phone]);
			if ($res) {
				return 'successful';
			}
		}
	}


	public function updateSwallowProduct()
	{
		if (isset($_POST['updateswallow'])) {
			$productid = $_POST['product_id'];
			$fname = $_POST['full_name'];
			$password = $_POST['product_price'];
			$email = $_POST['product_category'];
			$phone = $_POST['product_status'];
			
			$sql = "UPDATE admin_add_product SET full_name = :fname, product_category = :email 
			,product_price = :password, product_status = :phone WHERE product_id = '$productid'";
			$query = $this->conn->prepare($sql);
			$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $password, ':phone' => $phone]);
			if ($res) {
				return 'successful';
			}
		}
	}

}


?>