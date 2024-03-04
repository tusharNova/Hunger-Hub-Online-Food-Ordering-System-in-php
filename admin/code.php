<?php

include("../connection/connect.php");
session_start();


$cmd = $_POST["cmd"];

# for admin login
if($cmd === "adminlogin"){
    $username = $_POST['user'];
    $password = $_POST['pswd'];
   
    
    $sql = "SELECT * FROM `admin` where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if (is_array($row)){
        $_SESSION["adminname"] = $row['username'];
        echo "$cnt";
    }
    else{
        echo "Invalid Username or Password";
    }
}
# for change password
if($cmd ==="changeadminpass"){
    echo"ok";
} 

# for add Category 
if($cmd === "addcategory"){
    echo "sdfsdf";
}