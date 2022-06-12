<?php
    include "../include/user_nav_bar.php";
    include "../admin/config/connect.php";

?>
 <?php
                $hostel_id = $_GET['hostel_id'];
               $sql1 = "SELECT * FROM user_tbl JOIN hostel_tbl ON user_tbl.user_id = hostel_tbl.user_id WHERE hostel_tbl.hostel_id = '$hostel_id'";
               $result = mysqli_query($con, $sql1);
               $row = mysqli_fetch_assoc($result);
               
               //   conting the number of rooms fom the hostel
               $sql2 = "SELECT * FROM room_tbl WHERE hostel_id = $hostel_id";
               $result2 = mysqli_query($con, $sql2);
               if($result2){
                  $cont = mysqli_num_rows($result2);
                //   echo $cont;
               }else{
                   echo mysqli_error($con);
               }
            //    $row = mysqli_fetch_assoc($result2);
            //    echo $row;
      
        ?>

    <section class=" hostel_body">
        <div class="header_div">
            <h3><?php echo $row['hostel_name'];?></h3>
            <hr id="small_hr">
            
        </div>
        <a href="./home.php" class="back text-light bg-primary py-2 px-3 ">&leftarrow; Back</a>
        <div class="hostel_detail_container">

            <div class="hostel_image">
                <img src="../admin/uploads/<?php echo trim($row['hostel_image']); ?>" alt="">
            </div>

            <div class="hostel_details">
                <div class="user_image">
                    <?php 
                    if($row['image']=" "){
                        echo "<i class ='fa fa-user fa-5x text-secondary'></i>";
                    }else{?>
                    
                    <img src="../admin/uploads/<?php echo trim($row['image']);?>" alt="">
                    
                    <?php


                    }
                    ?>
                    <p class="name"><?php echo trim($row['fname'])." ".trim($row['lname']); ?></p>
                    <a href="#" class="back text-light bg-primary py-2 px-3">write to <?php echo $row['fname']." ".$row['lname'];?></a>


                </div>

                <div class="hostel_crdentials">
                    <!-- <p>prize: <span>ugx. 300000</span></p> -->
                    <div class="detail_wrapper"> <div class="table_head">No. of rooms: </div> <div class="detail_value"><?php echo $cont;?></div></div>
                    <div class="detail_wrapper"> <div class="table_head">Tell: </div> <div class="detail_value"><?php echo trim($row['phone']); ?></div></div>
                    <div class="detail_wrapper"> <div class="table_head">@Email: </div> <div class="detail_value"><?php echo trim($row['email']); ?></div></div>
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

                    <?php
                    $qry3  ="SELECT * FROM room_tbl, image_"
                    ?>
            <div class="card">
                <img src="../admin/uploads/IMG-62a1b1fbb9e23.jpg"  width="150px" height="150px" alt="">
                <div class="card_datails">
                    <div class="h5 name">SA1</div>
                    <div class="status">Single room</div>
                    <div class="prize">Ugx: 300000</div>
                    <div class="action">
                        <button id="book_btn"><a href="">Book</a></button>
                        <button id="details_btn"><a href="">View Detail...</a></button>
                    </div>
                </div>

            </div>
           
            

        </div>
    </section>


    <!-- footer -->
    <?php
    include "../include/user_footer.php";
    
    ?>

</body>

</html>