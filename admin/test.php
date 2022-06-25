<?php
include '../admin/config/connect.php';
$sql = "SELECT * FROM  message_tbl JOIN user_tbl 
ON message_tbl.user_id = user_tbl.user_id WHERE  message_tbl.user_id != '1000'";
$result = mysqli_query($con, $sql);
if (!$result) {
   echo mysqli_error($con);
} else {
   $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo json_encode($row);
}
