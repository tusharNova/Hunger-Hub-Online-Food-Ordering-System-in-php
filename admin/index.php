<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if( $_SESSION["adminname"])
{
	header('location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <!-- <script src="js/sweetalert.min.js"></script> -->
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/sweetalert2@11.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0 text-center">Admin login</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="username" class="form-control" id="username" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="align-items-center">
                                <button type="button" id="btnsubmit" class="btn btn-dark mt-2 al"
                                    onclick="myFunction()">Login</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function myFunction() {
        $.post("code.php", {
            cmd: 'adminlogin',
            user: $("#username").val(),
            pswd: $("#password").val(),
        },
            function (data, status) {
                ans = "Data: " + data + "\nStatus: " + status;
                if (data == 1) {
                    window.location.replace("dashboard.php")
                }
                else {
                    Swal.fire({
                        text: data,
                        icon: "error"
                    });
                }
            });
    }
</script>


</html>