<?php
include "../include/user_nav_bar.php";
include "../admin/config/connect.php";


?>



<section class="">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <!-- <div class="carousel-item active  ">
        <img class="d-block w-100" height="500vh" src="../admin/assets/img/testimonial-bg1.jpg" alt="First slide">
                </div> -->
      <div class="carousel-item active slide_image_parent">
        <div class="caption ">
          <div class="caption_wrapper">
            <p class="text-light"> welcome to...</p>
            <h2> beacon hostel </h2>

            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

          </div>
        </div>
        <img class="d-block w-100 slide_image " height="600px" src="../admin/upload/IMG-62a621083d1cc.jpg" alt="Second slide">
      </div>
      <div class="carousel-item slide_image_parent">
        <div class="caption ">
          <div class="caption_wrapper">
            <p class="text-light"> get your best hostel here... </p>
            <h2> on beacon hostel </h2>

            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

          </div>
        </div>
        <img class="d-block w-100 slide_image " height="600px" src="../admin/upload/IMG-62a5e08946d18.jpg" alt="Second slide">
      </div>
      <div class="carousel-item slide_image_parent">
        <div class="caption ">
          <div class="caption_wrapper">
            <p class="text-light">wish you nice stay... </p>
            <h2> in our hostel </h2>

            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

          </div>
        </div>
        <img class="d-block w-100 slide_image " height="600px" src="../admin/upload/IMG-62a629e90e1ff.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section class=" container-fluid mt-5">
  <div class="h3 text-secondary text-center">welcom to becon hostel</div>
  <hr class="bg-danger w-50">
  <div class="row px-1">

    <div class=" col-sm-7 mt-2">
      <div class="p-3 shadow-sm mt-2 mb-5 bg-white rounded ">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat consectetur sed sint?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fugiat et labore a nostrum distinctio blanditiis consectetur, reprehenderit quod dicta, doloribus itaque voluptatum quibusdam nihil totam voluptatem ad odio quas eius earum quisquam iste, dolorem deserunt! Earum vitae tempora saepe dolorum! Maiores iusto velit deserunt doloribus. Totam aut praesentium eos officia! Modi, dolorem deleniti fugit commodi earum, accusamus iusto maiores itaque atque, ipsa culpa perferendis quod animi. Vitae ipsum nisi ea, consectetur recusandae doloribus autem voluptates officia. Deserunt qui inventore soluta esse, perspiciatis aperiam similique animi maiores ex, impedit nobis ipsum totam explicabo harum nostrum sit quasi? Consequatur, nemo dicta?
      </div>
    </div>

    <?php
    include 'sort_hostel.php';
    ?>
  </div>
</section>


<!-- section for popular hostel -->
<div class="h3 text-center mt-5">Popular Hostels</div>
<hr class="w-25 bg-info">
<div class="">
  <div class="the_four_scralling_cards owl-carousel owl-theme owl_contaioner  w-75 container-fluid mt-3">

    <?php


    $sql = "SELECT * FROM hostel_tbl WHERE hostel_id IN
    (SELECT hostel_id FROM booking_tbl  GROUP BY  hostel_id ORDER BY count(hostel_id) DESC  ) 
    ORDER BY hostel_id DESC LiMIT 10 ";
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
      echo "<div>
               <div class='h2 text-center text-secondary'>
                  NO HOSTEL AVAILABLE
               </div>
               <i class = 'fa fa-home'></i>
            </div>";
    }
    ?>

  </div>
</div>


<!--  -->
<!-- section for displaying all hotels -->

<section id="all_hostel">
  <div class="h4 text-center my-3 text-primary">GET ALL HOSTELS</div>
  <hr class="w-25 bg-danger">
  <div class="all_hostel_container px-5 my-5 w-75">

    <?php
    if (isset($_GET['pages'])) {
      $_page = $_GET['pages'];
      $pages = $_page * 3;
    } else {
      $pages = 0;
    }

    $sql = "SELECT * FROM user_tbl, hostel_tbl WHERE user_tbl.user_id = hostel_tbl.user_id LIMIT $pages, 3 ";
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
      echo "<div>
               <div class='h2 text-center text-secondary'>
               NO HOSTEL AVAILABLE
               </div>
               <i class = 'fa fa-home'></i>
               </div>";
    }
    ?>

  </div>


</section>

<!-- the pagination section -->

<?Php

$sqlp = "SELECT * FROM user_tbl, hostel_tbl WHERE user_tbl.user_id = hostel_tbl.user_id";
$resultp = mysqli_query($con, $sqlp);

$total_Items = mysqli_num_rows($resultp);
$page = ceil($total_Items / 3);
?>
<nav aria-label="Page navigation example" class="bottom_pagonamtion">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="http://localhost/HostelApp/Hoste_site/user/index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php
    for ($p = 1; $p <= $page; $p++) {
      $r = $p + 1;
    ?>

      <li class="page-item "><a class="page-link browserPage" href="http://localhost/HostelApp/Hoste_site/user/index.php?pages=<?php echo $r - 2; ?>"><?php echo $r - 1; ?></a></li>

    <?php

    }
    ?>
    <li class="page-item">
      <a class="page-link " href="http://localhost/HostelApp/Hoste_site/user/index.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

<!-- the footer section -->
<?php
include "../include/user_footer.php";
?>

<!-- ........................................................ -->

<script type="text/javascript">
  var x = "<?php echo "$_page" ?>";
  var pagePhp = parseInt((x)) + 1

  // page from the browser
  var browserPage = document.querySelectorAll('.browserPage')
  for (let i = 0; i < browserPage.length; i++) {
  var element = browserPage[i];
  if(parseInt(browserPage[i].innerHTML) == pagePhp){
    element.style.background='teal'
    element.style.color='#f2f2f2'
    
  }

  }
</script>
</body>

</html>