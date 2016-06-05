<?php 
session_start();
include_once('../../includes/article.php');
$article = new Article;
$users = $article->fetch_users();

if (isset($_SESSION['user_right'])) {
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
		<h1>Manage Users</h1>
		<ol>
			<?php foreach ($users as $user) { ?>
				<li><?php echo $user['user_name']; ?> - 
				<a href="edit.php?id=<?php echo $user['user_id']; ?>">Edit</a>
				</li>

			<?php } ?>
		</ol>
		<br>
		<a href="add.php">Add a new user</a>
	</div>
</body>
</html>
<?php } else{header('Location: ../index.php');} ?>