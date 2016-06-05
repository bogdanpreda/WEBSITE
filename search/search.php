<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Engine</title>
		<style>
		center{
			padding: 100px;
		}
		#text{
			width: 300px;
		}
	</style>
</head>
<body>
		<h1>My Search</h1>
		<form action="search.php" method="GET">
			<input id="text" type="text" name="k" value="<?php echo $_GET['k'];?>" >
			<input type="submit" value="Search">
		</form>
		<hr>
		<?php 
			$k = $_GET['k'];
			$terms = explode(" ", $k);
			$query = "SELECT *FROM search WHERE "
			foreach ($terms as $each) {
				echo $each. "</br>";
				$i++;
				if ($i ==1) {
					$query .= "keywords LIKE '%$each%' ";
				} else {
					$query .= "OR keywords LIKE '%$rach%";
				}
			}
			mysql_connect('localhost', 'root', '');
			mysql_select_db("tutorials");
			$query = mysql_query($query);
			$numrows = mysql_num_rows($query);
			if ($numrows > 0) {
				while ($row = mysql_fetch_assoc($query)) {
					$id = $row['id'];
					$title = $row['title'];
					$description = $row['description'];
					$keywords = $row['keywords'];
					$link = $row['link'];

					echo "<h2><a href='$link'>$title</a></h2>
					$description<br>
					";
				}
			} else 
				echo "No results found for\"<B>$k</b>\""
			mysql_close();
		 ?>
</body>
</html>