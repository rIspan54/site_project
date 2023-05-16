<!doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="style/style.css" />
</head>

<body>	
	<?php
	require_once 'include/db.php';
	require_once 'modules/module.php';
	$all_books = mysqli_query($conn, "SELECT * FROM books");
	$count_books = mysqli_num_rows($all_books);
	$count = ($_GET["count"]);
	if ($count != null) {
		$count_pages = floor($count_books / $count);
		echo $count_pages;
	} else {
		$count_pages = 0;
	}
	echo '<center><table style = "margin-top: 10%">';
	for ($p = 0; $p <= $count_pages + 1; $p++) {
		while ($data = mysqli_fetch_assoc($all_books)) {
			if ($data["id"] != null) {
				echo "<tr>";
				echo "<td>" . $data["name"] . "<td>";
				echo "<td>" . $data["autor"] . "<td>";
				echo "<tr>";
			}
		}
	}
	echo '</table></center>';
	?>
</body>

</html>