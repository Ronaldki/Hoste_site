<?php
session_start();
$user_id =  $_SESSION['owner_id'];

include('../../admin/config/connect.php');
$sql = "SELECT * FROM  message_tbl JOIN user_tbl 
                ON message_tbl.user_id = user_tbl.user_id WHERE ( message_tbl.user_id = '$user_id' and message_tbl.reciever_id !='$user_id')
                GROUP BY message_tbl.user_id ORDER BY message_tbl.messege_date  DESC  ";

$res = mysqli_query($con, $sql);
if($res){

        $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo json_encode($data);
}else{
     echo mysqli_error($con);   
}

// "SELECT * FROM user_tbl, message_tbl WHERE user_tbl.user_id=message_tbl.user_id 
// AND message_tbl.reciever_id=56 and message_tbl.user_id=56
// ORDER BY message_tbl.messege_date DESC"

?>