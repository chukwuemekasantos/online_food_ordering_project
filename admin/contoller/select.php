
<?php
include_once 'db.php';

class select extends dbconnect
{
	
	public function selectAdminCredentials()
	{
		if (isset($_POST['login'])) {
			$email  = $_POST['email'];
			$pass = $_POST['password'];
			$query = "SELECT * FROM admin_reg WHERE admin_email = :admin_email"; 
			$sql = $this->conn->prepare($query);
			$sql->execute([':admin_email' => $email ]);
			$res = $sql->fetch();
			if ($email  == $res['admin_email'] AND password_verify($pass,$res['admin_password'])) {
				//$_SESSION['username'] = $res['username'];
				$_SESSION['data'] = $res;
				 header('location:index.php');
			}else{
				return "invaliduser";
			}
		}
	}


	// select statement for users to order food

	public function SelectProductOnCategorySnacksanddricks()
	{
		$productCategory = "snacksanddricks";
		$type = "snacks";
		$status = "Yes";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory AND product_type = :product_type AND product_status = :product_status";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory, ':product_type' => $type, ':product_status' => $status]);
		$res = $sql->fetchAll();
		return $res;
	}

	public function SelectProductOnTypedrinks()
	{
		$productCategory = "snacksanddricks";
		$type = "drinks";
		$status = "Yes";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory AND product_type = :product_type AND product_status = :product_status";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory, ':product_type' => $type, ':product_status' => $status]);
		$res = $sql->fetchAll();
		return $res;
	}


	public function SelectProductOnTypeSwallow()
	{
		$productCategory = "swallow";
		$type = "swallow";
		$status = "Yes";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory AND product_type = :product_type AND product_status = :product_status";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory, ':product_type' => $type, ':product_status' => $status]);
		$res = $sql->fetchAll();
		return $res;
	}

	public function SelectProductOnTypeFastFood()
	{
		$productCategory = "fastfood";
		$type = "fastfood";
		$status = "Yes";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory AND product_type = :product_type AND product_status = :product_status";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory, ':product_type' => $type, ':product_status' => $status]);
		$res = $sql->fetchAll();
		return $res;
	}


	public function SelectProductOnTypeMeat()
	{
		$productCategory = "swallow";
		$type = "Meat";
		$status = "Yes";
		$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory AND product_type = :product_type AND product_status = :product_status";
		$sql = $this->conn->prepare($query);
		$sql->execute([':productCategory' => $productCategory, ':product_type' => $type, ':product_status' => $status]);
		$res = $sql->fetchAll();
		return $res;
	}

//end of select statement



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

	public function usersMessage()
	{

		$query = $this->conn->query("SELECT * FROM  user_message")->fetchAll();
		return $query;
	}

	public function countRegisterdUsers()
	{
		$count = $this->conn->query("SELECT count(*) FROM  reg_users")->fetchAll();
		return $count;
	}

	public function countUsersMessage()
	{
		$count = $this->conn->query("SELECT count(*) FROM  user_message")->fetchAll();
		return $count;
	}
}





?>