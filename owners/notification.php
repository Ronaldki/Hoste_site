<?php
ob_start();
include "../admin/config/connect.php";
include "./includes/side_bar.php";
// include('./config/__register_house_owners.php')
?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>

        <h1 class="my-4 mx-2">Notifications</h1>
        <div class="container-fluid px-4">
        <ul class="list-group">
                <?php
                $myId = $_SESSION['owner_id'];
                $sql = "SELECT * FROM user_tbl, message_tbl WHERE (user_tbl.user_id = message_tbl.reciever_id OR user_tbl.user_id=message_tbl.user_id )
                and ( message_tbl.user_id='$myId' OR message_tbl.reciever_id='$myId' OR message_tbl.reciever_id='1000')
                GROUP BY message_tbl.id ORDER BY message_tbl.messege_date DESC";
                $res = mysqli_query($con, $sql);
                if (!$res) {
                    echo mysqli_error($con);
                } else {
                    while ($row = mysqli_fetch_array($res)) {?>

                        <div class="list-group-item">
                            <div class=" name">
                                <small class="text-secondary">
                                     <i><?php echo $row['fname'].' '. $row['lname']; ?></i> /
                                     <i><?php echo $row['email']; ?></i> / 
                                     <i><?php echo $row['phone']; ?></i> /
                                </small>
                            </div>
                            <div class="h5 text-secondary pt-2"><?php echo $row['text'] ?><span class="ml-5"> &nbsp; &nbsp;
                                    <!-- <button class="btn btn-sm bg-primary  ml-5 text-light">Reply</button></span> -->

                                    <?php
                                    if( $row['type']!='house_owner'){
                                        include('popup.php');
                                        
                                    }else{
                                        echo '';
                                    }

                                    ?>
                            </div>
                            <small class="text-secondary"> <i><?php echo $row['messege_date'] ?></i> </small>

                        </div>

                <?php

                    }
                }

                ?>
            </ul>

        </div>
    </main>
    <?php

    // include('./config/__register_house_owners.php');
    include "./includes/footer.php";

    // also update the status in the messege tbl setting status to 0
    $sql= "UPDATE message_tbl SETstatus='0' WHERE reciever_id= '$myId' ";
    $run = mysqli_query($con, $sql);
    ?>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>