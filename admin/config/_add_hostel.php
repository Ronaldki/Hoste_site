<?php
include "connect.php";
$hostelId = trim($_POST['hostelId']);
$hostelNmame = trim($_POST['hostelname']);
$hostelDescription = trim($_POST['hostelDescription']);
$status = 'status';

// query for sellecting the user id whhostelNae equela to the inhostelNae
if (empty($hostelId) || empty($hostelNmame) || empty($hostelDescription)) {
    echo '<p class="text-success">please fill out all the fills...</p>';
} else {

    // first select to check if hostel is not yet registered
    $sql1 = "SELECT * FROM hostel_tbl WHERE hostel_id = '$hostelNmame' AND status = 'active'";
    $execute1 = mysqli_query($con, $sql1);
    if($execute1){

        if (mysqli_num_rows($execute1) > 0) {
            echo '<script>swal.fire("oops","hostel aready exist...", "success")</script>';
        } else {
    
            $sql2 = "INSERT INTO hostel_tbl (hostel_name, user_id, hostel_description,status )
                            VALUES('$hostelNmame', '$hostelId', '$hostelDescription', '$status')";
    
            $execute2 = mysqli_query($con, $sql2);
            if ($execute2) {
                // $success = '<p class="text-success">Hostel add successfully...</p>';
                echo ('<script>alert("Hostel added successfully...")</script>');
            } else {
                echo mysqli_error($con) . '<script>swal.fire("oops","Hostel added successfully...", "success")</script>';
            }
        }
    }else {
        echo 'hhh'. mysqli_error($con);
    }
}
