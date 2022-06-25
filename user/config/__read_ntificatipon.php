<?php
session_start();
include('../../admin/config/connect.php');
if(isset($_SESSION['login_id'])){
    $sss= $_SESSION['login_id'];
$sql = "SELECT * FROM message_tbl WHERE status= '1' AND user_id = '1000' AND reciever_id = '$sss'";
 $query2 = mysqli_query($con, $sql);
 $data = mysqli_fetch_all($query2, MYSQLI_ASSOC);
 echo json_encode($data);
 
  }

?>