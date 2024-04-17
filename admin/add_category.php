<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Category</title>
  <!-- <script src="js/sweetalert.min.js"></script> -->
  <script src="../js/sweetalert.min.js"></script>
  <script src="../js/sweetalert2@11.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.css">
  <script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
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
    <div class="container  border  border-3 p-2 ">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Add Restaurant Category</div>
      <hr>
      <div class="mt-4 h5">Category</div>
      <input type="text" class="col-md-12 mt-4 form-control form-control-lg" id="txtcategory">
      <div class="mt-4">
        <button type="button" class="btn btn-primary" onclick="addcategory()">Save</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
      </div>
    </div>

    <div class="container  border  border-3 p-2 mt-5">
      Listed Categories
      <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores optio omnis iusto ex? Ex vitae deleniti, est,
        unde harum asperiores optio numquam quibusdam consequatur doloremque, id modi neque. Magni, molestias.
      </div>
      <div class="table-responsive m-t-40">
        <table id="myTable" class="table table-bordered table-hover table-striped">
          <thead class="thead-dark">
            <tr>
              <th>Sr NO.</th>
              <th>Category Name</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM `res_category`";
            $query = mysqli_query($conn, $sql);
            if (!mysqli_num_rows($query) > 0) {
              echo '<td colspan="7"><center>No Categories-Data!</center></td>';
            } else {
              while ($rows = mysqli_fetch_array($query)) {
                echo ' <tr><td>' . $rows['c_id'] . '</td>
                        <td>' . $rows['c_name'] . '</td>
                        <td>' . $rows['date'] . '</td>
                        
                           <td><a class="btn btn-danger  btn-xs m-b-10" onclick="deleteitem(' . $rows['c_id'] . ')" ><i class="fa fa-trash-o" style="font-size:16px" ></i></a> 
                           <a  class="btn btn-info  btn-sm m-b-10 m-l-5"  data-bs-toggle="modal" data-bs-target="#editCatModel" ><i class="fa fa-edit"></i></a>
                          </td></tr>';
              }
            }
            ?>
          </tbody>

        </table>
      </div>
      <!-- Button to Open the Modal -->
      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCatModel">
        Open modal
      </button> -->

      <!-- The Modal -->
      <div class="modal fade" id="editCatModel">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("footer.php"); ?>
</body>
<script>
  function addcategory() {
    if ($("#txtcategory").val() == "") {
      alert("invalid Enter")
    } else {
      $.post("code.php", {
        cmd: "addcategory",
        item: $("#txtcategory").val(),
      }, function(data, status) {
        if (data == "1") {
          Swal.fire({
            text: "Category Added",
            icon: "success"
          });
        } else {
          Swal.fire({
            text: "Failed to add",
            icon: "error"
          });
        }
      });
      // location.reload();
    }
  }

  function deleteitem(id) {
    debugger

    $.post("code.php", {
        cmd: 'deleteCategory',
        id: id,
      },
      function(data, status) {
        alert(data)
      });
    location.reload();
  }
</script>

</html>