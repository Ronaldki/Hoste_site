<?php
session_start();
 $myId = $_SESSION['owner_id'];
include('../../admin/config/connect.php');
$sql = "SELECT * FROM user_tbl, message_tbl WHERE user_tbl.user_id=message_tbl.user_id 
AND message_tbl.reciever_id='$myId' AND message_tbl.status=1
ORDER BY message_tbl.messege_date DESC";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}else{
$result = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
echo $result; 
}
?>