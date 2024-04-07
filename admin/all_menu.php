<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Menu</title>
</head>
<style>
  @media (min-width:992px) {
    .leftside {
      margin-left: 270px;
    }
  }
</style>

<body>
  <?php include_once('navbar.php'); ?>

  <div class="leftside p-5">
    <div class="table-responsive m-t-40">
      <div class="container  border  border-3 p-2 mt-5">
        <div class="bg-primary h4 text-white rounded-2 text-center p-3">Menu List</div>
        <hr>
        <div class="table-responsive m-t-40">
          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>SR No.</th>
                <th>Restaurant</th>
                <th>Dish</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>



              <?php
              $sql = "SELECT * FROM dishes order by d_id desc";
              $query = mysqli_query($conn, $sql);

              if (!mysqli_num_rows($query) > 0) {
                echo '<td colspan="11"><center>No Menu</center></td>';
              } else {
                $srno = 1;
                while ($rows = mysqli_fetch_array($query)) {
                  $mql = "select * from restaurant where r_id='" . $rows['r_id'] . "'";
                  $newquery = mysqli_query($conn, $mql);
                  $fetch = mysqli_fetch_array($newquery);


                  echo '<tr><td>' . $srno .  '</td>
              <td>' . $fetch['title'] . '</td>
																								<td>' . $rows['title'] . '</td>
																								<td>' . $rows['slogan'] . '</td>
																								<td>₹' . $rows['price'] . '</td>
																								
																								
																								<td><div class="col-md-3 col-lg-8 m-b-10">
																								<center><img src="images/menus/' . $rows['img'] . '" class="img-responsive  radius" style="height:100px;width:150px;" /></center>
																								</div></td>
																								
																							
																									 <td><a href="" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
																									</td></tr>';
                  $srno += 1;
                }
              }


              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>