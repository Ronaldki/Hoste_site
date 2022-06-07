<?php
// session_start();
ob_start();
include "../include/navbar.php";
// include '../admin/config/connect.php';
// include('./config/connect.php')

?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4"> </h3>

            <div class="card-body">

                <h5 class="text-warning">Add Room</h5>

                <form method='POST'>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 w-100">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "beacon_db");
                                $rs = "SELECT * FROM hostel_tbl";
                                
                                $qry = mysqli_query($con,$rs );

                                ?>
                                <select name="hostel" id="hostel" class="form-control input-group-lg">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($qry)) {
                                    ?>
                                        <option value="<?php echo $row['hostel_name']; ?>" name= "hostel"><?php echo $row['hostel_name']; ?></option>
                                    <?php
                                    } ?>

                                </select>
                                <label for="inputEmail">Hostel Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='room_name' class="form-control" id="inputLastName" type="text" placeholder="Enter Room name..." />
                                <label for="inputLastName">Room Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="status" id="" class="form-control input-group-lg ">
                                    <option value="Single" name="status"  required>Single</option>
                                    <option value="Double" name="status"  required>Double</option>
                                </select>
                                <label for="inputFirstName">Status</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name='fee' class="form-control" id="inputLastName" type="text" placeholder="Enter Fees" />
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
            if (isset($_POST['submit_room'])) {
                include("../admin/config/__add_room.php");
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