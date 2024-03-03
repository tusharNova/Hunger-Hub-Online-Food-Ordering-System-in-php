<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty( $_SESSION["adminname"]))
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <?php  include_once("navbar.php"); ?>
  
</body>
</html>