<?php
 include "database_connection.php";
 $db = mysqli_select_db($conn , 'travel-geeks');
 if(isset($_POST['asignin'])){
     $aemail = $_POST['email'];
     $apassword = $_POST['password'];
$sql = "select * from admin where email = '$aemail' and password = 'apassword'";
$query = mysqli_query($conn,$sql);
$row = mysqli_num_row(){
    if($row == 1){
        echo "login successful";
        header("location: index.php");
    }
    else{
        header("location: admin_login.php");
    }
}


 }


?>