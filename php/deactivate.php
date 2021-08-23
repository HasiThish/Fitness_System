<?php
session_start();
if(isset($_POST["btn"]))
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

	$usname = $_POST["uname"];
	$pssword = $_POST["pwd"];

	$sql = "DELETE From member Where Username='$usname'";
	$result = mysqli_query($conn,$sql);


	
		
		
		header("location:../php/login.php");
	
	
	
	mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/homestyles.css">
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
	
	<link rel="icon" href="../images/LOGO.jpg" type="image/x-icon">
	<title>
		Deactivate
	</title>
	<style type="text/css">
		.dropdown {
			  float: right;
			  overflow: hidden;
			}

		.dropdown {
			  font-size: 16px;  
			  border: none;
			  outline: none;
			  color: white;
			   
			  background-color: inherit;
			  font-family: inherit;
			  margin: 0;
			}

		.dropdown-content {
			  display: none;
			  position: absolute;
			  top:60px;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

		.dropdown-content a {
			  float: none;
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			  text-align: left;
			}
		.dropdown:hover .dropdown-content {
			  display: block;
			  
			}
		.dropdown-content a:hover{
				color: white;
			}
			
	</style>
</head>
<body style="background-image: url('../images/bk.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	<style type="text/css">
		.dropdown {
			  float: right;
			  overflow: hidden;
			}

		.dropdown {
			  font-size: 16px;  
			  border: none;
			  outline: none;
			  color: white;
			   
			  background-color: inherit;
			  font-family: inherit;
			  margin: 0;
			}

		.dropdown-content {
			  display: none;
			  position: absolute;
			  top:60px;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

		.dropdown-content a {
			  float: none;
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			  text-align: left;
			}
		.dropdown:hover .dropdown-content {
			  display: block;
			  
			}
		.dropdown-content a:hover{
				color: white;
			}
			
	</style>
	<header>
		<div>
			<ul class="navi">
				<li><img src="../images/LOGO.jpg" width="60" height="60"></li>
				<li class="compn">Fantasy Fitness Trainer</li>
			   	<li ><a href="register.php">Sign Up</a></li>
			 	<li class="dropdown" class="dropbtn">
			  		<a  href="#">Login</a>
			   		<div class="dropdown-content">
			      		<a href="login.php">User login</a>
			      		<a href="Tlogin.php">Trainer login</a>
			    	</div>
			    </li>
			 
			  	<li ><a href="../html/items.html">Items</a></li>
			  	<li class="dropdown" class="dropbtn">
			  		<a  href="#">Packages</a>
			   		<div class="dropdown-content">
      					<a href="../html/Spackage.html">Standard Package</a>
     					<a href="../html/Ppackage.html">Premium Package</a>
     					<a href="../html/package.html">Buy Now</a>
    				</div>
				</li>
			  <li><a href="../html/Aboutus.html">About Us</a></li>
			  <li ><a href="../html/home.html">Home</a></li>
		    </ul>
		</div>
	</header>
	<br>
	
	<div class="login" id="login">
	<form method="post" action="deactivate.php">
		<center><font size="50px"  id="topic">Deactivate Account</font></center>
		<div class="deletepic" style="position: absolute;left: 350px;top: 50%;">
			<img id="userpic"src="../images/del1.png" width="200px" height="200px">
		</div>
		<div class="user" id="user" style="position: absolute;left: 650px;top: 50%;">
			<p id="usern">Username</p>
			<input type="text" name="uname" placeholder="username" id="uname"  style="width:350px"  required><br>

			<p id="para2">Password<br>
			<input type="password" name="pwd" placeholder="password" style="width:350px"  required></p>


			<button class="btn" id="btn" name="btn">Delete</button><br>

			<hr><br>
		</div>
	</form>
	</div>
	<footer id="footer" class="footer" style=" position: relative; top:0;">
        <br>
        <a href="https://www.facebook.com/"><img src="../images/facebook.png" width="35" height="30"></a>
        <a href="https://www.instagram.com/?hl=en"><img src="../images/instagram.png" width="35" height="30"></a>
        <a href="https://twitter.com/?lang=en"><img src="../images/twitter.png" width="35" height="30"><br><br></a>
        <font color="white"> Address:<br>
		Keas 69 Str.
		15234, Chalandri
		Athens,
		Greece<br>

		+94-210601931 (landline)
		+94-697766406 (mobile phone)
		+94-210639895 (fax)</font><br><br>

        <img src="../images/LOGO.jpg" width="100" height="100" alt="Logo" />
		<p class="copyright normal">&copy; 2020 <span > Fitness.</span> All Rights Reserved.</p>
	</footer>
	<?php
				echo "<script>alert('Do you want to deactivate your account?')</script>";
	?>


</body>
</html>
