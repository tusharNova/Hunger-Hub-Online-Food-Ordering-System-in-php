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
<style>
  @media (min-width:992px) {
    .leftside {
      margin-left: 270px;
    }
  }
</style>

<body>
  <?php  include_once("navbar.php"); ?>
  <!-- Main Content -->
  <div class="leftside p-5">
    <div class="container  border  border-3 p-2 ">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Dashboard</div>
      <hr>
      <div class="row">
        <div class=""></div>
        <div class="card text-white bg-info  mb-3" style="max-width: 18rem;">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Warning card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>

        </div>
      </div>
    </div>
  </div>


</body>

</html>