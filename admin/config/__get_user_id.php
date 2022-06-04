<?php
include "connect.php";
$email = $_POST['email'];

// query for sellecting the user id where email equela to the input email
$sql = "SELECT user_id FROM user_tbl WHERE email = '$email' AND status = 'active' AND type = 'house_owner'";

$result = mysqli_query($con, $sql);
if ($result) {
    if (mysqli_num_rows($result) == 1) {
    
    while ($rows = mysqli_fetch_assoc($result)) {
        $userId = $rows['user_id'];
        echo '<p class="text-success">Success, proceed to register hostel...</p>';
    }
}else{
    echo '<p class="text-success">user id not regestered with us, register first...</p>';
}
} else {

    echo  '<p class="text-success">' . mysqli_error($con).'</p>';
}
