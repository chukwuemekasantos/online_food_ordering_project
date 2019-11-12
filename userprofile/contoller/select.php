<?php
include_once 'db.php';

class select extends dbconnect
{
	
	public function loginUsers()
	{
		if (isset($_POST['login'])) {
			$email  = $_POST['email'];
			$pass = $_POST['password'];
			$query = "SELECT * FROM reg_users WHERE email = :email"; 
			$sql = $this->conn->prepare($query);
			$sql->execute([':email' => $email ]);
			$res = $sql->fetch();
			if ($email  == $res['email'] AND password_verify($pass,$res['password'])) {
				//$_SESSION['username'] = $res['username'];
				$_SESSION['data'] = $res;
				 header('location:index.php');
			}else{
				return "invaliduser";
			}
		}
	}


	public function SelectProductOnCategorySnacksanddricks()
	{
		$productCategory = "snacksanddricks";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory]);
		$res = $sql->fetchAll();
		return $res;
	}

	public function SelectProductOnCategoryFastFood()
	{
		$productCategory = "fastfood";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory]);
		$res = $sql->fetchAll();
		return $res;
	}


	public function SelectProductOnCategorySwallow()
	{
		$productCategory = "swallow";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory]);
		$res = $sql->fetchAll();
		return $res;
	}
}





?>