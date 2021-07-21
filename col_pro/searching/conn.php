<?php
	$conn = mysqli_connect('localhost:3307', 'root', '', 'project') or die(mysqli_error());
 
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>