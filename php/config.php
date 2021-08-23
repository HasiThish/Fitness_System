<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "onlinefitness";

	$conn = new mysqli($servername,$username,$password,$db);

	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connection_error);
	}
	


?>