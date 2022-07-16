
        <?php
        $con = mysqli_connect("localhost", "root", "", "beacon_db");
        session_start();
        if (isset($_SESSION['login_id'])) {
          $sss = $_SESSION['login_id'];

          $qr = "UPDATE message_tbl SET status ='0' WHERE  reciever_id = '$sss'";
          $rs = mysqli_query($con, $qr);
          echo $sss;
          // 
        }
