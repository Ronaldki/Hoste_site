
<?php
include "connect.php";
$hostelId = trim($_POST['hostelId']);
$hostelNmame = trim($_POST['hostelname']);
$hostelDescription = trim($_POST['hostelDescription']);
$status = 'active';

// query for sellecting the user id whhostelNae equela to the inhostelNae
if (empty($hostelId) || empty($hostelNmame) || empty($hostelDescription)) {
    echo ("<script>alert('Fill out all the fields')</script>");
} else {

    // first select to check if hostel is not yet registered
    $sql1 = "SELECT * FROM hostel_tbl WHERE hostel_name = '$hostelNmame' AND status = 'active'";
    $execute1 = mysqli_query($con, $sql1);
    if($execute1){

        if (mysqli_num_rows($execute1) > 0) {
            echo ("<script>alert('Hostel already exist')</script>");
        } else {
    
            $sql2 = "INSERT INTO hostel_tbl (hostel_name, user_id, hostel_description,status )
                            VALUES('$hostelNmame', '$hostelId', '$hostelDescription', '$status')";
    
            $execute2 = mysqli_query($con, $sql2);
            if ($execute2) {
                // $success = '<p class="text-success">Hostel add successfully...</p>';
                echo ("<script>alert('Successfully added')</script>");
            } else {
                echo (mysqli_error($con) . "<script>alert('Something went wrong')</script>");
            }
        }
    }else {
        echo 'hhh'. mysqli_error($con);
    }
}
