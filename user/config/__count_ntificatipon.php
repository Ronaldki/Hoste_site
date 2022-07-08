<?php
session_start();
include('../../admin/config/connect.php');
if(isset($_SESSION['login_id'])){
$sss= $_SESSION['login_id'];
$sql = "SELECT * FROM message_tbl WHERE status= '1' AND  reciever_id = '$sss'";
 $query2 = mysqli_query($con, $sql);
 $num = mysqli_num_rows($query2);

 echo json_encode($num);

 
  }


?>