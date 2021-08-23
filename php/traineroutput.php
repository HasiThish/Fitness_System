<?php

include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/aboutstyles.css">
	<script type="text/javascript" src="../js/fitness.js"></script>
	<link rel="icon" href="../images/LOGO.jpg" type="image/x-icon">

	<title>Trainer Registration</title>
</head>
<body>
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
	<style>
	  body{
	  		background-image: url('../images/vx.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	<br><br>
	 <table bgcolor="#e6f2ff" border="1" align="center" width="98%">
		<tr>
			<th class="col1">TrainerID</th>
			<th class="col2">fname</th>
			<th class="col3">lname</th>
			<th class="col4">gender</th>
			<th class="col5">Username</th>
			<th class="col6">TPassword</th>
			<th class="col7">contactNo</th>
			<th class="col8">Qualifications</th>
			<th class="col9">RegionID</th>
		</tr>
		<?php

		$sql = "SELECT * FROM trainer ORDER BY TrainerID ASC ";
		$result = mysqli_query($conn,$sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<tr><td>".$row["TrainerID"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["gender"]."</td><td>".$row["Username"]."</td><td>".$row["TPassword"]."</td><td>".$row["contactNo"]."</td><td>".$row["Qualifications"]."</td><td>".$row["RegionID"]."</td>";
				echo "<td><a href='update.php?id=$row[TrainerID]'>Edit</a></td>";
				echo "</tr>";

			}
		}
		
		?>

	</table><br><br><br><br><br><br><br><br>
	

	<footer id="footer" class="footer">
        <br>
        <a href="https://www.facebook.com/"><img src="../images/facebook.png" width="35" height="30"></a>
        <a href="https://www.instagram.com/?hl=en"><img src="../images/instagram.png" width="35" height="30"></a>
        <a href="https://twitter.com/?lang=en"><img src="../images/twitter.png" width="35" height="30"><br><br></a>
    <font color="white"> Address:<br>
		Keas 69 Str.
		456, Chalandri
		Colombo,
		Sri Lanka<br>

		+94-663456234 (landline)
		+94-783412987 (mobile phone)
		+94-760639893 (fax)
	</font><br><br>

        <img src="../images/LOGO.jpg" width="100" height="100" alt="Logo" />
		<p class="copyright normal">© 2019 <span > Fitness.</span> All Rights Reserved.</p>
	</footer>


</body>
</html>