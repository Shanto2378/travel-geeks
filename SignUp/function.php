<?php
include "database_connection.php";
function emptyinputsignup($name, $email, $password){
$result;
if(empty($name) || empty($email) || empty($password)){
$result = true;
}
else{
$result = false; 
}
return $result;
}
function invalidName($name){
$result;
if((!preg_match("/^[a-zA-Z0-9]*$/", $name))){
$result = true;
}
else{
$result = false; 
}
return $result;
} 
function invalidEmail($email){
$result;
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$result = true;
}
else{
$result = false; 
}
return $result;
} 
//function passwordMatch($password, $confirmpassword){
//$result;
//if($password !== $confirmpassword){
//$result = true;
//} 
//else{
//$result = false; 
//}
//return $result;
//}
function creatuser($conn, $name, $email, $password){
$sql = "INSERT INTO `guide` (`guide_name`, `guide_email`, `guide_password`) VALUES (?, ?, ?);";
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
header("location: guide_Login.php?error=stmtfailedusercreate");
exit();
}
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: guideLogin.php?error=none");
exit();
} 
function uidExists($conn, $name, $email){
$sql = "SELECT * from guide WHERE guide_name = ? or guide_email = ?;";
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
header("location: guideLogin.php?error=stmtfailed");
exit();
}
mysqli_stmt_bind_param($stmt, "ss", $name, $email);
mysqli_stmt_execute($stmt);
$resultdata = mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($resultdata)){
return $row;
}
else{
$result = false;
return $result;
}
mysqli_stmt_close($stmt);
}
//signin functions
//function emptyinputsignin($email, $password){
  //  $result;
    //if (empty($email) || empty($password)){
    //$result = true;
    //}
    //else{
    //$result = false; 
    //}
    //return $result;
    //}
    function signinUser($conn, $email, $password){
    $uidExists = uidExists($conn, $email, $email);
    if($uidExists === false){
   header("location: guideLogin.php?error=incorrectsignin");
    exit();  
    }
    $passwordhashed = $uidExists["guide_password"];
    $checkpassword = password_verify($password , $passwordhashed);
    if($checkpassword === false){
    header("location: guideLogin.php?error=incorrectpassword");
    exit();    
    }
    else if($checkpassword === true){
    session_start();
    
    $_SESSION['useremail'] = $email;
    header("location: index.php");
    exit();  
    }
}