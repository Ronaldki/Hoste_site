<?php
include('./connect.php');
         
$user_id = $_GET['delete']?$_GET['delete']:'';
$status = 'inactive';
$deleted_table_name = 'deleted_users';
$sql = "UPDATE user_tbl SET status = '$status' WHERE user_id = $user_id ";
delete_user($sql, $con,$user_id, $deleted_table_name);

?>