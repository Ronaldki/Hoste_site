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

</body>
<script src="./js/room_deetail.js"></script>

</html>