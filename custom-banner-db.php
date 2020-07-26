<?php

// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'lobbymall');
	if (!$db) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		die();
	}
?>