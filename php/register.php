<?php

session_start();
if(isset($_POST["uname"]))
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
	$age = $_POST["age"];
	$height = $_POST["height"];
	$weight = $_POST["Weight"];
	$package = $_POST["package"];
	$addno = $_POST["addno"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$country = $_POST["country"];
	$contact = $_POST["country_code"];


	$sql = "INSERT into member(MemberID,Username,MPassword,Age,Height_cm,Weight_kg,Package_Type,AddNo,Street,City,CState,Country,ContactNo)  values('','$usname','$pssword','$age','$height','$weight','$package','$addno','$street','$city','$state','$country','$contact')";
	
	if( mysqli_query($conn,$sql))
	{
		header("location:../html/home.html");
	}
	else
	{
		//header("location:login1.php");
		echo "<script> alert ('Invalid') </script>";
		
	}
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <!--link style sheets-->
	<link rel="stylesheet" type="text/css" href="../styles/homestyles1.css">
	<link rel="stylesheet" type="text/css" href="../styles/register.css">
	<link rel="icon" href="../images/LOGO.jpg">
    <!--link js file-->
	<script type="text/javascript" src="../js/register.js"></script>
	<title>Register</title>
    <script LANGUAGE="JavaScript" type="text/javascript">
      function myFunction() {
        DispWin = window.open('','NewWin', 'toolbar=no,status=no,width=300,height=200')
        message = "<ul><li><b>NAME: </b>" + document.form1.yourname.value;
        message += "<li><b>ADDRESS: </b>" + document.form1.address.value;
        message += "<li><b>PHONE: </b>" + document.form1.phone.value + "</ul>";
        DispWin.document.write(message);
    }
    </script>
</head>
<body style="background-image: url('../images/back1.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
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
    <!--adding a header-->
	<header>
        <!--adding navigation bar-->
		<div>
			<ul class="navi">
                <li><img src="../images/LOGO.jpg" width="60" height="60"></li>
                <li class="compn">Fantasy Fitness Trainer</li>
                <li ><a class="active" href="register.php">Sign Up</a></li>
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
	<br><br>
    <!--adding topic-->
	<h1 class="topic">Registration Form</h1><br><br>

    <!--creating a form-->
	<div class="form">

    	<form action="#" name="form1"  method="post" >
    		<h2 class="head">1.Basic Information</h2>

                  <label for="fname">First name:</label><span>*</span><br>
                  <input type="text" id="fname" name="fname" placeholder="FirstName" required><br>

                  <label for="lname">Last name:</label><span>*</span><br>
                  <input type="text" id="lname" name="lname" placeholder="LastName" required><br><br>

                  <label for="gender">Gender:</label><span>*</span>&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="male" name="gender" value="male" checked>
                  <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female">Female</label><br><br>

                  Address number:&nbsp;
                    <input type="text" id="addno" name="addno" placeholder="Number">&nbsp;&nbsp;&nbsp;

                    Street:&nbsp;
                    <input type="text" id="street" name="street" placeholder="Street name"><br><br>

                    City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="city" name="city" placeholder="City">&nbsp;&nbsp;&nbsp;


                    State:&nbsp;&nbsp;
                    <input type="text" id="state" name="state" placeholder="State"><br><br>


                  <label for="country">Country</label><span>*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                    <select id="country" name="country" class="form-control" >
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                     </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br> 

                    <label for="DOB">DOB:</label><span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                    <input type="date" id="birthday" name="birthday" required><br><br> 

                    <label for="tpnum">Telephone Number:</label><span>*</span><br>
                    <input type="text" id="tp" name="country_code" title="Error Message" pattern="[0-9]{1}[0-9]{9}" placeholder="ex:123456789" required><br><br> 

                    <label for="email">E-mail:</label><span>*</span><br>
                    <input type="email" id="email" name="email" title="Error Message" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="example@gmail.com" required><br><br>

                    Age:<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="age" name="age" placeholder="years"><br>

                    Height:<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="height" name="height" placeholder="cm">

                    Weight:<span>*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="Weight" name="Weight" placeholder="kg"><br>

                    <label for="Package">Package : </label><span>*</span>&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="standard" name="package" value="standard" checked>
                    <label for="standard">Standard</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="Premium" name="package" value="Premium">
                    <label for="Premium">Premium</label><br><br>

                <h2 class="head">2.Lifestyle Information</h2>
                      What do you do for living?<br><input type="text"><br><br>

                      Whats the activity level at your job?<br>
                      <input type="checkbox">&nbsp;&nbsp;none(seated only)<br>
                      <input type="checkbox">&nbsp;&nbsp;Moderate(light activity such as walking)<br>
                      <input type="checkbox">&nbsp;&nbsp;High(heavy labor,very active)<br><br>

                      Do you follow a regular working schedule, do you work days, afternoon or nights?<br><input type="text"><br><br>
                      How often do you travel?<br>
                      <input type="checkbox">&nbsp;&nbsp;Rarely<br>
                      <input type="checkbox">&nbsp;&nbsp;A few times a year<br>
                      <input type="checkbox">&nbsp;&nbsp;A few times a month<br>
                      <input type="checkbox">&nbsp;&nbsp;Weekly<br><br>

                      Please list the physical activities that you participate in outside of the gym and outside of work:<br><input type="text"><br><br>

                <h2 class="head">3.Medical and health information</h2>
                     	If you have any diagnosed health problems list the condition(s)<br><input type="text"><br><br>

                     	If you are on any medications,please list them.<br><input type="text"><br><br>

                     	What additional therapies are being undertaken for the given health problrm(s)?<br><input type="text"><br><br>

                     	If you have any injuries,please list them.<br><input type="text"><br><br>

                  <h2 class="head">4.Login Information</h2>
                        Username :<span>*</span><br>
                        <input type="text" id="uname" name="uname"  required><br><br>
                        Password :<span>*</span><br>
                        <input type="password" name="pwd" placeholder="Password" id="password" required><br><br>
                        Confirm Password :<span>*</span><br>
                        <input type="password" placeholder="Confirm Password" name="rpwd" id="confirm_password" required>
                              <script type="text/javascript">
                                     var password = document.getElementById("password")
                                    , confirm_password = document.getElementById("confirm_password");

                                    function validatePassword(){
                                          if(password.value != confirm_password.value) {
                                                confirm_password.setCustomValidity("Passwords Don't Match");
                                          } else {
                                                confirm_password.setCustomValidity('');
                                          }
                                    }

                                    password.onchange = validatePassword;
                                    confirm_password.onkeyup = validatePassword;
                              </script><br><br>
      

 	          <input type="checkbox" id="policy" name="policy" required>ALL THE INFORMATION ON THIS FORM IS CORRECT.<br><br>

                <!--adding a captcha--><!--reference: w3school-->
                <div id="captcha_wrapper">
                    <div id="captcha"></div>
                    <input type="text" id="input" placeholder="Insert Captcha" required/>
                    <div id="output">gg</div>
                    <div id="captcha_container">
                        <input type="checkbox" id="checked" onclick="validate()" required/>
                        I'm not a robot
                    </div>
                </div>

                <!--create captcha with js-->
                <script>
                    var doc=document.getElementById("captcha");
                    doc.innerHTML=(rand()); 
                </script>
                <br><br>
	
                <input type="submit" value="Submit" >
  
        </form>
    </div>
	<br><br><br>

    <!--adding google calender from google-->
	<iframe class="calender" src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23616161&amp;ctz=Asia%2FColombo&amp;src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0" style="border:solid 1px #777" width="300" height="300" frameborder="0" scrolling="no"></iframe>

    <!--adding a digital clock--><!--reference: www.zeitverschiebung.net-->
	<iframe class="clock" src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FColombo" width="30%" height="140" frameborder="0" seamless></iframe>
	<br><br>

    <!--adding footer-->
	<footer id="footer" class="foot" >
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
		+94-210639890 (fax)</font><br><br>

        <img src="../images/LOGO.jpg" width="100" height="100" alt="Logo" />
		<p class="copyright normal">&copy; 2020&nbsp;&nbsp;&nbsp;Fitness. All Rights Reserved.</p>
	</footer>
	

</body>
</html>




