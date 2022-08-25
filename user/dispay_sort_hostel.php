<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";

// <!-- section for popular hostel -->

    include 'sort_hostel.php';
    if (isset($_GET['min']) && isset($_GET['max']) && isset($_GET['status'])){

      $min = $_GET['min'];
      $max =$_GET['max'];
      $status = $_GET['status'];
    }else{

      $min = '';
      $max ='';
      $status = '';
    }
      ?>
<!-- section for displaying all hotels -->
<section id="all_hostel">
  <div class="h4 text-center my-3 text-primary">
    <?php
    if(!$min=='' || !$max==''){
      
    }else if(!$status==''){
      echo 'HOSTELS WITH '.strtoupper($status).' ROOMS';
      
    }else{
      echo '<span>PLEASE, ENTER THE THE RANGE YOU WANT</span>';

    }
    ?>
  </div>
  <hr class="w-25 bg-danger">
  <!-- <div class=""> -->
    <div class="all_hostel_container px-5 my-5">

      <?php
      if($min=="" || $max==""){
        // checking for single or double room
          $sql = "SELECT * FROM hostel_tbl JOIN room_tbl ON hostel_tbl.hostel_id = room_tbl.hostel_id WHERE room_tbl.room_status = '$status' GROUP BY hostel_tbl.hostel_id ";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
      
              <div class="card_container ">
                <div class="cards">
                  <a href="./hostel_detail.php?hostel_id=<?php echo $row['hostel_id']; ?>" class="image"><img src="../admin/upload/<?php echo trim($row['hostel_image']); ?>" alt=""></a>
                  <div class="card_hostel_name "> <?php echo $row["hostel_name"] ?></div>
                  <div class="view_hostel_details_btn"> <a href="./hostel_detail.php?hostel_id=<?php echo $row['hostel_id']; ?>"> View Details >>></a></div>
                </div>
              </div>
          <?php
            }
          } else {
            echo "<div class='w-75 text-center ml-5 error_icon'>
                   <div class='h2 text-center text-secondary w-100 text-center'>
                      NO HOSTEL AVAILABLE
                   </div>
                   <i class = 'fa fa-exclamation-triangle fa-10x text-danger '></i>
                </div>";
          }
          ?><?php
    }else if(!$max=='' || !$min=='' ){
         // checking for single or double room
         $sql = "SELECT * FROM hostel_tbl JOIN room_tbl ON hostel_tbl.hostel_id = room_tbl.hostel_id WHERE room_tbl.room_fee BETWEEN '$min' AND '$max' GROUP BY hostel_tbl.hostel_id ";
         $result = mysqli_query($con, $sql);
         if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) { ?>
     
             <div class="card_container ">
               <div class="cards">
                 <a href="./hostel_detail.php?hostel_id=<?php echo $row['hostel_id']; ?>" class="image"><img src="../admin/upload/<?php echo trim($row['hostel_image']); ?>" alt=""></a>
                 <div class="card_hostel_name "> <?php echo $row["hostel_name"] ?></div>
                 <div class="view_hostel_details_btn"> <a href="./hostel_detail.php?hostel_id=<?php echo $row['hostel_id']; ?>"> View Details >>></a></div>
               </div>
             </div>
         <?php
           }
         } else {
           echo "<div class='w-75 text-center ml-5 error_icon'>
                  <div class='h2 text-center text-secondary w-100 text-center'>
                     NO HOSTEL AVAILABLE
                  </div>
                  <i class = 'fa fa-exclamation-triangle fa-10x text-danger '></i>
               </div>";
         }
         ?><?php
    }
    
    ?>
    </div>
  <!-- </div> -->
</section>

<!-- the footer section -->
<?php
include "../include/user_footer.php";
?>

<!-- ........................................................ -->

<script src="../user/js/index.js"></script>
</body>

</html>