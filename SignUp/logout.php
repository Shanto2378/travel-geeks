<?php
session_start();
session_unset();
session_destroy();
header("location: signin_signup.php");
   	exit();
?>