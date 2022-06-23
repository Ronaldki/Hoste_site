<?php
if (isset($_POST['sub'])) {
    if (!isset($_SESSION['login_id'])) {
        echo '<h6 class = "text-danger">Please Login First</h6>';
    } else {
        $user_id = $_SESSION['login_id'];
        $room_id =  $ex_results['room_id'];
        $hostel_id = $_GET['hostel_id'];
        $fees  = $_POST['fees'];
        $book_status = "pending";

        //   Check if Amount is above the minimum amount
        if ($fees < 50000) {
            echo '<h6 class = "text-danger">You can only Book with minimum of ugx: 50000</h6>';
        } else {
            //Cehck if room is not booked..............
            $qyc = "SELECT user_id FROM booking_tbl WHERE user_id = '$user_id' AND (Booking_status ='pending' OR Booking_status = 'confirmed') ";
            $rsc = mysqli_query($con, $qyc);
            if (mysqli_num_rows($rsc) != 0) {
                echo '<h6 class = "text-danger">You have already Booked </h6>';
            } else { 

                $qy = "SELECT * FROM booking_tbl WHERE room_id =  '$room_id' AND (Booking_status ='pending' OR Booking_status = 'confirmed')";
                $rs = mysqli_query($con, $qy);

                if (mysqli_num_rows($rs) == 0) {

                    $qry5 = "INSERT INTO booking_tbl (user_id, room_id, hostel_id, fee_paid, Booking_status) VALUES ( '$user_id', '$room_id', '$hostel_id', '$fees','$book_status')";

                    $qr = mysqli_query($con, $qry5);

                    echo '<h6 class = "text-success">Yourhave Successfully Booked ' . $ex_results["room_name"] . ' At a fee of Ugx: ' . $_POST["fees"] . '</h6>';
                }
            }
        }
    }
}

// disable booking if room is booked...............

$room_id =  $ex_results['room_id'];
$book_status = "pending";
$hostel_id = $_GET['hostel_id'];


$book = "SELECT * FROM booking_tbl WHERE room_id =  '$room_id' ";
$bk_data = mysqli_query($con, $book);
if (mysqli_num_rows($bk_data) == 0) {

    echo '<button class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Book</button>';
} else {
    echo '<button class="btn btn-secondary w-25" >Booked</button>';
}
