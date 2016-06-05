<?php
session_start();

include_once('../includes/article.php');
$article = new Article;

if (isset($_SESSION['logged_in'])) {
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MATRIX CMS</title>
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<header>
		<div class="center">
			<a href="../index.php"><h1>MATRIX CMS</h1></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../admin">Admin</a></li>
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
		<h1>Admin</h1>
					<ol>
						<li><a href="add.php">Add Article</a></li>
						<li><a href="delete.php">Delete Article</a></li>
						<?php
							if (isset($_SESSION['user_right'])) {
								if ($_SESSION['user_right'] == 'boby') {
						?>
						<li><a href="manage">Manage Users</a></li>
						<?php
							}}
						?>
						<li><a href="logout.php">Logout</a></li>
					</ol>
	</div>
</body>
</html>
	<?php
} else {
	if (isset($_POST['username'], $_POST['password'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		if (empty($username) or empty($password)) {
			$error = 'All fields are required!';
		} else {
			$num = $article->login($username, $password);
			$num_supreme = $article->supreme_login($username);
			if ($num_supreme == 1) {
				$_SESSION['user_right'] = $username;
			}
			if ($num == 1) {
				$_SESSION['logged_in'] = true;
				$_SESSION['user'] = $username;
				header('Location: index.php');
				exit();
			} else {
				$error = 'Incorrect username or password!';
			}
		}

	}
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MATRIX CMS</title>
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<header>
		<div class="center">
			<a href="../index.php"><h1>MATRIX CMS</h1></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../admin">Admin</a></li>
				<li><a href="index.html">Page 3</a></li>
				<li><a href="index.html">Page 4</a></li>
				<li><a href="index.html">Page 5</a></li>
			</ul>
		</div>
	</header>
	<!-- END header -->
	<div id="content">
		<h1>Login</h1>
				<?php if (isset($error)) { ?>
					<small style="color:#aa0000"><?php echo $error ?></small>
				<?php } ?>
				<form action="index.php" method="post" autocomplete="off">
					<input type="text" name="username" placeholder="username">
					<input type="password" name="password" placeholder="password">
					<input type="submit" value="Login">
				</form>
	</div>
</body>
</html>
	<?php } ?>