<?php
include('connect.php');

// collecting fom data
if(isset($_POST['submit'])){
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
// $phone = mysqli_real_escape_string($con, $_POST['phone']);
$password =   $_POST['password'] ;
$confirm_password =   $_POST['confirm_password'];

// .........CHECHING IF USER HAS NO ACCOUNT YET............
$sql = "SELECT  * FROM user_tbl WHERE email = '$email' AND  ";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) >0){
    echo '<script>alert("Email already exist...")</script>';
    // $err = 'Email already exist...';
}else{
    
    // check if password matches confirm password.
    if($password!= $confirm_password){
        echo '<script>alert("Password not match...") </script';
        
    }else{
        if(strlen($fname)>2 && strlen($lname)>2 && strlen($password)>4){
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            
            // INSERT THE  user record into the database
            $sql = "INSERT INTO user_tbl (fname, lname, type, phone, email, image, password)
                    VALUE('$fname', '$lname', 'super_admin', '$phone', '$email','', '$hash_password')";
         
         $res = mysqli_query($con, $sql);
         if($res){
            header('location: home.php');

        }else{
                echo '<script>alert("Something went wrong...") </script';

            }
            

        }else{

            // throw error
            echo '<script>alert("Your input is too short")</script>';
        }
    }


}








}

// $fname = $_POST['']
