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
            <h3>bako</h3>
            <hr id="small_hr">

        </div>
        <div class="hostel_detail_container">

            <div class="hostel_image">
                <img src="../admin/uploads/IMG-62a5e0b40eb62.jpg" alt="" id="large_images">
                <div class="image_wrapper owl-carousel owl-theme">
                    <img src="../admin/uploads/IMG-62a5be5c33c7a.jpg" width="60px" height="60px" alt="" class="scralling_detail_image">
                    <img src="../admin/uploads/IMG-62a621083d1cc.jpg" width="60px" height="60px" alt="" class="scralling_detail_image">
                    <img src="../admin/uploads/IMG-62a629e90e1ff.jpg" width="60px" height="60px" alt="" class="scralling_detail_image">
                    <img src="../admin/uploads/IMG-62a621083d1cc.jpg" width="60px" height="60px" alt="" class="scralling_detail_image">
                    <img src="../admin/uploads/IMG-62a5be5c33c7a.jpg" width="60px" height="60px" alt="" class="scralling_detail_image">
                </div>
            </div>

            <div class="hostel_details ">

                <div class="hostel_crdentials">
                    <!-- <p>prize: <span>ugx. 300000</span></p> -->
                    <div class="text-center">

                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head">Room Name</div>
                        <p class="detail_value ">new york</p>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head">Room size</div>
                        <p class="detail_value ">single</p>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head ">Prize: </div>
                        <div class="detail_value">Ugx. 300000</div>
                    </div>
                    <div class="detail_wrapper">
                        <div class="table_head">Status: </div>
                        <p class="detail_value">not booked</p>
                    </div>
                    <div class="detail_wrapper describe">descrptions</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet commodi nostrum dolores facere, aspernatur reprehenderit deserunt suscipit nam tempora
                        molestias natus beatae numquam culpa a optio, consectetur doloribus possimus quos repellat ea voluptatum?</p>

                    <!-- <form class="btn-container" action=""> -->
                    <!-- <button class="btn btn-primary w-25">Book</button> -->
                    <button class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Book</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b> Book from here</b></h5>
                                    <h5 class="text-right">Welcome.......name</h5>
                                    <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Room Name...</label>
                                            <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Booking Fees:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="Fees">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Room Description:</label>
                                            <textarea class="form-control false" id="message-text" disabled></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Book</button>
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