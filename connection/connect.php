<?php

$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "foodhub";  //database


$conn = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection

if (!$conn) {      
    die("Connection failed: " . mysqli_connect_error());
}

?>