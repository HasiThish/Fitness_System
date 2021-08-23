<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/homestyles.css">
	<link rel="stylesheet" type="text/css" href="../styles/userPstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">">
	<link rel="icon" href="../images/LOGO.jpg" type="images/x-icon">
	<title>user profile</title>
	
</head>

<body clas="bg-image "style="background-image: url('../images/ba.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<style>
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
			
	
		.dropbtn1 {
		  background-color: #333;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		}
		.dropdown1 {
		  position: relative;
		  
		  right:50px;
		  display: inline-block;
		}
		.dropdown-content1 {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}
		.dropdown-content1 a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}



		.dropdown-content1 a:hover {background-color: #ddd;}

		.dropdown1:hover .dropdown-content1 {display: block;}

		.dropdown1:hover .dropbtn1 {background-color: black; width:160px; text-align:right; }
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
		<?php
			if($_SESSION["Musername"]) {
		?>

		<h1 style="color:white; text-align: center;">Welcome <?php echo $_SESSION["Musername"]; ?>!</h1>

		<?php
			}else echo "<h1>Please login first .</h1>";
		?>
	
		<div>
			<ul class="ave">
				<li><img src="../images/av.png" width="80" height="80"></li>
				<div class="dropdown1">
  					<button class="dropbtn1"><i class="fa fa-bars" aria-hidden="true"></i></button>
  					<div class="dropdown-content1">
					<a href="logout.php" tite="Logout">Log Out</a>
    				<a href="update1.php">Update</a>
    				<a href="deactivate.php">Deactivate</a>
    
  					</div>
				</div>
				<div class="oto"><br><br>
				<li>User ID:xxxxxxxxx  User Name:xxxxxxx</li>
				<li> Last seen</li>
				<p id="last_seen"></p>

				<script>
					var t = new Date();
					document.getElementById("last_seen").innerHTML = t;
				</script>
				
			</div>
			</ul>
		</div>
	
	


				<div class="wall">
				<div class="ht">
				
		
			  <li>Today session</li>
			  <hr>
			  <a href="https://www.youtube.com/watch?v=j57HMjVM7Is">click here to see</a>
			  <br><br><br><hr>
			  <li>Today session</li>
			  <hr>
			  pending
			 <br><br><br> <hr>
			  <li>Today session</li>
			  <hr>
			  pending
			 <br><br><br> <hr>
			  <li>Today session</li> 
			  <hr>
			  pending
			 <br><br><br> <hr>
			  <li>Today session</li>
			  <hr>
			  pending
			 <br><br><br> <hr>
			  <li>Today session</li>
			  <hr>
			  pending
			 <br><br><br> <hr>
		
			</div>
			</div>

				
		
		
		






		<footer id="footer" class="footer">
        <br>
        <a href="https://www.facebook.com/"><img src="../images/facebook.png" width="35" height="30"></a>
        <a href="https://www.instagram.com/?hl=en"><img src="../images/instagram.png" width="35" height="30"></a>
        <a href="https://twitter.com/?lang=en"><img src="../images/twitter.png" width="35" height="30"><br><br></a>
        <font color="white"> Address:<br>
		33 st.
		1700, colombo
		Gall road,
		Sri Lanka<br>

		+94-2106019311 (landline)
		+94-3087651 (mobile phone)
		+00-2106398905 (fax)</font><br><br>

        <img src="../images/LOGO.jpg" width="100" height="100" alt="Logo" />
		<p class="copyright normal">&copy; 2019 <span > FantasyFitness.</span> All Rights Reserved.</p>
	</footer>

</body>
</html>
