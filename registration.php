<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .midDiv {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <?php
    include_once("navbar.php")
    ?>
    <div class="container mt-5 pt-5">
        <div class="row shadow border-0">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">User-Name</label>
                                <input class="form-control" type="text" name="username" id="txtUserName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">First Name</label>
                                <input class="form-control" type="text" name="firstname" id="txtFirstName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input class="form-control" type="text" name="lastname" id="txtLastName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="text" class="form-control" name="email" id="txtEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Phone number</label>
                                <input class="form-control" type="text" name="phone" id="txtPhone">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="txtPwsd">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputPassword1">Confirm password</label>
                                <input type="password" class="form-control" name="cpassword" id="txtCpassword">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="exampleTextarea">Delivery Address</label>
                                <textarea class="form-control" id="txtAddress" name="address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center my-3">
                                <button class="btn btn-primary" id="btnSubmit">Submit</button>
                                <button class="btn btn-dark" id="btnClear">Clear</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () { 

            $("#btnSubmit").click(function() {
                alert("okkkk")
            });

        });
    </script>

</body>

</html>