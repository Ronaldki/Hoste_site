<?php
// include "connect.php";
$con = mysqli_connect("localhost", "root", "", "beacon_db");
if (isset($_POST['btn_imgs'])) {
    $hostelName = trim($_POST['hostel_names']);
    $state = trim($_POST['single_double']);
    $hostelImage = $_FILES['hostelImage']['name'];
    $temp_name = $_FILES['hostelImage']['tmp_name'];
    $ima_exe =  strtolower(pathinfo($hostelImage, PATHINFO_EXTENSION));

    $new_name =  'IMG-' . uniqid() . "." . $ima_exe;
    move_uploaded_file($temp_name, "uploads/" . $new_name);
    // $himage = $_POST['hostelImage'];
    // $tmp_name = $_FILES();
    if (empty($state) || empty($hostelImage)) {
        echo "<script>alert('All Fields Required')</script>";
    } else {

        $qry1 = "SELECT * FROM hostel_tbl WHERE hostel_name = '$hostelName'";

        $rst = mysqli_query($con, $qry1);

        if (mysqli_num_rows($rst) > 0) {
            $arr = [];
        }
        while ($row = mysqli_fetch_assoc($rst)) {
            //get hostel_id
            $arr = $row['hostel_id'];

            // echo $arr;
        }

        //Instert into table

        $qr2 = "INSERT INTO image_tbl(hostel_id , status, image_name) VALUES ('$arr', '$state' ,'$new_name')";

        $results = mysqli_query($con, $qr2);

        if ($results) {
            header("location:hostel_images.php");
        }
    }
}
