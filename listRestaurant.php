<!DOCTYPE html>
<html lang="en">
<?php
include_once('connection/connect.php')

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include_once("navbar.php")
    ?>
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="text-center text-primary h1 display-4">
                    List of Restaurant
                </div>
            </div>
        </div>

    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                    <div class="bg-gray restaurant-entry">
                        <div class="row">
                            <?php $ress= mysqli_query($conn,"select * from restaurant");
                                      while($rows=mysqli_fetch_array($ress))
                                      {
                                                
                    
                                                 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                                        <div class="entry-logo">
                                                            <a class="img-fluid" href="dishes.php?res_id='.$rows['r_id'].'" > <img src="admin/imgRes/' . $rows['image'] . '" alt="Food logo"></a>
                                                        </div>
                                                        <!-- end:Logo -->
                                                        <div class="entry-dscr">
                                                            <h5><a href="dishes.php?res_id='.$rows['r_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
                                                            
                                                        </div>
                                                        <!-- end:Entry description -->
                                                    </div>
                                                    
                                                     <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                                            <div class="right-content bg-white">
                                                                <div class="right-review">
                                                                    
                                                                    <a href="dishes.php?res_id='.$rows['r_id'].'" class="btn btn-purple">View Menu</a> </div>
                                                            </div>
                                                        </div>';
                                      }
                    
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>