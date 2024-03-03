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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores optio omnis iusto ex? Ex vitae deleniti, est, unde harum asperiores optio numquam quibusdam consequatur doloremque, id modi neque. Magni, molestias.
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>

       
    </div>
</body>

</html>