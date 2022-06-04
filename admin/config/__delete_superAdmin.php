<?php
include('connect.php');


//  deleting hostel owners from the systm 


 // // dllete admin from the user table

 $user_id = $_GET['delete']?$_GET['delete']:'';
 $status = 'inactive';

 delete_user($user_id, $status, $con);





?>