<?php

include('./connect.php');
$sql = "SELECT * FROM  message_tbl JOIN user_tbl 
ON message_tbl.user_id = user_tbl.user_id WHERE  message_tbl.user_id != '1000'";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}else{
$result = json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
echo $result; 
}
?>