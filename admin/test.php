<?php
include '../admin/config/connect.php';

$sql = "SELECT * FROM booking_tbl JOIN room_tbl ON booking_tbl.room_id = room_tbl.room_id JOIN hostel_tbl ON hostel_tbl.hostel_id = room_tbl.hostel_id JOIN user_tbl ON user_tbl.user_id = booking_tbl.user_id  WHERE user_tbl.type= 'users'" ;
         $result = mysqli_query($con, $sql);
             if (!$result) {
                echo mysqli_error($con);
             }
             else{
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

                echo json_encode($row);
             }