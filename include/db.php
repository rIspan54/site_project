<?php
	define('DB_HOST', 'project');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'project_bd');
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
?>