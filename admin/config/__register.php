<?php
include('connect.php');

// collecting fom data
if(isset($_POST['submit'])){
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$type ='super_admin';
$password =   $_POST['password'] ;
$status = 'active';
$confirm_password =   $_POST['confirm_password'];

registerusers($fname, $lname, $type, $phone, $email, $password, $confirm_password, $status, $con);

}

