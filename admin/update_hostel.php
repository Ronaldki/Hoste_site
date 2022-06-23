<?php
ob_start();
include('./config/connect.php');
include "../include/navbar.php";

$id = $_GET['update'];

$query = "SELECT hostel_name, hostel_description FROM hostel_tbl WHERE hostel_id = '$id'";
$query_run = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($query_run);



?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">

    <link rel="stylesheet" href="../admin/css/style2.css">
    <main>
        <div class="container-fluid px-4">

            <h3 class="mt-4 text-capitalize"> Edit <?php echo $row['hostel_name']; ?></h3>




            <div class="card-body">
            <form method='post'  action="./config/__update_hostel.php">
                <input type="hidden" value="<?=  $id ?>" name="id">
                    <div class="row mb-3">
                       
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='hostelname' class="form-control" id="inputLastName" type="text" value="<?= $row['hostel_name'] ?>" />
                                <label for="inputLastName">Hostel Name</label>
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control text_area" name= "hostelDescription"rows="10"><?= trim($row['hostel_description'] );?></textarea>
                        <label for="inputEmail">Description</label>
                    </div>


                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn-success" name='submit_hostel'>Save</button></div>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <?php
    include "../include/footer.php";
    ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>