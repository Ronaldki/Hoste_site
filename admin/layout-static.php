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
            <h3 class="mt-4"> Add Hostel</h3>


            <div class="card-body">
                <h4 class="text-primary">Please send the Email of the house owner first</h4>
                <form method='post' class="d-flex ">
                    <div class="form-floating mb-3 w-25">
                        <input name='email' class="form-control input-group-lg" id="inputEmail" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                    </div>
                    &nbsp; &nbsp;&nbsp;
                    <div class="mb-4 mb-0 mx-4">
                        <div class="d-grid "><button class="btn btn-success" name='submitEmail' type="submit">Send Email</button></div>
                    </div>
                </form>
                <?php
                $userId = '';
                if (isset($_POST['submitEmail'])) {
                    include("../admin/config/__get_user_id.php");
                }

                ?>

            </div>

            <div class="card-body">

                <h5 class="text-warning">If user Id is available, Add hostel Details</h5>

                <form method='post' enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name='hostelId' value="<?php echo $userId; ?>" class="form-control" id="inputFirstName" type="number" placeholder="Enter your first name" />
                                <label for="inputFirstName">user Id</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='hostelname' class="form-control" id="inputLastName" type="text" placeholder="Enter Hostel name..." />
                                <label for="inputLastName">Hostel Name</label>
                            </div>
                        </div>
                        <div class="col-md-6 w-100 mt-3 parent">
                            <div class="form-floating w-100">
                                <input name='hostelImage' class="image_field inputimage form-control w-100" id="inputLastName" type="file" placeholder="Enter Hostel name..." />
                                <div class="image_field w-100 input_image_overlay">click to choose image</div>
                                <!-- <label for="inputLastName">Hostel Name</label> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control text_area" name= "hostelDescription"rows="10"></textarea>
                        <label for="inputEmail">Description</label>
                    </div>


                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn-success" name='submit_hostel' type="submit">Create Account</button></div>
                    </div>
                </form>
            </div>

                <?php
                if(isset($_POST['submit_hostel'])){
                        include("../admin/config/_add_hostel.php");
                    
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