<?php
include "../../admin/config/connect.php";
//  $hostel_id = $_GET['hostel_id'];
$sql1 = "SELECT * FROM room_tbl JOIN  image_tbl ON room_tbl.hostel_id = image_tbl.hostel_id WHERE 
image_tbl.hostel_id = '50' GROUP BY room_id" ;
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($row);
        //  $sql1 = "SELECT * FROM user_tbl JOIN hostel_tbl ON user_tbl.user_id = hostel_tbl.user_id WHERE hostel_tbl.hostel_id = '$hostel_id'";
