<?php
  include "./config/connect.php";
  include "../include/navbar.php";
  
  
  
    ?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 text-info">Available Hostel</h1>


            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Hostel Name</th>
                                <th>Reg. Date</th>
                                <th>Hostel Details</th>
                                <!-- <th>Image</th> -->
                                <!-- <th> Date</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            // sellect all the admins from the database
                            $num = 0;

                            $sql = "SELECT * FROM hostel_tbl";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($rows = mysqli_fetch_assoc($result)) { ?>
                                    <?php $num++; ?>

                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $rows['hostel_name'] ?></td>
                                        <td><?php echo $rows['created_date'] ?></td>
                              
                                        <td>
                                            <a href="./hostel_details?datails=<?php echo $rows['hostel_id']; ?>" class="text-info"><i class="fa fa-pencil"><?php echo $rows['hostel_id']; ?></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
                                            
                                        </td>
                                        <td class="justify-between">
                                            <a href="./config/__update_hostel.php?update=<?php echo $rows['hostel_id']; ?>"><i class="fa fa-pencil"><?php echo $rows['hostel_id']; ?></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
                                            <a href="./config/__delete_hostel_and_rooms.php?hostel_id=<?php echo $rows['hostel_id']; ?>"><i class="fa fa-trash text-danger"><?php echo $rows['hostel_id']; ?></i></a>
                                        </td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

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
</body>

</html>