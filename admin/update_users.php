<?php
ob_start();
include('./config/connect.php');
include "../include/navbar.php";

$id = $_GET['update'];

$query = "SELECT fname, lname, phone, email, type FROM user_tbl WHERE user_id = '$id'";
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

            <h3 class="mt-4 text-capitalize"> Edit <?php echo str_replace('_',' ',$row['type'] ); ?></h3>




            <div class="card-body">

                <form action="config/__update_users.php" method='post'>
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="inputFirstName">First name</label>
                            <div class="form-floating mb-3 mb-md-0">
                                <input name='fname' class="form-control" id="inputFirstName" type="text" value="<?= $row['fname']; ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName">Last name</label>
                            <div class="form-floating">
                                <input name='lname' class="form-control" id="inputLastName" type="text" value="<?= $row['lname'] ?>" />
                            </div>
                        </div>
                    </div>
                    <label for="inputEmail">Phone</label>
                    <div class="form-floating mb-3">
                      
                        <input name='phone' class="form-control" id="inputEmail" type="" value="<?php echo $row['phone']; ?>" />
                    </div>
                    <label for="inputEmail">Email address</label>
                    <div class="form-floating mb-3">
                        <input name='email' class="form-control" id="inputEmail" type="email" value="<?= $row['email']; ?>" />
                    </div>
                    
                    <div class="mt-4 mb-0">
                        <button class="btn-success" name='submit' type="submit">Save</button>

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