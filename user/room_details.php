<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";

?>


<section class=" hostel_body">
    <div class="header_div">
        <h3><?php  echo $_GET['hostel_name']?></h3>
        <hr id="small_hr">

    </div>
    <div class="hostel_detail_container">

        <div class="hostel_image">
            <?php
            $hostel_id =$_GET['hostel_id'];
            $status =$_GET['image_status'];
            $sql ="SELECT * FROM image_tbl WHERE hostel_id = '$hostel_id' AND status = '$status' LIMIT 5";
            $result =mysqli_query($con, $sql);
            $big_image = mysqli_fetch_assoc($result);
            ?>
            <img src="../admin/upload/<?php echo trim($big_image['image_name']); ?>" alt="" id="large_images">
            <div class="image_wrapper owl-carousel owl-theme">
               
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

                     <form class="btn-container" action="book.php">
                         <button class="btn btn-primary w-25">Book</button>
                     </div>
            </div>

        </div>
    </div>
    <hr>

   


<!-- footer -->
<?php
include "../include/user_footer.php";

?>



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
                                    <!-- <h5 class="text-right">Welcome</h5> -->
                                    <p>
                                        <?php
                                        if(isset($_SESSION['login_id'])){
                                           echo "<h4 class='text-success '>Procede To Book</h4>";
                                            
                                        }
                                        else{
                                            echo ' <a href="login.php">Please Login</a>';
                                        }
                                        ?>
                                    </p>
                                    <!-- <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button> -->
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Room Name...</label>
                                            <!-- <input type="text" class="form-control" id="recipient-name"> -->
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Booking Fees:</label>
                                            <input type="number" class="form-control" id="recipient-name" placeholder="Fees">
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
