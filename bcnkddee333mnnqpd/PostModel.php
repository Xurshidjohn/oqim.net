<?php

	
	class PostModel {
		private $db;

		public function __construct($pdo) {
			$this->db = $pdo;
		}

		public function DisplayAll() {
			$sql = "SELECT * FROM shortposts ORDER BY (post_like * 0.7 + TIMESTAMPDIFF(HOUR, created_at, NOW()) * -0.3) DESC LIMIT 10;";
			$result = $this->db->query($sql);
			while($row = mysqli_fetch_assoc($result)) {
				$data[] = $row;
			}
			return $data;
		}

		public function create_post($content)
		{
			$user_token=$_COOKIE['__user_token__ssid'];
			$content = strip_tags($content, "<b><i>");
			$post_token=bin2hex(random_bytes(12));
			if($content != "" && $content != ".") {
				$stmt = $this->db->prepare("INSERT INTO `shortposts`(`post_content`, `author_token`, `post_token`) VALUES (?, ?, ?)");
				$stmt->bind_param("sss", $content, $user_token, $post_token);
				$stmt->execute();
			}
		}

	}

?>