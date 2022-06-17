<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../user/css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <section class="sticky-top">


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
        <a class="nav-link " href="#"><i class="fa fa-shopping-cart text-light">Booked</i> </a>
        
                <?php
                $con = mysqli_connect("localhost", "root", "", "beacon_db");
        
                $query = mysqli_query($con, "SELECT * FROM message_tbl WHERE status= 0");
                $count = mysqli_num_rows($query);
        
                ?>
        
                <ul class="navbar-nav mr-5 ">
                  <!-- <i class="fa fa-envelope"></i> -->
        
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle notification" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <!-- Inbox -->
        
                      <i class="fa fa-bell fa-2x text-white"></i><span class="badge badge-danger notificationicon " ><?php echo $count; ?></span>
                    </a>
        
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                      <?php
                      $query2 = mysqli_query($con, "SELECT * FROM message_tbl WHERE status= 0");
        
                      if (mysqli_num_rows($query2) > 0) {
        
                        while ($row = mysqli_fetch_assoc($query2)) {
        
                          echo '<a class="dropdown-item text-primary " href="#">' . $row['text'] . '</a>';
                          // echo '<a class="dropdown-item text-primary" href="../read_message.php?id=' . $row['id'] . ' ">' . $row['text'] . '</a>';
                          echo '<div class="dropdown-divider"></div>';
                        }
                      } else {
        
                        echo 
                        '<a class="dropdown-item text-danger font-weight-bold" href="#"> <i class="fas fa-frown-open"></i>No Message</a>';
                      }
                      ?>
        
        
                    </div>
                  </li>
                </ul>


      </div>
    </nav>
  </section>

  <script>
    $(document).ready(function() {

      $("#navbarDropdown").on("click", function() {
        // console.log("Success");
        $.ajax({
          url: "read_message.php",
          success: function(rsl) {
            console.log(rsl);
          }
        });

      });
    });
  </script>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</body>
<?php
include '../include/read_message.php';
?>