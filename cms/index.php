<?php 
session_start();
include_once('includes/article.php');
$article = new Article;
$articles = $article->fetch_all();
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
		<h1>Articles</h1>
		<ol>
			<?php foreach ($articles as $article) { ?>
				<li><a href="article.php?id=<?php echo $article['article_id']; ?>">
					<?php echo $article['article_title']; ?></a>
					- <small><?php echo date('l jS', $article['article_timestamp']); ?></small>
				</li>
			<?php } ?>
		</ol>
	</div>
</body>
</html>