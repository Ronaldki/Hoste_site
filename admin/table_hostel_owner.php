     <?php
        include "../include/navbar.php";
        include('./config/connect.php');
        // include('config/__delete_superAdmin.php');
        ?>



     <!-- 
         Navbar section.............
        -->
     <div id="layoutSidenav_content">
         <main>
             <div class="container-fluid px-4">
                 <h3 class="mt-4">Hostel Owners</h3>
                 <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <!-- <li class="breadcrumb-item active"><a href="table_admin.php">Table</Table></a> Tables</li> -->
                        <!-- <a href="">Admins</a> -->
                 <!-- </ol> -->
                 
                 <?php
                    include "../include/admin_user_list.php";

                    ?>


<div class="card mb-4">
                     <div class="card-body">
                         <table id="datatablesSimple">
                             <thead>
                                 <tr>
                                     <th>NO</th>
                                     <th>Name</th>
                                     <th>Phone</th>
                                     <th>Email</th>
                                     <th>Image</th>
                                     <th> Date</th>
                                     <th>Action</th>
                                 </tr>
                                </thead>
                                
                                <tbody>
                                    <?php

                                    // sellect all the admins from the database
                                    $num = 0;

                                    $sql = "SELECT * FROM user_tbl WHERE type = 'house_owner' AND status='active'";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        while ($rows = mysqli_fetch_assoc($result)) { ?>
                                         <?php $num++; ?>

                                         <tr>
                                             <td><?php echo $num ?></td>
                                             <td><?php echo $rows['fname'] . " " . $rows['lname'] ?></td>
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
                                                 <a href="./config/__update_superAdmin.php?update=<?php echo $rows['user_id']; ?>"><i class="fa fa-pencil"><?php echo $rows['user_id']; ?></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
                                                 <a href="./config/__delete_superAdmin.php?delete=<?php echo $rows['user_id']; ?>"><i class="fa fa-trash text-danger"><?php echo $rows['user_id']; ?></i></a>
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
    
         <?php

            ?>
    </html>