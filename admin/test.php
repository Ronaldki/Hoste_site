<?php
include '../admin/config/connect.php';

$sqlS = "SELECT * FROM hostel_tbl WHERE hostel_id IN
 (SELECT hostel_id FROM booking_tbl  GROUP BY  hostel_id ORDER BY count(hostel_id) DESC  ) ORDER BY hostel_id DESC LiMIT 10 ";

   //  $sqlS =  "SELECT hostel_id FROM booking_tbl  GROUP BY  hostel_id ORDER BY count(hostel_id) DESC LIMIT 10 ";
// $sql = "SELECT * FROM hostel_tbl WHERE hostel_id IN 
//          (SELECT hostel_id FROM hostel_tbl GROUP BY hostel_id ORDER BY hostel_id DESC)";
$result = mysqli_query($con, $sqlS);
if (!$result) {
   echo mysqli_error($con);
} else {
   $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo json_encode($row);
}
