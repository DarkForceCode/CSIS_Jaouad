<?php

	$connection = mysqli_connect("localhost","root","","ecommerce");
	if ($connection->connect_error) 
	{
		die("Connection failed: " . $connection->connect_error);
	}
	session_start();
	
	
?> 