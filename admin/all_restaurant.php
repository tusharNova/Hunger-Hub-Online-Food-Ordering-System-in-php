<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Restaurant</title>
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

  <div class="leftside p-2">
    <div class="container  border  border-3 p-2 mt-5">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Lists Restaurant</div>
      <hr>

      Listed Restaurant
      <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores optio omnis iusto ex? Ex vitae deleniti, est,
        unde harum asperiores optio numquam quibusdam consequatur doloremque, id modi neque. Magni, molestias.
      </div>
      <div class="table-responsive m-t-40">
        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="thead-dark">
            <tr>
              <th>Sr No.</th>
              <th>Category</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Url</th>
              <th>Open Hrs</th>
              <th>Close Hrs</th>
              <th>Open Days</th>
              <th>Address</th>
              <th>Image</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            <!-- /*!
 

*/ -->

            <?php
            $sql = "SELECT * FROM restaurant order by `r_id` desc;";
            $query = mysqli_query($conn, $sql);

            if (!mysqli_num_rows($query) > 0) {
              echo '<td colspan="11"><center>No Restaurants</center></td>';
            } else {
              $srno = 1;
              while ($rows = mysqli_fetch_array($query)) {

                $mql = "SELECT * FROM `res_category` WHERE  `c_id`='" . $rows['c_id'] . "'";
                $res = mysqli_query($conn, $mql);
                $row = mysqli_fetch_array($res);

                echo ' <tr><td>' . $srno . '</td>
                <td>' . $row['c_name'] . '</td>
																								<td>' . $rows['title'] . '</td>
																								<td>' . $rows['email'] . '</td>
																								<td>' . $rows['phone'] . '</td>
																								<td>' . $rows['url'] . '</td>
																								
																								
																								<td>' . $rows['o_hr'] . '</td>
																								<td>' . $rows['c_hr'] . '</td>
																								<td>' . $rows['o_days'] . '</td>
																								
																								<td>' . $rows['address'] . '</td>
																								
																								<td><div class="col-md-3 col-lg-8 m-b-10">
																								<center><img src="imgRes/' . $rows['image'] . '" class="img-responsive radius"  style="width:150px;height:100px;"/></center>
																								</div></td>
																								
																								<td>' . $rows['date'] . '</td>
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
</body>

</html>