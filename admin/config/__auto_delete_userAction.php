<?php
include('./connect.php');
$the_id = $_GET['id'];
echo $the_id;

// enter the quer for deleting users
$sql = "DELETE  FROM user_tbl WHERE user_id ='$the_id' AND status = 'inactive'";
$result = mysqli_query($con, $sql );

if($result){
echo "deletes";
}else{
    echo 'not done ' .mysqli_error($con);
}

?>


