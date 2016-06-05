<?php

session_start();

include_once('../includes/article.php');
$article = new Article;

if (isset($_SESSION['logged_in'])) {
	if (isset($_POST['title'], $_POST['content'])) {
		$title = $_POST['title'];
		$content = nl2br($_POST['content']);

		if (empty($title) or empty($content)) {
			$error = 'All fields are required!';
		} else {
			$article->add_data($title, $content, $time);

			header('Location: index.php');
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

					<h4>Add Article</h4>
					
					<?php if (isset($error)) { ?>
						<small style="color:#aa0000"><?php echo $error ?></small>
						
						<?php } ?>
					<form action="add.php" method="post">
						<input type="text" name="title" placeholder="Title"><br>
						<textarea style="resize: none;" rows="15" cols="50" name="content" placeholder="Content"></textarea><br>
						<input type="submit" value="Add Article">
					</form><br>
					<a href="index.php">&larr; Back</a>
	</div>
</body>
</html>
	<?php
} else {
	header('Location: index.php');
}
?>