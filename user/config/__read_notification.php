<?php
session_start();
include('../../admin/config/connect.php');
if(isset($_SESSION['login_id'])){
$sss= $_SESSION['login_id'];
$sql = "SELECT * FROM user_tbl, message_tbl WHERE user_tbl.user_id=message_tbl.user_id 
AND message_tbl.reciever_id='$sss'
ORDER BY message_tbl.messege_date DESC";
 $query2 = mysqli_query($con, $sql);
 $data = mysqli_fetch_all($query2, MYSQLI_ASSOC);
 echo json_encode($data);
//  echo json_encode($sss);

 
  }


?>