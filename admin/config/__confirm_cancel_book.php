<?php
session_start();
include "connect.php";
// update table if cancel button clicked..........
$sess = $_SESSION['admin_login_id'];
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
        VALUE('$messege', '$messege_status', '$sess', '$user_id')";

        $sendd2 = mysqli_query($con, $sql);
        header('location: http://localhost/HostelApp/Hoste_site/admin/booking.php');
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
        $sql = "INSERT INTO message_tbl(text, status, user_id, reciever_id)
        VALUE('$messege', '$messege_status', '$sess', '$user_id')";
        $sendd2 = mysqli_query($con, $sql);
        header('location: http://localhost/HostelApp/Hoste_site/admin/booking.php');
    }
}
