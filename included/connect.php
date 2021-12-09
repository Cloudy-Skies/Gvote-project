<?php
	$conn = new mysqli('localhost', 'root', '', 'gvote');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	echo 'Connected Successfully';
	
?>