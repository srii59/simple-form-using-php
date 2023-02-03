<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=mydb1', 'root', 'srimathi59' );
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>