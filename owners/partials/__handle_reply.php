<?php
include('../../admin/config/connect.php');
session_start();
// $user_id = $_SESSION['owner_id'];
// $reciever = $_POST['user_id'];
// $messege = $_POST['messege'];
// if (!empty($messege)) {
//     $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
//         VALUE('$messege', '1', '$user_id', '$reciever')";

$user_id = $_SESSION['owner_id'];
$reciever = $_POST['user_id'];
$messege = $_POST['messege'];
if (!empty($messege)) {
    $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
        VALUE('$messege', '1', '$user_id', '$reciever')";
    $sendd2 = mysqli_query($con, $sql);
    if ($sendd2) {
        header('location: ../notification.php');
    } else {
        echo  mysqli_error($con);
    }
}
