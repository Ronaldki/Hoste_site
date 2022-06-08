<?php
include('./connect.php');

$sql = "SELECT * FROM deleted_users";

$result = mysqli_query($con, $sql);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($data);

?>

