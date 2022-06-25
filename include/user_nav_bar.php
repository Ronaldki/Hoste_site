<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "beacon_db");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEACON HOSTEL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../user/css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <section class="sticky-top position-relative ">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand w-25" href="home.php">Beacon Hostel</a>
      <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#all_hostel">Hostels</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">

          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search_hostel.php?" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search </button>
        </form>
        <a class="nav-link text-light "><i class="fa fa-shopping-cart text-light"></i>
          <!-- Cart functionality.... -->
          <?php
          if (!isset($_SESSION['login_id'])) {
            echo '0';
          } else {
            $session = $_SESSION['login_id'];
            $q_cart = "SELECT * FROM booking_tbl WHERE user_id = $session OR Booking_status ='pending' OR Booking_status ='confirmed' ";

            $qry_run = mysqli_query($con, $q_cart);
            if ($row = mysqli_num_rows($qry_run)) {
              echo $row;
            }
          }
          ?>

        </a>

       

        <ul class="navbar-nav mr-5 ">
          <!-- <i class="fa fa-envelope"></i> -->

          <li class="nav-item dropdown ">
            <a class="nav-link " id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
              <!-- Inbox -->
              <i class="fa fa-bell fa-2x text-white" id= 'bell_icon'></i><span class="badge badge-danger notificationicon " id="count_messe"></span>

            </a>

          </li>
        </ul>
        <!-- login and out using session -->
        <?php
        if (!isset($_SESSION['login_id'])) {
          echo '<a class="nav-link " href="login.php"><i class="text-success ">Login</i> </a>';
        } else { ?>
          <form action="index.php" method="POST">

            <?php

            echo '<button class ="text-danger logout_btn" name="log">Logout</button>';

            if (isset($_POST['log'])) {
              session_destroy();
            }
            ?>
          </form>

        <?php
        }
        //
        ?>

      </div>
      <ul class="list-group popup_content  " id="messeges_list" style=" width:300px; position:absolute; right:100px; display:none; top:4rem ">
      <li class="list-group-item text-danger"  >No Messege Yet</li>
      </ul>
    </nav>
  </section>


  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</body>
