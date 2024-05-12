<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.css">
  <script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/sweetalert2@11.js"></script>
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
        <div class="text-center h2 text-primary">
                User Registrations
            </div>
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="txtUserName">User-Name</label>
                                <input class="form-control" type="text" name="username" id="txtUserName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtFirstName">First Name</label>
                                <input class="form-control" type="text" name="firstname" id="txtFirstName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtLastName">Last Name</label>
                                <input class="form-control" type="text" name="lastname" id="txtLastName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtEmail">Email Address</label>
                                <input type="email" class="form-control" name="email" id="txtEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtPhone">Phone number</label>
                                <input class="form-control" type="text" name="phone" id="txtPhone">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="txtPassword">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="txtCpassword">Confirm password</label>
                                <input type="password" class="form-control" name="cpassword" id="txtCpassword">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="txtAddress">Delivery Address</label>
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
        $(document).ready(function() {

            $("#btnSubmit").click(function() {
                var txtUserName = $('#txtUserName').val();
                var txtFirstName = $('#txtFirstName').val();
                var txtLastName = $('#txtLastName').val();
                var txtEmail = $('#txtEmail').val();
                var txtPhone = $('#txtPhone').val();
                var txtPassword = $('#txtPassword').val();
                var txtCpassword = $('#txtCpassword').val();
                var txtAddress = $('#txtAddress').val();

                // if (txtUserName =="" || txtFirstName =="" || txtLastName =="" || txtEmail =="" || txtPhone =="" || txtPassword =="" || txtCpassword =="" || txtAddress =="" ) {
                //     alert("Invalid values");
                // }else{
                //     if(txtPassword != txtCpassword){
                //         alert("Password are not Same");
                //     }
                //     else{
                //         alert("okkkk");
                //     }
                // }
                $.post("admin/code.php", {
                        cmd: 'UserRegister',
                        txtUserName: txtUserName,
                        txtFirstName: txtFirstName,
                        txtLastName: txtLastName,
                        txtEmail: txtEmail,
                        txtPhone: txtPhone,
                        txtPassword: txtPassword,
                        txtCpassword: txtCpassword,
                        txtAddress: txtAddress,
                    },
                    function(data, textStatus, jqXHR) {
                        if (data == "1") {
                            Swal.fire({
                                text: "User Added",
                                icon: "success"
                            });
                        } else {
                            Swal.fire({
                                text: "Failed to add",
                                icon: "error"
                            });
                        }
                    }
                );
            });

            $("#btnClear").click(function() {
                $("input[type=text],input[type=password],input[type=email] ,textarea").val("");
            });
        });
    </script>

</body>

</html>