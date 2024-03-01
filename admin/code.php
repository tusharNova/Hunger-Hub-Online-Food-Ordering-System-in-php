<?php

include("../connection/connect.php");

$cmd = $_POST["cmd"];
if($cmd === "adminlogin"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "ok";
    header("refresh:1;url=dashboard.php");
    
}

