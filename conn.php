<?php
	$conn = new mysqli('localhost', 'root', '', 'db_rename');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>