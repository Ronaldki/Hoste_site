<?php
include('./includes/side_bar.php');
$hostel_name = $_GET['hostel_name'];
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid text-secondary px-4">
            <h3 class="m-4 text-capitalize">rooms in <?php echo $hostel_name ?> </h3>
            <div class="wrapper d-flex">

                <?php
                $hostel_id = $_GET['hostel_id'];
                $user_id = $_SESSION['owner_id'];
                $sql = "SELECT * FROM hostel_tbl JOIN room_tbl ON  hostel_tbl.hostel_id = room_tbl.hostel_id
                        WHERE hostel_tbl.user_id = '$user_id' AND room_tbl.hostel_id = '$hostel_id'";

                $res = mysqli_query($con, $sql);

                if ($res) {
                    if (mysqli_num_rows($res) == 0) {
                        echo "<h4 class='mt-4'> YOUR ROOMS VISIBLE TO THE USERS.. </h4>";
                    } else {
                        while ($row = mysqli_fetch_assoc($res)) { ?>

                            <div class=" mx-3 shadow-sm" style="width: 18rem; text-decoration:none">
                                <!-- selecting the image -->
                                <?php
                                $room_id = $row['room_id'];

                                $status = trim($row['room_status']);
                                $img = "SELECT * FROM image_tbl WHERE hostel_id = '$hostel_id' AND status= '$status' ";
                                $resimg = mysqli_query($con, $img);
                                if (mysqli_num_rows($resimg) == 0) { ?>

                                    <img class="card-img-top w-100 " height="300px" src="../admin/upload/<?php echo trim($row['hostel_image']); ?>" alt="Card image cap">
                                <?php
                                } else {
                                    $image = mysqli_fetch_assoc($resimg); ?>

                                    <img class="card-img-top w-100 " height="300px" src="../admin/upload/<?php echo trim($image['image_name']); ?>" alt="Card image cap">
                                <?php
                                }


                                ?>

                                <!-- selecting the image -->

                                <div class="card-body">
                                    <h4 class="text-capitalize text-primary"><?php echo $row['room_name']; ?></h4>
                                    <h6 class="text-capitalize text-secondary">Fee: ugx <?php echo $row['room_fee']; ?></h6>
                                    <h6 class="text-capitalize text-secondary"><?php echo $row['room_status'] . ' ' . 'room'; ?></h6>
                                    <?php
                                    $sqlbook = "SELECT * FROM booking_tbl WHERE room_id = '$room_id'AND 
                                                hostel_id = '$hostel_id' ORDER BY data_crated DESC";
                                    $qry = mysqli_query($con, $sqlbook);
                                   
                                   
                                    if (mysqli_num_rows($qry) == 0) { ?>
                                        <h6 class=" btn btn-sm text-capitalize text-dark bg-warning">not booked</h6>
                                        <?php

                                    } else {
                                        $book = mysqli_fetch_assoc($qry);
                                        if ($book['Booking_status'] == 'pending') {
                                            // echo $fees
                                            ?>

                                            <h6 class=" btn btn-sm text-capitalize text-light bg-success">pending  </h6>  &nbsp;For <i class="  badge bg-warning text-dark"><?php echo $book['fee_paid'];?></i>

                                        <?php
                                        

                                        } else if ($book['Booking_status'] == 'cancelled') { ?>
                                            <h6 class=" btn btn-sm text-capitalize text-light bg-danger">cancelled</h6>  &nbsp;For <i class="  badge bg-warning text-dark"><?php echo $book['fee_paid'];?></i>

                                        <?php
                                        } else if ($book['Booking_status'] == 'confirmed') { ?>
                                            <h6 class=" btn btn-sm text-capitalize text-light bg-primary">confirmed </h6> &nbsp;For <i class="  badge bg-warning text-dark"><?php echo $book['fee_paid'];?></i>
                                    <?php
                                        }
                                    }

                                    ?>

                                    <div>
                                        Added on: &nbsp;<small class="text-secondary"><i><?php echo $row['date_create']; ?></i></small>
                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    }
                } else {
                    echo mysqli_error($con);
                }

                ?>
            </div>

        </div>
    </main>

    <?php

    include('./includes/footer.php')
    ?>