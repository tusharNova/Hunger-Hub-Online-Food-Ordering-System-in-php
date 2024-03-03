<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Category</title>
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
            <input type="text" class="col-md-12 mt-4  form-control form-control-lg">
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </div>
        </div>

        <div class="container  border  border-3 p-2 mt-5">
            Listed Categories
            <div>
                lorem1000
            </div>
        </div>

       
    </div>
</body>

</html>