<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- css -->


  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- js -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-3.5.1.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js.map"></script>

  <!-- For using icons  -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
</head>
<style>
  .sidebar-link {
    display: flex;
    align-items: center;
  }

  .sidebar-link .right-icon {
    display: inline-flex;
    transition: all ease 0.25;
  }

  .sidebar-link[aria-expanded="true"] .right-icon {
    transform: rotate(180deg);
  }
</style>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- offcanvas   button-->
      <button class="navbar-toggler me-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
      </button>
      <!-- offcanvas   button-->

      <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Hunger-Hub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex ms-auto">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
        <ul class="navbar-nav  mb-2 mb-lg-0 ml-2">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Edit profile</a></li>
              <li><a class="dropdown-item" href="#">Change Password</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- left Dashboard -->
  <!-- offcanvas  -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Core
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3 active">
              <span class="me-2"><i class="fa-solid fa-gauge"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider">
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Log
            </div>
          </li>
          <li>
            <a href="users.php" class="nav-link px-3 active">
              <span class="me-2">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </span><span>Users</span>
            </a>
          </li>
          <li>
            <a href="#collapseExample" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" role="link"
              aria-expanded="false" aria-controls="collapseExample" id="">
              <span class="me-2"><i class="fa fa-archive "></i></span>
              <span>Restaurant</span>
              <span class="ms-auto right-icon">
                <i class="fa fa-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseExample">
              <div class="">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="all_restaurant.php" class="nav-link px-3"><span>All Restaurants</span></a>
                  </li>
                  <li>
                    <a href="add_category.php" class="nav-link px-3"><span>Add Category</span></a>
                  </li>
                  <li>
                    <a href="add_restaurant.php" class="nav-link px-3"><span>Add Restaurant</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <a href="#collapseExample1" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" role="link"
              aria-expanded="false" aria-controls="collapseExample1" id="">
              <span class="me-2"><i class="fa fa-cutlery"></i></span>
              <span>Menu</span>
              <span class="ms-auto right-icon">
                <i class="fa fa-chevron-down"></i></span>
            </a>
            <div class="collapse" id="collapseExample1">
              <div class="">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="all_menu.php" class="nav-link px-3"><span>All Menus</span></a>
                  </li>
                  <li>
                    <a href="add_menu.php" class="nav-link px-3"><span>Add Menu</span></a>
                  </li>

                </ul>
              </div>
            </div>
          </li>
          <li>
            <a href="all_orders.php" class="nav-link px-3">
              <span class="me-2">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </span><span>Order</span>
            </a>
          </li>
        </ul>
      </nav>



    </div>
  </div>
  <!-- offcanvas  -->
</body>

</html>