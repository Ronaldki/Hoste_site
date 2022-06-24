
        <?php
        $con = mysqli_connect("localhost", "root", "", "beacon_db");  
        session_start();
        $sss = $_SESSION['login_id'];
        if(isset($_SESSION['login_id'])){
            
            $qr = "UPDATE message_tbl SET status ='0' WHERE id = '$sss'" ;
            $rs = mysqli_query($con, $qr);

          }
          echo 'hell';
        ?>
