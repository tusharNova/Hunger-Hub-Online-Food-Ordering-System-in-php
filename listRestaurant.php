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
                <div class="col-sm-4 text-center link-item active"><span>1</span><a href="#">Choose Restaurant</a></div>
                <div class="col-sm-4 text-center link-item"><span>2</span><a href="#">Choose Restaurant</a></div>
                <div class="col-sm-4 text-center link-item"><span>3</span><a href="#">Choose Restaurant</a></div>
            </div>
        </div>

    </div>
</body>
</html>