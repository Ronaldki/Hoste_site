<?php
session_start();
$con = mysqli_connect("localhost", "root","", "beacon_db");
$myId = $_SESSION['owner_id'];
echo $myId;
// also update the status in the messege tbl setting status to 0
$sql= "UPDATE message_tbl SET status='0' WHERE reciever_id= '$myId' OR reciever_id= '1000'";
$run = mysqli_query($con, $sql);
header('location:http://localhost/HostelApp/Hoste_site/owners/notification.php');

?>
