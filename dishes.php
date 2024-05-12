<!DOCTYPE html>
<html lang="en">
<?php
include_once('connection/connect.php')

?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dishes || Hunger-Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php
    include_once("navbar.php")
    ?>

  <?php $ress= mysqli_query($conn,"select * from restaurant where r_id='$_GET[res_id]'");
        $rows=mysqli_fetch_array($ress);
     
     ?>

  <section style="margin-top: 45px; background-image: url('images/img/restrrr.png');">
    <div class="container p-5">
      <div class="row">
        <div class="col-sm-4">
          <div class="image-wrap">
            <figure style="height: 200px; width: 200px;">
              <?php echo '<img src="admin/imgRes/' . $rows['image'] . '" alt="Restaurant logo">'; ?>
            </figure>
          </div>
        </div>
        <div class="col-sm-8">
          <h6 class="display-4 text-white">
            <?php echo $rows['title']; ?>
          </h6>
          <p class="h5 text-white">
            <?php echo $rows['address']; ?>
          </p>
        </div>

      </div>
    </div>
  </section>
  <div style="margin-top: 10px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card text-center ">
            <div class="card-header h3 fw-bold">Your Cart</div>
            <div class="card-body">Content</div>
            <div class="card-footer"><p>Free Delivery!</p>
              <button class="btn btn-danger">Checkout</button>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="p-2 border border-2 border-secondery rounded-2">
            <?php 
              $result = mysqli_query($conn , "select * from dishes where rs_id='$_GET[res_id]'");
             
              

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>