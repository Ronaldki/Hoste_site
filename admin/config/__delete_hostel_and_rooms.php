<?php
 
 include 'connect.php';

 $hostel_id = $_GET['hostel_id'];
$delete = "DELETE FROM hostel_tbl WHERE hostel_id = '$hostel_id' ";

$run_del = mysqli_query($con, $delete);

if($run_del){
    header("location:http://localhost/HostelApp/Hoste_site/admin/all_hostel.php");
}



