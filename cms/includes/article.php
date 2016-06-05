<?php
class Article {

	private $host = 'localhost';
	private $db = 'cms';
	private $user = 'root';
	private $password = 'boby';
	private $pdo;

	public function __construct() {
		try {
			$this->pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->password);
		} catch (PDOException $e) {
			echo 'Connection failed '.$e->getMessage();
		}
	}
	public function fetch_all() {
		$pdo = $this->pdo;

		$query = $pdo->prepare("SELECT * FROM articles");
		$query->execute();

		return $query->fetchAll();
	}
	public function fetch_data($article_id) {
		$pdo = $this->pdo;

		$query = $pdo->prepare("SELECT * FROM articles WHERE article_id = ?");
		$query->bindValue(1, $article_id);
		$query->execute();

		return $query->fetch();
	}
	public function fetch_users() {
		$pdo = $this->pdo;

		$query = $pdo->prepare("SELECT * FROM users");
		$query->execute();

		return $query->fetchAll();
	}
	public function login($username, $password) {
		$pdo = $this->pdo;

        $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
		$query->execute();

		return $query->rowCount();
	}
	public function update_user($id, $username, $password, $user_right) {
		$pdo = $this->pdo;
		$qwery = $pdo->prepare('UPDATE users SET user_name = ?, user_password = ?, user_right = ? WHERE user_id = ?');
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
		$query->bindValue(3, $user_right);
		$query->bindValue(4, $id);
		$query->execute();

		return true;
	}
	public function supreme_login($right) {
		$pdo = $this->pdo;
		$query = $pdo->prepare("SELECT * FROM users WHERE user_name = ?");
		$query->bindValue(1, $right);
		$query->execute();
		
		return $query->rowCount();
	}
	public function add_data($title, $content, $time) {
		$pdo = $this->pdo;
		$time = time();
		
		$query = $pdo->prepare("INSERT INTO articles (article_title, article_content, article_timestamp) VALUES(?, ?, ?)");
		$query->bindValue(1, $title);
		$query->bindValue(2, $content);	
		$query->bindValue(3, $time);
 		$query->execute();

		return true;
	}
	public function delete_data($id) {
		$pdo = $this->pdo;

		$query = $pdo->prepare("DELETE FROM articles WHERE article_id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		return true;
	}

}
