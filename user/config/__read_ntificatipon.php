<?php
session_start();
include('../../admin/config/connect.php');
$sss= $_SESSION['login_id'];
  if(isset($_SESSION['login_id'])){

 $query2 = mysqli_query($con, "SELECT * FROM message_tbl WHERE status= '1' AND user_id ='$sss' ");
 $data = mysqli_fetch_all($query2, MYSQLI_ASSOC);
 echo json_encode($data);
 
  }

?>