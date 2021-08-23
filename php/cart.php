<?php
session_start();
if(isset($_POST["cart1"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "onlinefitness";

	$conn = new mysqli($servername,$username,$password,$db);

	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connection_error);
	}
	
	$qt = $_POST["Quantity"];
	echo $qt;

	$sql2 = "SELECT MemberID FROM member WHERE Username = 'Cath_rin'";
	$result = mysqli_query($conn,$sql2);
	$row1 = $result->fetch_assoc();
	$id = $row1["MemberID"];
	echo "<p>".$id."</p>";

	

	$sql1 = "SELECT Quantity FROM item_mem WHERE MemberID= '$id' AND ItemID = '3'";
	$result = mysqli_query($conn,$sql1);
	$row2 = $result->fetch_assoc();
	$q = $row2["Quantity"];
	echo "<p>".$q."</p>";

	
	$qty = $q + $qt ;
	echo $qty;
	$sql = "UPDATE item_mem SET Quantity= '$qty' WHERE MemberID= '$id' AND ItemID = '3'";
	$result = mysqli_query($conn,$sql);

	header("location:../html/items.html");
	
	
	
	mysqli_close($conn);
}
?>