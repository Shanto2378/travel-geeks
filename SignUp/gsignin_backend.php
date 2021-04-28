<?php
   if(isset($_POST["gsignin"])){
    $email= $_POST["email"];
    $password= $_POST["password"];
   include "database_connection.php";
   include "function.php";
   //if(emptyinputsignin($email, $password) !== false){
   	//header("location: guideLogin.php?error=emptyinput"); 
   	//exit();
    //} 
    signinUser($conn, $email, $password);
   }
   else{
   	header("location: guideLogin.php");
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
