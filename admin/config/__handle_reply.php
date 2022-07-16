<?php
session_start();
include('../config/connect.php');
$user_id = $_SESSION['admin_login_id'];
$reciever = $_POST['user_id'];
$messege = $_POST['messege'];
if (!empty($messege)) {
    $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
        VALUE('$messege', '1', '$user_id', '$reciever')";
    $sendd2 = mysqli_query($con, $sql);
    if ($sendd2) {
        header('location: http://localhost/HostelApp/Hoste_site/admin/read_notifictin.php');
    } else {
        echo  mysqli_error($con);
    }
}
