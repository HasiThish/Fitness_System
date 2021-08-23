<?php
session_start();
unset($_SESSION["MemberID"]);
unset($_SESSION["Username"]);
header("Location:login.php");
?>