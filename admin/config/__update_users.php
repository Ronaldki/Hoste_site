<?php


include "connect.php";
$id = $_POST['id'];
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// check if email is there..............

$check = "SELECT email FROM user_tbl WHERE email = '$email'";
$run_qry = mysqli_query($con, $check);

if(mysqli_num_rows($run_qry)>0){
    echo '<script>alert("Email already taken" )</script>';
    header("location:http://localhost/HostelApp/Hoste_site/admin/tables.php");
}
else{

    $query = "UPDATE user_tbl SET fname = '$fn', lname = '$ln', phone = '$phone', email = '$email' WHERE user_id = '$id' ";
    
    $query_run = mysqli_query($con, $query);
    if($query_run){
        header("location:http://localhost/HostelApp/Hoste_site/admin/tables.php");
    }
}

?>
