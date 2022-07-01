<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";


$hostel_id = $_GET['hostel_id'];
$sql1 = "SELECT * FROM user_tbl JOIN hostel_tbl ON user_tbl.user_id = hostel_tbl.user_id WHERE hostel_tbl.hostel_id = '$hostel_id'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);

//   conting the number of rooms fom the hostel
$sql2 = "SELECT * FROM room_tbl WHERE hostel_id = $hostel_id";
$result2 = mysqli_query($con, $sql2);
if ($result2) {
    $cont = mysqli_num_rows($result2);
    //   echo $cont;
}


?>

<section class=" hostel_body">
    <div class="header_div">
        <h3><?php echo $row['hostel_name']; ?></h3>
        <hr id="small_hr">

    </div>
    <a href="./index.php" class="back text-light bg-primary py-2 px-3 ">&leftarrow; Back</a>
    <div class="hostel_detail_container">

        <div class="hostel_image">
            <img src="../admin/upload/<?php echo trim($row['hostel_image']); ?>" alt="">
        </div>

        <div class="hostel_details ">
            <!-- <div class="user_image ">
                <?php
                if ($row['image'] = " ") {
                    echo "<i class ='fa fa-user fa-5x text-secondary'></i>";
                } else { ?>

                    <img src="../admin/upload/<?php echo trim($row['image']); ?>" alt="">

                <?php


                }
                ?>
                <button class="btn back text-light bg-primary py-2  px-3">write to <?php echo $row['fname'] . " " . $row['lname']; ?></button>
                
            </div> -->

            <div class="hostel_crdentials">
                <!-- <p>prize: <span>ugx. 300000</span></p> -->
                <div class="text-center">

                </div>
                <div class="detail_wrapper">
                    <div class="table_head">No. of rooms: </div>
                    <p class="detail_value "><?php echo $cont; ?></p>
                </div>
                <div class="detail_wrapper">
                    <div class="table_head ">Tell: </div>
                    <div class="detail_value"> <?php echo trim($row['phone']); ?></div>
                </div>
                <div class="detail_wrapper">
                    <div class="table_head ">Owner: </div>
                    <div class="detail_value text-capitalize"> <?php echo trim($row['fname']) . " " . trim($row['lname']); ?></div>
                </div>
                <div class="detail_wrapper">
                    <div class="table_head">@Email: </div>
                    <div class="table_head"><?php echo trim($row['email']); ?></div>
                    
                </div>
                <div class="detail_wrapper describe">descrptions</div>
                <p><?php echo trim($row['hostel_description']); ?></p>
            </div>

        </div>
    </div>
    <hr>

    <!-- all the rooms available in aprticulatar hostel -->

    <div class="h5 rooms">
        <div class="h4">Rooms</div>
        <hr>
    </div>
    <div class="roomsavailable">
        <!-- getting and displaying fro the database -->
        <?php
        $sql1 = "SELECT * FROM room_tbl JOIN  image_tbl ON room_tbl.hostel_id = image_tbl.hostel_id WHERE 
                image_tbl.hostel_id = '$hostel_id' GROUP BY room_id";
        $result = mysqli_query($con, $sql1);
        // $row = mysqli_fetch_all($result, MYSQLI_ASSOC); 
        if (mysqli_num_rows($result) == 0) {
            echo "<div>No rooma available yet</div>";
        } else {
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="card">
                    <?php
                    // selecting single and duoble rom image from db
                    if ($row['room_status'] == "single") {
                        $sqlImage = "SELECT * FROM image_tbl WHERE  hostel_id = '$hostel_id' AND status = 'Single'";
                        $sqlImageresult = mysqli_query($con, $sqlImage);
                        $imageRow = mysqli_fetch_assoc($sqlImageresult);
                        // if the ro is avaolable
                        if ($imageRow) { ?>
                            <img src="../admin/upload/<?php echo trim($imageRow['image_name']); ?>" width="150px" height="150px" class="card_img" alt="">
                        <?php
                        } else { ?>
                            <img src="../admin/upload/<?php echo trim($row['image_name']); ?>" width="150px" height="150px" class="card_img" alt="">
                        <?php
                        }

                        // checkin for double room
                    } else if ($row['room_status'] == "double") {
                        $sqlImages = "SELECT * FROM image_tbl WHERE  hostel_id = '$hostel_id' AND status = 'Double'";
                        $sqlImageresults = mysqli_query($con, $sqlImages);
                        $imageRows = mysqli_fetch_assoc($sqlImageresults);
                        // if the ro is avaolable
                        if ($imageRows) { ?>
                            <img src="../admin/upload/<?php echo trim($imageRows['image_name']); ?>" width="150px" height="150px"alt="">
                        <?php
                        } else { ?>
                            <img src="../admin/upload/<?php echo trim($row['image_name']); ?>" width="150px" height="150px"  alt="">
                    <?php
                        }
                    }
                    ?>

                    <div class="card_datails">
                        <div class="h5 name text-uppercase"><?php echo trim($row['room_name']); ?></div>
                        <div class="status text-capitalize"><?php echo trim($row['room_status']).' '.'room'; ?></div>
                        <div class="prize">Ugx: <?php echo trim($row['room_fee']); ?></div>
                        <div class="action">
                            <button id="book_btn"><a href="">Book</a></button> &nbsp; &nbsp;
                            <button id="details_btn"><a href="room_details.php?hostel_id=<?php echo trim($row["hostel_id"])?>&room_id=<?php echo trim($row["room_id"])?>&image_status=<?php echo trim($row["status"])?>">View Detail...</a></button>
                            <!--  -->
                        </div>
                    </div>

                </div>
        <?php
            }
        }

        ?>



    </div>
</section>


<!-- footer -->
<?php
include "../include/user_footer.php";

?>



<script src="./js/jQuery v3.6.0.js"></script>
<script src="./js/room_deetail.js"></script>
</body>

</html>