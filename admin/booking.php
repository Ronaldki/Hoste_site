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
                 <h3 class="mt-4 text-secondary">Bokings</h3>
                 <!-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <! <li class="breadcrumb-item active"><a href="table_admin.php">Table</Table></a> Tables</li> -->
                        <!-- <a href="">Admins</a> -->
                 <!-- </ol> -->
<!--                  
                 <?php
                    // include "../include/admin_user_list.php";

                    ?> -->


<div class="card mb-4">
                     <div class="card-body">
                         <table id="datatablesSimple">
                             <thead>
                                 <tr>
                                     <th>NO</th>
                                     <th>Name</th>
                                     <th>Phone</th>
                                     <th>Hostel</th>
                                     <th>Room Name</th>
                                     <th>Fees Paid </th>
                                     <th>Hostel Image</th>
                                     <th>Booked Date</th>
                                 </tr>
                                </thead>
                                
                                <tbody>
                                    <?php

                                    // sellect all the admins from the database
                                    $num = 0;
                                    $sql = "SELECT * FROM booking_tbl JOIN room_tbl ON booking_tbl.room_id = room_tbl.room_id JOIN hostel_tbl ON
                                             hostel_tbl.hostel_id = room_tbl.hostel_id JOIN user_tbl ON user_tbl.user_id = booking_tbl.user_id 
                                             WHERE user_tbl.type= 'users'   ORDER BY booking_tbl.data_crated DESC " ;
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        while ($rows = mysqli_fetch_assoc($result)) { ?>
                                         <?php $num++; ?>

                                         <tr>
                                             <td><?php echo $num ?></td>
                                             <td><?php echo $rows['fname'] . " " . $rows['lname'] ?></td>
                                             <td><?php echo $rows['phone'] ?></td>
                                             <td><?php echo $rows['hostel_name'] ?></td>
                                             <td><?php echo $rows['room_name'] ?></td>
                                             <td>Ugx: <?php echo $rows['fee_paid'] ?></td>
                                             <td><?php
                                                    if ($rows['image'] != '') {
                                                        echo '<i  class="fa fa-user"></i>';
                                                    } else { ?>

                                                     <img src="../admin/upload/<?php echo trim($rows['hostel_image'])?>" alt="" width="40px " ; height="40px" ;>
                                                 <?php

                                                    }
                                                    ?>
                                             </td>
                                             <td><?php echo $rows['data_crated'] ?></td>
                                             <td class="justify-between">
                                              
                                                 <?php

                                                
                                                 include '../admin/config/__confirm_booking.php';
                                                 ?>
                                                 
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