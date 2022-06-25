<?php
include('../config/connect.php');
$user_id = $_POST['user_id'];
$messege = $_POST['messege'];
if (!empty($messege)) {
    $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
        VALUE('$messege', '1', '1000', '$user_id')";
    $sendd2 = mysqli_query($con, $sql);
    if ($sendd2) {
        header('location: http://localhost/HostelApp/Hoste_site/admin/read_notifictin.php');
    } else {
        echo  mysqli_error($con);
    }
}
