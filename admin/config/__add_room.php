<?php
$con = mysqli_connect("localhost", "root","", "beacon_db");

if(!$con){
    echo mysqli_connect_error($con);
}
if (isset($_POST['submit_room'])) {

    $roomname = $_POST['room_name'];
    $fees = $_POST['fee'];
    $status = $_POST['status'];
    $hostel = $_POST['hostel'];

    $qry1 = "SELECT * FROM hostel_tbl WHERE hostel_name = '$hostel' ";

    $qry3 = mysqli_query($con, $qry1);

    if (mysqli_num_rows($qry3) > 0) {
        // Declare empty arry........
        $rslt = [];

        while ($row = mysqli_fetch_assoc($qry3)) {
            $rslt = $row['hostel_id'];
            // echo $rslt;
        }
        $qry4 = "INSERT INTO room_tbl(hostel_id, room_name, room_fee, room_status) VALUES ('$rslt', '$roomname', '$fees', '$status' )";

        $insert = mysqli_query($con,$qry4);
    }
}
