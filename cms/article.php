<?php
session_start();
include_once('includes/article.php');
$article = new Article;

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$data = $article->fetch_data($id);
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MATRIX CMS</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<header>
		<div class="center">
			<a href="index.php"><h1>MATRIX CMS</h1></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="admin">Admin</a></li>
				<li><a href="index.html">Page 3</a></li>
				<li><a href="index.html">Page 4</a></li>
				<li><a href="index.html">Page 5</a></li>
			</ul>
		</div>
	</header>
	<!-- END header -->
	<?php if(isset($_SESSION['user'])){ ?>
	<div id="user">
	<?php echo "Welcome ". $_SESSION['user']; ?>
	</div>
	<?php } ?>
	
	<div id="content">
				<h4>
					<?php echo $data['article_title']; ?></h4>
					 - <small>posted <?php echo date('l jS', $data['article_timestamp']); ?></small>
				<p><?php echo $data['article_content']; ?></p>
				<a href="index.php">&larr; Back</a>
	</div>
</body>
</html>
	<?php
} else {
	header('Location: index.php');
	exit();
}
?>