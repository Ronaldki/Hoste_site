<!-- ..................adding connetion to the DATABASE............. -->
<?php
$con = mysqli_connect("localhost", "root","", "beacon_db");

if(!$con){
    echo mysqli_connect_error($con);
}