<?php
function emptyinputsignup($name, $email, $password, $confirmpassword){
    $result;
    if(empty($name) || empty($email) || empty($password) || empty($confirmpassword)){
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
function passwordMatch($password, $confirmpassword){
    $result;
    if($password !== $confirmpassword){
    $result = true;
} 
else{
    $result = false; 
}
return $result;
}

function creatuser($conn, $name, $email, $password){
    $sql = "INSERT INTO `users` (`userName`, `usersEmail`, `usersPassword`) VALUES (?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signin_signup.php?error=stmtfailed");
	exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signin_signup.php?error=none");
	exit();

} 
function uidExists($conn, $name, $email){
    $sql = "SELECT * from users WHERE usersID = ? or usersEmail = ?;";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signin_signup.php?error=stmtfailed");
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
