<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";

?>
<?php
// $hostel_id = $_GET['hostel_id'];
// $sql1 = "SELECT * FROM user_tbl JOIN hostel_tbl ON user_tbl.user_id = hostel_tbl.user_id WHERE hostel_tbl.hostel_id = '$hostel_id'";
// $result = mysqli_query($con, $sql1);
// $row = mysqli_fetch_assoc($result);

// //   conting the number of rooms fom the hostel
// $sql2 = "SELECT * FROM room_tbl WHERE hostel_id = $hostel_id";
// $result2 = mysqli_query($con, $sql2);
// if ($result2) {
    //     $cont = mysqli_num_rows($result2);
    //     //   echo $cont;
    // } else {
        //     echo mysqli_error($con);
        // }
        
        
        ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    
    
    
    
    <section class=" hostel_body">
        <div class="header_div">
            <h3>
                <?php
                $htid = $_GET['hostel_id'];
               
                $sql = "SELECT * FROM hostel_tbl WHERE hostel_id = '$htid'";
                $rslts = mysqli_query($con, $sql);
                
                $rows = mysqli_fetch_assoc($rslts);
                echo $rows['hostel_name'];
                ?>
            </h3>
            <hr id="small_hr">
            
        </div>
        <div class="hostel_detail_container">
            
            <div class="hostel_image">
                
                <?php
                $hid = $_GET['hostel_id'];
                $sts = $_GET['image_status'];
                $sql = "SELECT * FROM image_tbl WHERE hostel_id = '$hid' AND status ='$sts'";
                
                $rslt = mysqli_query($con, $sql);
                
                $row = mysqli_fetch_assoc($rslt);

                ?>
                <img src="../admin/upload/<?php echo trim($row['image_name']); ?>" alt="" id="large_images">

                <div class="image_wrapper owl-carousel owl-theme">
                    
                    <?php
                    $sql = "SELECT * FROM image_tbl WHERE hostel_id = '$hid' AND status ='$sts'";
                    $rslt = mysqli_query($con, $sql);
                    while ($data = mysqli_fetch_assoc($rslt)) { ?>


                        <img src="../admin/upload/<?php echo trim($data['image_name']); ?>" width="60px" height="60px" alt="" class="scralling_detail_image">
                    <?php
                    }
                    ?>



                </div>
            </div>
            
            <div class="hostel_details ">

                <div class="hostel_crdentials">
                    <!-- ..............Get Room details............... -->
                    <?php
                    // $qry = "SELECT * FROM room_tbl WHERE hostel_id = '$hid'"; 
                    $roomid = $_GET['room_id'];
                    $qry =  "SELECT * FROM  room_tbl JOIN hostel_tbl ON hostel_tbl.hostel_id = room_tbl.hostel_id WHERE hostel_tbl.hostel_id = '$hid' AND room_tbl.room_id= '$roomid'";
                    $ex = mysqli_query($con, $qry);
                    
                    if (!$ex) {
                        echo mysqli_error($con);
                    }
                    $ex_results = mysqli_fetch_assoc($ex);
                    ?>

                    <div class="detail_wrapper">
                        <div class="table_head">Room Name</div>
                        <p class="detail_value "><?php echo $ex_results['room_name']; ?></p>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head">Room size</div>
                        <p class="detail_value "><?php echo $ex_results['room_status']; ?></p>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head ">Prize: </div>
                        <div class="detail_value">Ugx:<?php echo $ex_results['room_fee']; ?></div>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head">Status: </div>
                        <p class="detail_value">not booked</p>
                    </div>
                    <div class="detail_wrapper describe">descrptions</div>
                    <p><?php echo $ex_results['hostel_description']; ?></p>
                    
                    <?php include "./config/__booking.php";?>
                    <!-- <form class="btn-container" action=""> -->
                        <!-- <button class="btn btn-primary w-25">Book</button> -->


                        

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b> Book from here</b></h5>
                                    <!-- <h5 class="text-right">Welcome</h5> -->
                                    <p>
                                        <?php
                                        if (isset($_SESSION['login_id'])) {
                                            echo "<h6 class='text-success '>Proceed To Book</h6>";
                                        } else {
                                            echo ' <a href="login.php">Please Login</a>';
                                        }
                                        ?>
                                    </p>
                                    <!-- <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button> -->
                                </div>
                                <div class="modal-body">
                                    <form method="POST" >
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label"><?php echo $ex_results['room_name']; ?></label>
                                            <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Booking Fees:</label>
                                            <input type="number" class="form-control" id="recipient-name" placeholder="Fees" name="fees">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" name="sub">Book</button>
                                        </div>
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        </div>
        <hr>




        <!-- footer -->
        <?php
        include "../include/user_footer.php";

        ?>


        <script src="">
            var exampleModal = document.getElementById('exampleModal')
            exampleModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var recipient = button.getAttribute('data-bs-whatever')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var modalBodyInput = exampleModal.querySelector('.modal-body input')

                modalTitle.textContent = 'New message to ' + recipient
                modalBodyInput.value = recipient
            })
        </script>
</body>
<script src="./js/room_deetail.js"></script>


</html>