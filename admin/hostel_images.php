<?php
ob_start();
include('./config/connect.php');
include "../include/navbar.php";
?>
<!-- 
    Navbar section.............
        -->
<div id="layoutSidenav_content">

    <link rel="stylesheet" href="../admin/css/style2.css">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"> Add images</h3>

            <div class="card-body">

                <!-- <h5 class="text-warning">If user Id is available, Add hostel Details</h5> -->

                <form method='post' enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="hostel_names" class="form-control" id="">
                                    <?php
                                    $sql = "SELECT * FROM hostel_tbl";
                                    $res = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                        <option value="<?php echo $row['hostel_name']; ?>" class="form-control"><?php echo $row['hostel_name']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                                <label for="inputFirstName">Hostel</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6"> -->
                        <div class="form-floating my-4">

                            Single <input type="radio" name="single_double" value="single" checked> &nbsp;
                            Double <input type="radio" name="single_double" value="double">


                        </div>
                        <!-- </div> -->

                        <div class="col-md-6 w-100 mt-3 parent">
                            <div class="form-floating w-100">
                                <input name="hostelImage" class="image_field inputimage form-control w-100" id="inputLastName" type="file" placeholder="Enter Image" />
                                <div class="image_field w-100 input_image_overlay">click to choose image</div>
                                <!-- <label for="inputLastName">Hostel Name</label> -->
                            </div>
                        </div>
                    </div>



                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn-success" name='btn_imgs' type="submit">Add Image</button></div>
                    </div>
                </form>
            </div>

            <?php
            if (isset($_POST['btn_imgs'])) {

                include("../admin/config/__hostel_images.php");
            }

            ?>

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