<?php
include('./config/connect.php');
include "../include/navbar.php";
// include('config/__delete_superAdmin.php');
?>



<!-- 
         Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4 text-secondary">PEOPLE WHO ARE TEMPORARILY DELETED FROM THE SYSTEM</h4>
                
                <?php
            include "../include/admin_user_list.php";
            
            ?>
            <h6 class="mt-4 text-info">Deleting this this people will remove them completly...!!!</h6>


            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>phone</th>
                                <th>@Email</th>
                                <th>Photo</th>
                                <th>Date</th>
                                <th>Actoin</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            // sellect all the admins from the database
                            $num = 0;

                            $sql = "SELECT * FROM user_tbl WHERE status='inactive'";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($rows = mysqli_fetch_assoc($result)) { ?>
                                    <?php $num++; ?>

                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $rows['fname'] . " " . $rows['lname'] ?></td>
                                        <td><?php echo $rows['type'] ?></td>
                                        <td><?php echo $rows['phone'] ?></td>
                                        <td><?php echo $rows['email'] ?></td>
                                        <td><?php
                                            if ($rows['image'] != '') {
                                                echo '<i  class="fa fa-user"></i>';
                                            } else { ?>

                                                <img src="../admin/assets/img/testimonial-bg1.jpg" alt="" width="40px " ; height="40px" ;>
                                            <?php

                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $rows['date'] ?></td>
                                        <td class="justify-between">
                                            <a href="?update=<?php echo $rows['user_id']; ?>"><i class="fas fa-recycle fa-2x"><?php echo $rows['user_id']; ?></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
                                            <a href="?delete=<?php echo $rows['user_id']; ?>"><i class="fa fa-trash text-danger fa-2x"><?php echo $rows['user_id']; ?></i></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- form for entering your new and old password before validating -->


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
<script src="./js/"></script>
</body>

</html>
<?php
// include('./connect.php');
$the_id = $_GET['delete']?$_GET['delete']:'';
// echo $the_id;

// enter the query for deleting users
$sql = "DELETE  FROM user_tbl WHERE user_id ='$the_id' AND status = 'inactive'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "<script>swal.fire(deleted successfully)</script>";
    // echo "deletes";
} else {
    echo 'not done ' . mysqli_error($con);
}

?>

<!-- to restore a temporarily deeted account -->
<?php
// include('./connect.php');
$the_id = $_GET['update']?$_GET['update']:'';
// echo $the_id;

// enter the query for deleting users
$sql = "UPDATE user_tbl SET status = 'active'  WHERE user_id ='$the_id'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "<script>swal.fire(deleted successfully)</script>";
} else {
    echo 'not done ' . mysqli_error($con);
}

?>