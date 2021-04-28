<?php 
include "database_connection.php";
include "function.php";
 if(isset($_POST['gsignup'])){ 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
 //echo $name ." ". $email ." ". $password ." ;
 //if(emptyinputsignup($name, $email, $password) !== false){
//	header("location: guideLogin.php?error=emptyinput");
//	exit();
// } 
 if(invalidName($name) !== false){
	header("location: guideLogin.php?error=invalidname");
 	exit();
 }
 if(invalidEmail($email) !== false){
	header("location: guideLogin.php?error=invalidemail");
 	exit();
 }
// if(passwordMatch($password, $confirmpassword) !== false){
 	//header("location: signin_signup.php?error=Passworddontmatch");
	//exit();
 //} 
 if(uidExists($conn, $name, $email) !== false){
	header("location: guideLogin.php?error=usernametaken");
	exit();
}
creatuser($conn, $name, $email, $password);
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

<h1> signup complete </h1>
</body>
</html>