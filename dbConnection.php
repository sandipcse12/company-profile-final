<?php
$hostname = 'localhost';
$user = "root";
$pass = "";
$dbname = "learning";

$conn = mysqli_connect($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    die($conn->connect_error);
}

//echo "Connected";
