<?php
session_start();
include("connect.php");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //first selectt all the email from 
    $sql = "SELECT * FROM user_tbl WHERE email = '$email' AND status='active'";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo '<script>alert("found")</script>';
        while($rows = mysqli_fetch_assoc($result)){

            $db_password = $rows['password'];

            if(password_verify( $password, $db_password) == 1){
                $_SESSION['login_id'] = $rows['user_id'];
                $_SESSION['user_name'] = $rows['fname'];
                echo mysqli_error($con);
                header('location:home.php');
            }else{
                echo mysqli_error($con);
                echo "<script>alert('incorrect email or password')</script>";
            
            }
           
        }
    }
}


