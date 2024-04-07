<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Menu</title>
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
    <div class="container  border  border-3 p-2">
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Add Menus</div>
      <hr>

      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtDishName" class="form-label">Dish Name</label>
          <input type="text" name="txtDishName" class="form-control" id="txtDishName">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtDescription" class="form-label">Description</label>
          <input type="text" class="form-control" id="txtDescription" name="email">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtPrice" class="form-label">Price</label>
          <input type="number" class="form-control ps-2" id="txtPrice" name="Price" placeholder="₹">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtWebUrl" class="form-label">Image</label>
          <input type="file" name="file" id="file" class="form-control form-control-danger" placeholder="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="control-label">Select Restaurant</label>
            <select name="res_name" id="txtres_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
              <option>--Select Restaurant--</option>
              <?php $ssql = "select * from restaurant";
              $res = mysqli_query($conn, $ssql);
              while ($row = mysqli_fetch_array($res)) {
                echo ' <option value="' . $row['r_id'] . '">' . $row['title'] . '</option>';;
              }

              ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-actions my-3">
        <input id="btnSubmit" type="button" name="submit" class="btn btn-primary" value="Save">
        <a href="add_restaurant.php" class="btn btn-dark">Cancel</a>
      </div>

    </div>
  </div>
</body>
<script>
  $("#btnSubmit").click(function() {
    var txtDishName = $('#txtDishName').val();
    var txtDescription = $('#txtDescription').val();
    var txtPrice = $('#txtPrice').val();
    var file_data = $('#file').prop('files')[0];
    var txtres_name = $('#txtres_name').val();
    var form_data = new FormData();
    form_data.append('cmd', "AddMenus");
   
     form_data.append('txtDishName', txtDishName);
     form_data.append('txtDescription', txtDescription);
     form_data.append('txtPrice', txtPrice);
     form_data.append('file', file_data);
     form_data.append('txtres_name', txtres_name);
    
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
        alert(data);
        if (data == "1") {
          Swal.fire({
            text: "Menu Added",
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