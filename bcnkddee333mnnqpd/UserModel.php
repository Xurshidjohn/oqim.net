<?php

	class User {
		private $db;
		public function __construct($pdo)
		{
			$this->db = $pdo;
		}

		public function create($name, $email, $password, $token)
		{
			$user = $this->db->query("INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_pass`, `user_token`, `joined_at`) VALUES (NULL,'$name','$email','$password', '$token',NULL);");
			return $user;
		}

		public function getUserByToken($token) {
			$result=$this->db->query("SELECT * FROM `users` WHERE `user_token` = '$token'");
			$result = mysqli_fetch_assoc($result);
			echo json_encode($result);
		}

		public function getUser($input, $passwd)
		{
			$stmt = $this->db->prepare("SELECT * FROM `users` WHERE `user_email` = ? AND `user_pass` = ?");
			$stmt->bind_param("ss", $input, $passwd);
			$stmt->execute();
			$result = $stmt->get_result();
			$result = $result->fetch_assoc();
			echo "<script>console.log($result)</script>";
			if($result) {
				return $result["user_token"];
			} 
		}
	}
	
?>