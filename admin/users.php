<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
</head>
<style>
  @media (min-width:992px) {
    .leftside {
      margin-left: 270px;
    }
  }
</style>

<body>
  <?php  include_once('navbar.php') ; ?>

  <div class="leftside p-2">
    
    <div class="container  border  border-3 p-2 mt-5">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Users List</div>
      <div class="table-responsive m-t-40">
        <table id="myTable" class="table table-bordered table-hover table-striped">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th> Username</th>
              <th>Frist name</th>
              <th>last name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Status</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // $sql = "SELECT * FROM `res_category`";
            $sql = "SELECT * FROM `user`";
            $query = mysqli_query($conn, $sql);
            if (!mysqli_num_rows($query) > 0) {
              echo '<td colspan="7"><center>No users-Data!</center></td>';
            } else {
              while ($rows = mysqli_fetch_array($query)) {

                
                echo ' <tr><td>' . $rows[0] . '</td>
                        <td>' . $rows[1] . '</td>
                        <td>' . $rows[2] . '</td>
                        <td>' . $rows[3] . '</td>
                        <td>' . $rows[4] . '</td>
                        <td>' . $rows[5] . '</td>
                        <td>' . $rows[7] . '</td>
                        <td>' . $rows[8] . '</td>
                        <td>' . $rows[9] . '</td>
                        
                        
                           <td><a class="btn btn-danger  btn-xs m-b-10" onclick="deleteitem(' . $rows['c_id'] . ')" ><i class="fa fa-trash-o" style="font-size:16px" ></i></a> 
                           <a  class="btn btn-info  btn-sm m-b-10 m-l-5"  data-bs-toggle="modal" data-bs-target="#editCatModel" ><i class="fa fa-edit"></i></a>
                          </td></tr>';
              }
            }
            ?>
          </tbody>

        </table>
      </div>
    </div>
    <?php  include_once("footer.php") ?>
</body>

</html>