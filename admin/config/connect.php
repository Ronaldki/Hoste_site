<!-- ..................adding connetion to the DATABASE............. -->
<?php
date_default_timezone_set("Africa/Kampala");


$con = mysqli_connect("localhost", "root","", "beacon_db");

if(!$con){
    echo mysqli_connect_error($con);
}



// this is the function for frgistering all users
function registerusers($fname, $lname, $type, $phone, $email, $password, $confirm_password, $status, $con){

// .........CHECHING IF USER HAS NO ACCOUNT YET............
$sql = "SELECT  * FROM user_tbl WHERE email = '$email' AND type = '$type' ";
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

// function for deleting auser

function delete_user($sql, $con, $user_id, $deleted_table_name){
    // $sql ="UPDATE user_tbl SET status = '$status' WHERE user_id = $user_id ";

    $date = date("Y-m-d h:i:sa");
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('delete successfully...')</script>";
    }else{
        echo "<scrpt>alert('Something went wrong...')</script>".mysqli_error($con);
    
        
    }

    // first sellect all from table deleted user to check if the id already exist
    $chech_id = "SELECT * FROM  $deleted_table_name WHERE id= '$user_id'";
    $result = mysqli_query($con, $chech_id);
    if(mysqli_num_rows($result) == 0){

        // then insert the id and date of the deleted person in to the table delete users
        $insert = "INSERT INTO $deleted_table_name (user_id, date) VALUES('$user_id', '$date')";
        mysqli_query($con, $insert);
    }else if(mysqli_num_rows($result) == 1){

        // just update the time in the delete record tables
        $update_time = "UPDATE $deleted_table_name SET date = '$date' WHERE user_id = '$user_id'";
        mysqli_query($con, $update_time);

    }

}