<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travel_geeks";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
 die("Connecton failed:" . mysqli_connect_error());
}
