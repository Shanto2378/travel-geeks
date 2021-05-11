<?php
session_start();
 include "database_connection.php";
 $db = mysqli_select_db($conn , 'travel-geeks');
 if(isset($_POST['asignin'])){
     $aemail = $_POST['email'];
     $apassword = $_POST['password'];
$sql = "select * from admin where email = '$aemail' and password = 'apassword'";
$query = mysqli_query($conn,$sql);
    if($aemail == "travel@gmail.com" && $apassword == "123"){
        echo "login successful";
        $_SESSION['useremail']=$aemail;
        header("location: index.php");
    }
    else{
        header("location: admin_login.php");
    }



 }


?>