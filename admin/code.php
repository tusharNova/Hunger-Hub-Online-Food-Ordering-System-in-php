<?php

include("../connection/connect.php");
session_start();


$cmd = $_POST["cmd"];

# for admin login
if ($cmd === "adminlogin") {
    $username = $_POST['user'];
    $password = $_POST['pswd'];


    $sql = "SELECT * FROM `admin` where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["adminname"] = $row['username'];
        echo "$cnt";
    } else {
        echo "Invalid Username or Password";
    }
}
# for change password
if ($cmd === "changeadminpass") {
    echo "ok";
}

# for add Category 
if ($cmd === "addcategory") {
    $item  = $_POST['item'];
    // echo "$item";

    $sql = "INSERT INTO `res_category`(`c_id`, `c_name`, `date`) VALUES (null,'$item',CURRENT_TIMESTAMP)";
    $run = mysqli_query($conn, $sql);
    if ($run) {
        echo  "1";
    } else {
        echo "0";
    }
}
# for list of Category
if ($cmd === "listCategory") {

    $sql = "SELECT * FROM `res_category`";
    $result = mysqli_query($conn, $sql);
    $arr = array();
    while ($row = mysqli_fetch_array($result)) {

        $record = array(
            'id' => $row[0],
            'c_name' => $row[1],
            'time' => $row[2],
            'List' => "<button class='btn btn-info' id='btnlist' onclick='' value='$row[0]' >List</button>",
            'Update' => "<button class='btn btn-info' id='btnUpdate' value='$row[0]' >Update</button>"

        );
        array_push($arr, $record);
    }
    echo json_encode($arr);
}

// delete Category 

if($cmd === "deleteCategory"){
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `res_category` where c_id= $id";
    echo $sql;
    $run = mysqli_query($conn , $sql);

    if($run){
        echo "1";
    }
    else{
        echo "0";
    }
}