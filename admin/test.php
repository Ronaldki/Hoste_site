<?php
session_start();
// $myId = $_SESSION['admin_login_id'];

include '../admin/config/connect.php';
$myId = $_SESSION['owner_id'];
$sql = "SELECT * FROM user_tbl, message_tbl WHERE (user_tbl.user_id = message_tbl.reciever_id OR user_tbl.user_id=message_tbl.user_id )
and ( message_tbl.user_id='$myId' OR message_tbl.reciever_id='$myId')
GROUP BY message_tbl.id ORDER BY message_tbl.messege_date DESC";
$result = mysqli_query($con, $sql);
if (!$result) {
   echo mysqli_error($con);
} else {
   $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
   echo json_encode($row);
}
