<?php 
include "Database.php";


class User{
	private $db;
	
	public function __construct()
	{
		$this->db = new Database();
	}


	public function userRegister($data){
		$name 		= $data['name'];
		$user 		= $data['user'];
		$email		= $data['email'];
		$pri_pass 	= $data['password'];
		$password 	= md5($pri_pass);


		$check_email= $this->checkEmail($email);



		if ($name == "" || $user == "" || $email == "" || $password == "") {
			
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> Feald most not be empty</div>";
			return $msg;
		}


		if (strlen($user) < 3) {
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> Username too short</div>";
			return $msg;
		}elseif (preg_match('/[^a-z0-9_-]+/i', $user)) {
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> Username Only Contain alphanumeric dash and underscore</div>";
			return $msg;
		}


		if ($check_email == true) {
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> This Email is already exiest</div>";
			return $msg;
		}
		if (strlen($pri_pass) < 4) {
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> Password is Too Short</div>";
			return $msg;
		}




		$sql = "INSERT INTO user_tbl(name, user, email, password) VALUES(:name, :user, :email, :password)";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':user', $user);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$result = $query->execute();
		if ($result) {
			$msg ="<div class=\"alert alert-success\"><strong>Success . . !!</strong> Registation Done</div>";
			return $msg;
		}

	}

	public function checkEmail($email){
		$sql  = "SELECT * FROM user_tbl WHERE email = :email";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email', $email);
		$query->execute();

		if ($query->rowCount() > 0) {
			return true;
		}else{
			return false;
		}

	}


}
 ?>