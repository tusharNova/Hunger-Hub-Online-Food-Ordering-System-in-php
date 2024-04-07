<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if (empty($_SESSION["adminname"])) {
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
  <?php include_once("navbar.php"); ?>
  <!-- Main Content -->
  <div class="leftside p-5">
    <div class="container  border  border-3 p-2 ">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Dashboard</div>
      <hr>
      <div class="row">

        <div class="col-md-3">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-home f-s-40 "></i></span>
              </div>
              <div class="media-body media-text-right">
                <h2>
                  <?php $sql = "select * from restaurant";
                  $result = mysqli_query($conn, $sql);
                  $rws = mysqli_num_rows($result);

                  echo $rws; ?>
                </h2>
                <p class="m-b-0">Restaurants</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
              </div>
              <div class="media-body media-text-right">
                <h2>
                  <?php $sql = "select * from dishes";
                  $result = mysqli_query($conn, $sql);
                  $rws = mysqli_num_rows($result);

                  echo $rws; ?>
                </h2>
                <p class="m-b-0">Dishes</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-users f-s-40"></i></span>
              </div>
              <div class="media-body media-text-right">
                <h2><?php $sql = "select * from user";
                    $result = mysqli_query($conn, $sql);
                    $rws = mysqli_num_rows($result);

                    echo $rws; ?></h2>
                <p class="m-b-0">Users</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
              </div>
              <div class="media-body media-text-right">
                <h2>
                  <?php
                  # $sql = "select * from users_orders";
                   # $result = mysqli_query($conn, $sql);
                    #$rws = mysqli_num_rows($result);
                    #echo $rws; 
                    #?>
                     3</h2>
                <p class="m-b-0">Total Orders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>