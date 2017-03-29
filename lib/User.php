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
		$priPass 	= $data['password'];
		$password 	= md5($priPass);

		if ($name == "" || $user == "" || $email == "" || $password = "") {
			
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

		if (strlen($priPass) < 4) {
			$msg = "<div class=\"alert alert-danger\"><strong>Error . . .</strong> Password too short</div>";
			return $msg;
		}
	}
}
 ?>