<?php
if (!isset($_GET['hostel_id'])) {
    header('location:error_page.php');
}

$hostel_id = $_GET['hostel_id'];
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";
// render the page...
?>

<section class=" hostel_body">
    <div class="header_div">

        <!-- get hostel name -->
        <?php
        $q1 = "SELECT * FROM hostel_tbl WHERE hostel_id = '$hostel_id'";
        $result1 = mysqli_query($con, $q1);

        if ($result1) {
            $row = mysqli_fetch_assoc($result1);
            $hostel_name = $row['hostel_name'];
            $hostel_image = $row['hostel_image'];
        }
        ?>
        <h3><?php echo $hostel_name; ?></h3>
        <hr id="small_hr">

    </div>
    <a href="./index.php" class="back text-light bg-primary py-2 px-3 ">&leftarrow; Back</a>
    <div class="hostel_detail_container">

        <div class="hostel_image">

            <img src="../admin/upload/<?php echo trim($hostel_image); ?>" alt="">
        </div>


        <div class="hostel_crdentials">

            <div class="text-center">

            </div>
            <div class="detail_wrapper">
                <div class="table_head"> Total rooms </div>
                <p class="detail_value badge badge-warning text-light">
                    <!-- get the number of room -->
                    <?php
                    $qr = "SELECT * FROM room_tbl WHERE room_tbl.hostel_id = '$hostel_id'";
                    $resultr = mysqli_query($con, $qr);

                    if ($resultr) {
                        $rowr = mysqli_fetch_all($resultr);
                        echo count($rowr);
                    }
                    ?>
                </p>
            </div>
            <?php
            $qh = "SELECT * FROM hostel_tbl JOIN user_tbl ON hostel_tbl.user_id = user_tbl.user_id 
                     WHERE hostel_tbl.hostel_id = '$hostel_id'";
            $resulth = mysqli_query($con, $qh);

            if ($resulth) {
                $rowh = mysqli_fetch_assoc($resulth);
            } else {
                echo mysqli_error($con);
            }
            ?>

            <div class="detail_wrapper">
                <div class="table_head ">Tell: </div>
                <div class="detail_value bg-primary text-light px-1"> <?php echo $rowh['phone']; ?></div>
            </div>
            <div class="detail_wrapper">
                <div class="table_head ">Owner: </div>
                <div class="detail_value text-capitalize"> <?php echo $rowh['fname'] . ' ' . $rowh['fname']; ?></div>
            </div>
            <div class="detail_wrapper">
                <div class="table_head">@Email: </div>
                <div class="table_head text-primary "><?php echo $rowh['email']; ?></div>

            </div>
            <hr class="bg-warning">
            <div class="detail_wrapper describe">descrptions</div>
            <p><?php echo $rowh['hostel_description']; ?></p>
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
        $qhroom = "SELECT * FROM room_tbl WHERE hostel_id = '$hostel_id'";
        $resultroom = mysqli_query($con, $qhroom);
        if ($resultroom) {
            while ($rowroom = mysqli_fetch_assoc($resultroom)) {
                $Image = trim($rowroom['room_status']);

                // get image for single room
                $qImage = "SELECT * FROM image_tbl WHERE hostel_id = '$hostel_id' AND status = '$Image'";
                $resultImage = mysqli_query($con, $qImage);
                if ($resultImage) {
                    if (mysqli_num_rows($resultImage) > 0) {
                        $rowImage = mysqli_fetch_assoc($resultImage);
                        $roomImage = $rowImage['image_name'];
                    }
                }

        ?>

                <div class="card">
                    <img src="../admin/upload/<?php echo $roomImage; ?>" width="150px" height="150px" class="card_img" alt="">
                    <div class="card_datails">
                        <div class="h5 name text-uppercase"><?php echo $rowroom['room_name']; ?></div>
                        <div class="status text-capitalize"><?php echo $rowroom['room_status'] . ' room'; ?></div>
                        <div class="prize">Ugx: <?php echo $rowroom['room_fee']; ?></div>
                        <div class="action">
                            <button id="details_btn"><a href="room_details.php?hostel_id=<?php echo $hostel_id; ?>&&image_status=<?php echo $Image; ?>&&room_id=<?php echo $rowroom['room_id']; ?>">View Detail...</a></button>
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