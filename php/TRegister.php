<?php

include_once 'config.php';
?>
<?php
	$name = $_POST["fname"];
	$ln = $_POST["lname"];
	$gen = $_POST["gender"];
	$pn = $_POST["phone"];
	$quali = $_POST["Qualifications"];
	$rid = $_POST["region"];
	$uname = $_POST["username"];
	$pw = $_POST["pwd"];

	$sql = "insert into trainer(TrainerID,fname,lname,gender,username,TPassword,contactNo,Qualifications,RegionID)values('','$name','$ln','$gen','$uname','$pw','$pn','$quali','$rid')";
	echo "<a href='traineroutput.php'>View Trainers</a>";


	mysqli_close($conn);
	
?>








 	
	
