<?php


include "connect.php";
$id = $_POST['id'];

$name = $_POST['hostelname'];
$description = $_POST['hostelDescription'];


// check if email is there..............

$check = "SELECT hostel_name FROM hostel_tbl WHERE hostel_name = '$name'";
$run_qry = mysqli_query($con, $check);

if(mysqli_num_rows($run_qry)>0){
    echo '<script>alert("Hostel already Exists" )</script>';
    header("location:http://localhost/HostelApp/Hoste_site/admin/all_hostel.php");
}
else{

    $query = "UPDATE hostel_tbl SET hostel_name = '$name', hostel_description = '$description' WHERE hostel_id = '$id' ";
    
    $query_run = mysqli_query($con, $query);
    if($query_run){
        header("location:http://localhost/HostelApp/Hoste_site/admin/all_hostel.php");
    }
}

?>
