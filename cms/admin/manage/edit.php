
<?php

session_start();

include_once('../../includes/article.php');
$article = new Article;

if (isset($_SESSION['user_right'], $_GET['id'])) {
	$id = $_GET['id'];
	 if (isset($_POST['username'], $_POST['password'])) {
	 	$username = $_POST['username'];
	 	$password = $_POST['username'];
	 	$user_right = $_POST['user_right'];
	 		$article->update_user($username, $password, $user_right, $id);
	 }

	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MATRIX CMS</title>
	<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
	<header>
		<div class="center">
			<a href="../../index.php"><h1>MATRIX CMS</h1></a>
			<ul>
				<li><a href="../../index.php">Home</a></li>
				<li><a href="../../admin">Admin</a></li>
				<li><a href="index.html">Page 3</a></li>
				<li><a href="index.html">Page 4</a></li>
				<li><a href="index.html">Page 5</a></li>
			</ul>
		</div>
	</header>
	<!-- END header -->
		<div id="user">
			<?php if (isset($_SESSION['user'])) {
				echo "Welcome ".$_SESSION['user'];
			} ?>
		</div>
	<div id="content">
		<h1>Edit user</h1>
		<form action="edit.php" method="post">
			<input type="text" name="username" placeholder="Change Username">
			<br><input type="password" name="password" placeholder="Change Password">
			<br><input type="checkbox" name="user_right" value="supreme">Supreme user
			<input type="submit" value="Change Article">
		</form>
		<br><br><a href="index.php">&larr; Back</a>
	</div>
</body>
</html>
	<?php
} else {
	header('Location: index.php');
}
?>