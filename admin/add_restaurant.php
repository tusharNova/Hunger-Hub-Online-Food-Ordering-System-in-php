<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Restaurant</title>
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
      <div class="bg-primary h4 text-white rounded-2 text-center p-3">Add Restaurant</div>
      <hr>
      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="" class="form-label">Restaurant Name</label>
          <input type="text" class="form-control" id="txtResname">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtBussiness" class="form-label">Bussiness E-mail</label>
          <input type="text" class="form-control" id="txtBussiness">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtPhone" class="form-label">Phone</label>
          <input type="text" class="form-control" id="txtPhone">
        </div>
        <div class="mb-3 mt-3 col-md-6">
          <label for="txtWebUrl" class="form-label">Website Url</label>
          <input type="text" class="form-control" id="txtWebUrl">
        </div>
      </div>
      <div class="row">
        <div class=" mb-3 mt-3 col-md-6">
          <label class="control-label">Open Hours</label>
          <select id="o_hr" class="form-control" data-placeholder="Choose a Category">
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
          <select id="c_hr" class="form-control" data-placeholder="Choose a Category">
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
          <select id="o_days" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
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
            <input type="file" name="file" id="setImg" class="form-control form-control-danger" placeholder="12n">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3 mt-3">
          <div class="form-group">
            <label class="control-label">Select Category</label>
            <select name="c_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
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

            <textarea name="address" type="text" style="height:100px;" class="form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="form-actions my-3">
        <input type="button" name="btnSubmit" class="btn btn-primary" value="Save">
        <a href="add_restaurant.php" class="btn btn-dark">Cancel</a>
      </div>


    </div>
    <?php include_once("footer.php") ?>
</body>

</html>