<?php
session_start();

include_once('../includes/article.php');
$article = new Article;

if (isset($_SESSION['logged_in'])) {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$article->delete_data($id);

		} 

	$articles = $article->fetch_all();
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
			<a href="index.php"><h1>MATRIX CMS</h1></a>
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
				<h4>Select an Article to Delete: </h4>
				<form action="delete.php" method="GET">
					<select name="id">
						<?php foreach ($articles as $article) { ?>
							<option value="<?php echo $article['article_id']; ?>">
								<?php echo $article['article_title']; ?>
							</option>
						<?php } ?>
					</select><br>
					<input type="submit" value="Delete Article">
					<br><br>
					<a href="index.php">&larr; Back</a>
				</form>
	</div>
</body>
</html>

<?php 
} else {header ('Location: index.php');}
?>