<?php
session_start();
include('../../admin/config/connect.php');

$messege_status = 1;
$messege = $_GET['mess'];
if(isset($_SESSION['login_id']) && !$messege==''){
    $user_id = $_SESSION['login_id'];
    // id starting with  1000 means sth person is an admin
    // query
    $sql ="INSERT INTO message_tbl(text, status, user_id, reciever_id) 
    VALUE('$messege', '$messege_status', '$user_id', '1000')";
    $run = mysqli_query($con, $sql);
    if(!$run){
        echo mysqli_error($con);
    }else{
        echo 'done';
    }
}
