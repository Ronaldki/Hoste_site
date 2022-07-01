<?php
ob_start();
include "./config/connect.php";
include "../include/navbar.php";
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
                $sql = "SELECT * FROM user_tbl, message_tbl WHERE user_tbl.user_id=message_tbl.user_id 
                AND message_tbl.user_id='$myId' AND message_tbl.user_id='$myId'
                ORDER BY message_tbl.messege_date DESC";
                $res = mysqli_query($con, $sql);
                if (!$res) {
                    echo mysqli_error($con);
                } else {
                    while ($row = mysqli_fetch_array($res)) {
                        $user_id = $row['user_id'];
                        $name = $row['lname'];
                        // select the ecact sender from db
                        $id = $row['reciever_id'];
                        // selecting receiver name from the database
                        $name = "SELECT * FROM  user_tbl WHERE user_id = $id";

                        $exe = mysqli_query($con, $name);
                        while ($names = mysqli_fetch_assoc($exe)) {
                            $recivers = $names['fname'] . ' ' . $names['lname'];
                            $recivers_email = $names['email'];
                        }
                ?>



                        <div class="list-group-item">
                            <div class=" name">
                                <small class="text-secondary"> <i><?php echo $recivers; ?></i> </small> |
                                <small class="text-secondary"> <i><?php echo $recivers_email; ?></i> </small>
                            </div>
                            <div class="h5 text-secondary pt-2"><?php echo $row['text'] ?><span class="ml-5"> &nbsp; &nbsp;
                                    <!-- <button class="btn btn-sm bg-primary  ml-5 text-light">Reply</button></span> -->

                                    <?php


                                    include('reply.php');
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



    include('./config/__register_house_owners.php');
    include "../include/footer.php";
    ?>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>