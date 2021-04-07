<?php
   if(isset($_POST["signin"])){
    $email= $_POST["email"];
    $password= $_POST["password"];
   include "database_connection.php";
   include "signup_functions.php";
   if(emptyinputsignin($email, $password) !== false){
   	header("location: signin_signup.php?error=emptyinput");
   	exit();
    } 
    signinUser($conn, $email, $password);
   }
   else{
   	header("location: signin_signup.php");
   	exit();
   }
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> signin complete </h1>
</body>
</html>
