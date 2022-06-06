
<?php
ob_start();
include "../include/navbar.php";
// include('./config/connect.php')
?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"> Add Room</h3>


            <div class="card-body">
                <h4 class="text-primary">Please send Hostel name first</h4>
                <form method='post' class="d-flex ">
                    <div class="form-floating mb-3 w-25">
                        <select name="hostel" id="hostel" class="form-control input-group-lg">
                            <option value=""></option>
                        </select>
                        <!-- <input name='email' class="form-control input-group-lg" id="inputEmail" type="email" placeholder="name@example.com" /> -->
                        <label for="inputEmail">Hostel</label>
                    </div>
                    &nbsp; &nbsp;&nbsp;
                    <div class="mb-4 mb-0 mx-4">
                        <div class="d-grid "><button class="btn btn-success" name='submitEmail' type="submit">Send Hostel</button></div>
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

                <h5 class="text-warning">Add the Room</h5>

                <form method='post'>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name='hostelId' value="<?php echo $userId; ?>" class="form-control" id="inputFirstName" type="number" placeholder="Enter your first name" />
                                <label for="inputFirstName">Hostel Id</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='hostelname' class="form-control" id="inputLastName" type="text" placeholder="Enter Room name..." />
                                <label for="inputLastName">Room Name</label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-floating mb-3  d-flex gap-4">
                        <select name="status" id="" class="form-control input-group-lg ">
                            <option value="Single" required>Single</option>
                            <option value="Double" required>Double</option>
                        </select>
                        <label for="inputEmail">Status</label>
                
                        <input type="text" name="fees"  class="form-control input-group-lg "placeholder="Enter Room name..."/> -->

                    <!-- </div> -->

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                            <select name="status" id="" class="form-control input-group-lg ">
                            <option value="Single" required>Single</option>
                            <option value="Double" required>Double</option>
                        </select>
                                <label for="inputFirstName">Status</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='fees' class="form-control" id="inputLastName" type="text" placeholder="Enter Fees" />
                                <label for="inputLastName">Fees</label>
                            </div>
                        </div>
                    </div>


                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn-success" name='submit_room' type="submit">Add Room</button></div>
                    </div>
                </form>
            </div>

                <?php
                if(isset($_POST['submit_room'])){
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