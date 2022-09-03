<?php
session_start();
// $myId = $_SESSION['admin_login_id'];

include '../admin/config/connect.php';
$roomid = 56;
$qry =  "SELECT * FROM  room_tbl JOIN hostel_tbl ON hostel_tbl.hostel_id = room_tbl.hostel_id 
        JOIN booking_tbl ON booking_tbl.room_id = room_tbl.room_id 
        WHERE hostel_tbl.hostel_id = '$hid' AND room_tbl.room_id= '$roomid'";
$ex = mysqli_query($con, $qry);

if (!$ex) {
    echo mysqli_error($con);
}
$ex_results = mysqli_fetch_assoc($ex);
print_r($ex_results);
