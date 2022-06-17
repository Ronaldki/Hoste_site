
        <?php
        // $con = mysqli_connect("localhost", "root", "", "beacon_db");

        $qr = "UPDATE message_tbl SET status ='1'";
        $rs = mysqli_query($con, $qr);
        
        if($rs){
            // echo "Success";
        
        } else{
            echo "Failed";
        }
        ?>
