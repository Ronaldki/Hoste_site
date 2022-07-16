<?php
include('./includes/side_bar.php');
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid text-secondary px-4">
            <h3 class="mt-4">HOSTELS </h3>
            <div class="wrapper d-flex">

            <?php
            $user_id =  $_SESSION['owner_id'];

            $sql = "SELECT *
            FROM hostel_tbl JOIN room_tbl ON  hostel_tbl.hostel_id = room_tbl.hostel_id 
            WHERE hostel_tbl.user_id = '$user_id' GROUP BY hostel_tbl.hostel_id" ;
           
           $res = mysqli_query($con, $sql);
           if($res){
               if(mysqli_num_rows($res)==0){
                   echo "<h4 class='mt-4'> YOU HAVE NO HOSTEL VISIBLE TO THE USERS.. </h4>";

               }else{
                   while($row = mysqli_fetch_assoc($res)){?>
                  
                  <a href="rooms.php?hostel_id=<?php echo $row['hostel_id'] ?>&hostel_name=<?php echo $row['hostel_name'];?>" class=" mx-3 shadow-sm" style="width: 18rem; text-decoration:none">
                       <img class="card-img-top w-100 " height="370px" src="../admin/upload/<?php echo trim($row['hostel_image']);?>" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="text-capitaliz" style="    text-transform: capitalize;"><?php echo $row['hostel_name'];?></h5>
                            Added on: &nbsp;<small class="text-secondary"><i><?php echo $row['created_date'];?></i></small>
                       </div>
                   </a>
                   
                   <?php
                   }

               }
           }
            
            ?>
            </div>

        </div>
    </main>

    <?php

    include('./includes/footer.php')
    ?>