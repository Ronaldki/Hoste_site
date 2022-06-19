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
                <?php  
                while( $big_image){?>
                
              ?>
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