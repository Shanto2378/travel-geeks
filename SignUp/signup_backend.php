<?php 
include "database_connection.php";
include "signup_functions.php";
 if(isset($_POST['signup'])){ 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword']; 
 //echo $name ." ". $email ." ". $password ." ". $confirmpassword;
 if(emptyinputsignup($name, $email, $password, $confirmpassword) !== false){
	header("location: signin_signup.php?error=emptyinput");
	exit();
 } 
 if(invalidName($name) !== false){
	header("location: signin_signup.php?error=invalidname");
 	exit();
 }
 if(invalidEmail($email) !== false){
	header("location: signin_signup.php?error=invalidemail");
 	exit();
 }
 if(passwordMatch($password, $confirmpassword) !== false){
 	header("location: signin_signup.php?error=Passworddontmatch");
	exit();
 } 
 if(uidExists($conn, $name, $email) !== false){
	header("location: signin_signup.php?error=usernametaken");
	exit();
 }
creatuser($conn, $name, $email, $password);
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

<h1> signup complete </h1>
</body>
</html>