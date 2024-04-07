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
  <title>Add Restaurant</title>
  <script src="../js/sweetalert.min.js"></script>
  <script src="../js/sweetalert2@11.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.css">
  <script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
  <script src="../js/jquery-3.5.1.js"></script>
  <script src="../js/jquery.min.js"></script>
</head>
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
    <?php echo $error;
    echo $success; ?>
    <div class="container  border  border-3 p-2">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Add Restaurant</div>
      <hr>

      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="" class="form-label">Restaurant Name</label>
          <input type="text" name="res_name" class="form-control" id="txtResname">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtBussinessEmail" class="form-label">Bussiness E-mail</label>
          <input type="text" class="form-control" id="txtBussinessEmail" name="email">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtPhone" class="form-label">Phone</label>
          <input type="text" class="form-control" id="txtPhone" name="phones">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtWebUrl" class="form-label">Website Url</label>
          <input type="text" class="form-control" id="txtWebUrl" name="url">
        </div>
      </div>
      <div class="row">
        <div class=" mb-3 mt-3 col-md-6">
          <label class="control-label">Open Hours</label>
          <select id="o_hr" name="o_hr" class="form-control" data-placeholder="Choose a Category">
            <option>--Select your Hours--</option>
            <option value="6am">6am</option>
            <option value="7am">7am</option>
            <option value="8am">8am</option>
            <option value="9am">9am</option>
            <option value="10am">10am</option>
            <option value="11am">11am</option>
            <option value="12pm">12pm</option>
          </select>
        </div>
        <div class=" mb-3 mt-3 col-md-6">
          <label class="control-label">Close Hours</label>
          <select id="c_hr" name="c_hr" class="form-control" data-placeholder="Choose a Category">
            <option>--Select your Hours--</option>
            <option value="3pm">3pm</option>
            <option value="4pm">4pm</option>
            <option value="5pm">5pm</option>
            <option value="6pm">6pm</option>
            <option value="7pm">7pm</option>
            <option value="8pm">8pm</option>
            <option value="9pm">9pm</option>
            <option value="10pm">10pm</option>
            <option value="11pm">11pm</option>
            <option value="12am">12am</option>
            <option value="1am">1am</option>
            <option value="2am">2am</option>
            <option value="3am">3am</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class=" mb-3 mt-3 col-md-6">
          <label class="control-label">Open Days</label>
          <select id="o_days" name="o_days" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
            <option>--Select your Days--</option>
            <option value="Mon-Tue">Mon-Tue</option>
            <option value="Mon-Wed">Mon-Wed</option>
            <option value="Mon-Thu">Mon-Thu</option>
            <option value="Mon-Fri">Mon-Fri</option>
            <option value="Mon-Sat">Mon-Sat</option>
            <option value="24hr-x7">24hr-x7</option>
          </select>
        </div>
        <div class="mb-3 mt-3  col-md-6">
          <div class="form-group">
            <label class="control-label">Image</label>
            <input type="file" name="file" id="file" class="form-control form-control-danger" placeholder="12n">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3 mt-3">
          <div class="form-group">
            <label class="control-label">Select Category</label>
            <select id="c_name" name="c_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
              <option>--Select Category--</option>
              <?php $ssql = "select * from res_category";
              $res = mysqli_query($conn, $ssql);
              while ($row = mysqli_fetch_array($res)) {
                echo ' <option value="' . $row['c_id'] . '">' . $row['c_name'] . '</option>';;
              }

              ?>
            </select>
          </div>
        </div>
      </div>
      <h3 class="box-title m-t-40">Restaurant Address</h3>
      <hr>
      <div class="row">
        <div class="col-md-12 ">
          <div class="form-group">

            <textarea id="txtAddress" type="text" name="address" style="height:100px;" class="form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="form-actions my-3">
        <input id="btnSubmit" type="button" name="submit" class="btn btn-primary" value="Save">
        <a href="add_restaurant.php" class="btn btn-dark">Cancel</a>
      </div>

    </div>
    <?php include_once("footer.php") ?>
</body>

<script>
  $("#btnSubmit").click(function() {

    var txtResname = $('#txtResname').val();
    var txtBussinessEmail = $('#txtBussinessEmail').val();
    var txtPhone = $('#txtPhone').val();
    var txtWebUrl = $('#txtWebUrl').val();
    var o_hr = $('#o_hr').val();
    var c_hr = $('#c_hr').val();
    var o_days = $('#o_days').val();
    var file_data = $('#file').prop('files')[0];
    var c_name = $('#c_name').val();
    var txtAddress = $('#txtAddress').val();
    var data = txtResname + " " + txtBussinessEmail + " " + txtPhone + " " + txtWebUrl + " " + o_hr + " " + c_hr + " " + o_days + " " + c_name + " " + txtAddress;
    // alert(data)
    console.log(data)
    var form_data = new FormData();
    form_data.append('cmd', "addRestaurant");
    form_data.append('txtResname', txtResname);
    form_data.append('txtBussinessEmail', txtBussinessEmail);
    form_data.append('txtPhone', txtPhone);
    form_data.append('txtWebUrl', txtWebUrl);
    form_data.append('o_hr', o_hr);
    form_data.append('o_days', o_days);
    form_data.append('file', file_data);
    form_data.append('c_hr', c_hr);
    form_data.append('c_name', c_name);
    form_data.append('txtAddress', txtAddress);


    $.ajax({
      url: 'code.php',
      dataType: 'text',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'post',
      success: function(data) {
        console.log(data);
        // alert(data);
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

      }
    });
  });
</script>

</html>