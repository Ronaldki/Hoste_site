<?php

include "connect.php";
// update table if cancel button clicked..........
if(isset($_POST['cancel'])){

    $booking_id = $_POST['btn_id'];
$qr1 = "UPDATE booking_tbl SET Booking_status = 'cancelled' WHERE booking_id = '$booking_id'  ";
$d1 = mysqli_query($con,$qr1);
if($d1){
    header('location: http://localhost/HostelApp/Hoste_site/admin/booking.php');
}

}
// update table if comfirm button clicked..........
if(isset($_POST['confirm'])){

    $booking_id = $_POST['btn_id'];
$qr2 = "UPDATE booking_tbl SET Booking_status = 'confirmed' WHERE booking_id = '$booking_id'  ";
$d2 = mysqli_query($con,$qr2);

if($d2){
    header('location: http://localhost/HostelApp/Hoste_site/admin/booking.php');
}
}
