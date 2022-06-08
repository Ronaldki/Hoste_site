

<?php
// include('connect.php');
ob_start();

// collecting fom data
if(isset($_POST['submit'])){
    $fname = trim(mysqli_real_escape_string($con, $_POST['fname']));
    $lname = trim(mysqli_real_escape_string($con, $_POST['lname']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
    $type ='house_owner';
    $password =   trim($_POST['password']) ;
    $status = 'active';
    $confirm_password =   trim($_POST['confirm_password']);

registerusers($fname, $lname, $type, $phone, $email, $password, $confirm_password, $status, $con);

// echo "hello.............................................hello.................................";

}