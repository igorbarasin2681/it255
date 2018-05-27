<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "it255";
	$conn = new mysqli($servername, $username, $password, $database) or die("Unable to connect to database!");
	
	if (!$conn->set_charset("utf8")) {
		printf("Error loading character set utf8: %s\n", $mysqli->error);
	exit();
	}
?>