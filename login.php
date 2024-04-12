<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <?php
    include_once("navbar.php")
    ?>
    <div class="container mt-5 pt-5">
        <divc class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="mx-auto">
                            <i class="bi bi-person-circle"></i>
                        </div>

                        <input type="text" name="" id="txtusername" class="form-control my-4 py-2" placeholder="Enter UserName">
                        <input type="password" name="" id="txtpassword" class="form-control my-4 py-2" placeholder="Enter Password">
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary" id="btnlogin">Login</button>
                        <button class="btn btn-dark" id="btnclear">Clear</button>
                        <a href="#" class="nav-link my-2 text-primary">Dont ?</a>

                    </div>
                </div>
            </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#btnlogin").click(function() {
                var username = $("#txtusername").val();
                var password = $("#txtpassword").val();
                // if (username != "" || password != "") {
                //     alert("enter values")
                // } else {
;
                // }
                $.post("admin/code.php", {
                        cmd: "UserLogin",
                        username: username,
                        password: password,
                    },
                    function(data, textStatus, jqXHR) {
                    //    alert(data)
                        if(data == 1){
                            alert("Login Done")
                        }
                        else{
                            alert("fail to login")
                        }
                    },

                );

            });

            $("#btnclear").click(function() {
                $("#txtusername").val("");
                $("#txtpassword").val("");

            });
        });
    </script>
</body>

</html>