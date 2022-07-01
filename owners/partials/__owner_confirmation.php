<?php

include "../../admin/config/connect.php";
// update table if cancel button clicked..........
if (isset($_POST['cancel'])) {

    $booking_id = $_POST['btn_id'];
    $user_id = $_POST['user_id'];
    $messege_status = '1';
    $messege = 'Sorry your booking was councelled';
    $qr1 = "UPDATE booking_tbl SET Booking_status = 'cancelled' WHERE booking_id = '$booking_id'  ";
    $d1 = mysqli_query($con, $qr1);
    if ($d1) {
        // starting by
        $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
        VALUE('$messege', '$messege_status', '1000', '$user_id')";
        $sendd2 = mysqli_query($con, $sql);
        header('location: ../bookings.php');
    }
}
// update table if comfirm button clicked..........
if (isset($_POST['confirm'])) {

    $booking_id = $_POST['btn_id'];
    $qr2 = "UPDATE booking_tbl SET Booking_status = 'confirmed' WHERE booking_id = '$booking_id'  ";
    $d2 = mysqli_query($con, $qr2);

    if ($d2) {
        $booking_id = $_POST['btn_id'];
        $user_id = $_POST['user_id'];
        $messege_status = '1';
        $messege = 'Your booking was confirmed';
        // starting by
        $sql = "INSERT INTO message_tbl(text, status, user_id,reciever_id)
     VALUE('$messege', '$messege_status', '1000', '$user_id')";
        $sendd2 = mysqli_query($con, $sql);
        header('location: ../bookings.php');
    }
}
