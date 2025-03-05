<?php
	include "UserModel.php";
	include "PostModel.php";
	$connect = new mysqli("localhost", "root", "", "oqim.net");

	
	if($_SERVER['REQUEST_METHOD'] == "GET") {

		if(isset($_GET['action']) && isset($_GET['user_token'])) {
			if($_GET['action'] == 'getuserbytoken') {
				$user = new User($connect);
				$user_token = $_GET['user_token'];
				$user = $user->getUserByToken($user_token);
				return $user;
			}
		}
		if(isset($_GET['content'])) {
			$post = new PostModel($connect);
			$all = $post->create_post($_GET['content']);
			print_r($all);
		}

		else if(isset($_GET['action'])) {
			if($_GET['action'] == 'display_all') {
				header('Content-Type: application/json');
				$post = new PostModel($connect);
				echo json_encode($post->DisplayAll());
			}
 		}
	}

	if(isset($_GET['email_name_field']) && isset($_GET['pass_field'])) {
		$input = $_GET['email_name_field'];
		$passwd = $_GET['pass_field'];
		$user = new User($connect);
		$user_found = $user->getUser($input, $passwd);
		setcookie("__user_token__ssid", "$user_found", time()+86000, "/");
	}

	if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])) {
		$token = bin2hex(random_bytes(10));
		$name = $_POST['name'];
		$passwd = $_POST['password'];
		$email = $_POST['email'];
		$user = new User($connect);
		$user->create($name, $email, $passwd, $token);
		setcookie("__user_token__ssid", "$token", time()+86000, "/");
	}
?>