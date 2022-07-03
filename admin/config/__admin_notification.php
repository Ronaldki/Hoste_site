<?php
session_start();
$sess = $_SESSION['admin_login_id'];
include('./connect.php');
$sql = "SELECT * FROM  message_tbl WHERE status=1 AND (reciever_id='$sess' OR reciever_id='1000')  
ORDER BY messege_date DESC";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}else{
$result = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
echo $result; 
}
?>