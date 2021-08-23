<?php
session_start();
include_once 'config.php';
?>
<?php
if(isset($_POST['update']))
{
		$id = $_POST['id'];	
		$name = $_POST['fname'];
		$ln = $_POST['lname'];
		$gen = $_POST['gender'];
		$pn = $_POST['phone'];
		$quali = $_POST['Qualifications'];
		$rid = $_POST['region'];
		$uname = $_POST['username'];
		$pw = $_POST['pwd'];

		$sql="UPDATE trainer SET fname='$name',lname='$ln',gender='$gen',contactNo='$pn',Qualifications='$quali',RegionID='$rid',Username='$uname',TPassword='$pw' WHERE TrainerID='$id'";
		$result = mysqli_query($conn,$sql);
		header("Location:traineroutput.php");
}
?>

<?php
	$id = $_GET['id'];	

	$sql ="SELECT * FROM trainer WHERE TrainerID='$id'";
	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result))
	{
		
		$name = $row['fname'];
		$ln = $row['lname'];
		$gen = $row['gender'];
		$pn = $row['contactNo'];
		$quali = $row['Qualifications'];
		$rid = $row['RegionID'];
		$uname = $row['Username'];
		$pw = $row['TPassword'];	
	}
?>

<html>
<head>
	<title>Edit trainer data</title>
</head>
<body>

	<button style="background-color: lightblue;"><a href="traineroutput.php">Back</a></button>
	<br/><br/>

	<form name="update_trainer" method="POST" action="update.php">
		<table border="0">
			<tr>
				<td>Fname</td>
				<td><input type="text" name="fname" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>LName</td>
				<td><input type="text" name="lname" value=<?php echo $ln;?>></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value=<?php echo $gen;?>></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value=<?php echo $pn;?>></td>
			</tr>
			<tr>
				<td>Qualifications</td>
				<td><input type="text" name="Qualifications" value=<?php echo $quali;?>></td>
			</tr>
			<tr>
				<td>RegionID</td>
				<td><input type="text" name="region" value=<?php echo $rid;?>></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=<?php echo $uname;?>></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd" value=<?php echo $pw;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" style="background-color: green" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>