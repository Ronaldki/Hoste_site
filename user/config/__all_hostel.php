<?php
include "../../admin/config/connect.php";
//  $hostel_id = $_GET['hostel_id'];
$sql1 = "SELECT * FROM room_tbl JOIN  image_tbl ON room_tbl.hostel_id = image_tbl.hostel_id WHERE 
image_tbl.hostel_id = '56' GROUP BY room_id" ;
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  echo count($row);

echo json_encode($row);



