<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";
// 
?>



<!-- section for popular hostel -->



<!--  -->
  <?php
    include 'sort_hostel.php';
    ?>
<!-- section for displaying all hotels -->
<section id="all_hostel">
  <div class="h4 text-center my-3 text-primary">SEARCH RESULT</div>
  <hr class="w-25 bg-danger">
  <!-- <div class=""> -->
    <div class="all_hostel_container px-5 my-5">

      <?php
      $search = $_GET['search'];
      $sql = "SELECT * FROM hostel_tbl WHERE hostel_name LIKE '%$search%' OR hostel_description LIKE '%$search%' ";
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