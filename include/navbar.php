<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="../admin/css/bootstrap.min.css"> -->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../admin/css/sweetalert2.min.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="../admin/js/sweetalert2.all.min.js"></script>
    <link href="../admin/css/style2.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="../admin/css/toggle.css"> -->
    <?php

    // setting up the session for loggin in
    session_start();
    if (!isset($_SESSION['admin_login_id'])) {

        // take us back to the login form
        header("location:index.php");
    }

    ?>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../admin/css/styles.css">
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="home.php"><i class="fa fa-home"></i>&nbsp; Hostels</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    $sess = $_SESSION['admin_login_id'];
                    $sql = "SELECT * FROM user_tbl WHERE user_id = '$sess' AND status='active'";
                    $result = mysqli_query($con, $sql);
                    if(!$result){
                        echo mysqli_error($con).'//////////////////';
                    }

                    $rows = mysqli_fetch_assoc($result);
                    if ($rows['image'] != '') {
                        echo '<i  class="fa fa-user"></i>';
                    } else { ?>
                        <img src="../admin/assets/img/testimonial-bg1.jpg" alt="" width="40px " ; height="40px"class="rounded" ;>
                    <?php
                    }
                    ?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Beacon</div>
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Admin
                        </a>
                        <!-- <div class="sb-sidenav-menu-heading">Controller</div> -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Services
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-secondary" href="layout-static.php">Add Hostel</a>
                                <a class="nav-link text-secondary" href="layout-sidenav-light.php">Add Room</a>
                                <a class="nav-link text-secondary" href="hostel_images.php">Hostel image</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                            </div>
                        </a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <!-- <a class="nav-link" href="login.php">Login</a> -->
                                <a class="nav-link" href="register.php">Register Admin</a>
                                <a class="nav-link" href="register_house_owners.php">Register House owners</a>
                                <a class="nav-link" href="password.php">Forgot Password</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">More Infor</div>
                        <a class="nav-link" href="charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo "  " . $_SESSION['user_name']; ?>
                </div>
            </nav>
        </div>

        <script src="../admin/js/jQuery.js"></script>
        <script src="../admin/js/custom.js"></script>