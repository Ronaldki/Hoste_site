



<?php
include('./connect.php');
$the_id = $_GET['delete']?$_GET['delete']:'';
// echo $the_id;

// enter the query for deleting users
$sql = "DELETE  FROM user_tbl WHERE user_id ='$the_id' AND status = 'inactive'";
$result = mysqli_query($con, $sql);

if ($result) {
    // echo "<script>swal.fire(deleted successfully)</script>";
    header('location:http://localhost/Hoste_site/Hoste_site/admin/all_deleted_users.php');
} else {
    echo 'not done ' . mysqli_error($con);
}

?>

<?php
//to restore a temporarily deeted account
// include('./connect.php');
$the_id = $_GET['update']?$_GET['update']:'';
// echo $the_id;

// enter the query for deleting users
$sql = "UPDATE user_tbl SET status = 'active'  WHERE user_id ='$the_id'";
$result = mysqli_query($con, $sql);

if ($result) {
    header('location:http://localhost/HostelApp/Hoste_site/admin/all_deleted_users.php');
} else {
    echo 'not done ' . mysqli_error($con);
}

?>

