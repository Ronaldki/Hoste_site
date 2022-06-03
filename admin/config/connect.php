<!-- ..................adding connetion to the DATABASE............. -->
<?php
$con = mysqli_connect("localhost", "root","", "beacon_db");

if(!$con){
    echo mysqli_connect_error($con);
}



// yhis is the function for frgistering all users
function registerusers($fname, $lname, $type, $phone, $email, $password, $confirm_password, $status, $con){

// .........CHECHING IF USER HAS NO ACCOUNT YET............
$sql = "SELECT  * FROM user_tbl WHERE email = '$email' AND type = 'super_admin' ";
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
            $sql = "INSERT INTO user_tbl (fname, lname, type, phone, email, image, password, status)
                    VALUE('$fname', '$lname', '$type', '$phone', '$email','', '$hash_password','$status')";
         
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

function delete_user($user_id,$status, $con){
    $sql ="UPDATE user_tbl SET status = '$status' WHERE user_id = $user_id ";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('delete successfully...')</script>";
    }else{
        echo "<scrpt>alert('Something went wrong...')</script>".mysqli_error($con);
    
    }

}