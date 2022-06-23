
<?php
include "connect.php";
$hostelId = trim($_POST['hostelId']);
$hostelNmame = trim($_POST['hostelname']);
// $hostelImage = trim($_POST['hostelImage']);
$hostelDescription = trim($_POST['hostelDescription']);
$status = 'active';

// query for sellecting the user id whhostelNae equela to the inhostelNae
if (empty($hostelId) || empty($hostelNmame) || empty($hostelDescription || $hostelImage)) {
    echo ("<script>alert('Fill out all the fields')</script>");
} else {

    // first select to check if hostel is not yet registered
    $sql1 = "SELECT * FROM hostel_tbl WHERE hostel_name = '$hostelNmame' AND status = 'active'";
    $execute1 = mysqli_query($con, $sql1);
    if ($execute1) {

        if (mysqli_num_rows($execute1) > 0) {
            echo ("<script>alert('Hostel already exist')</script>");
        } else {

            // uploade image to the upload folder
            if ($_FILES['hostelImage']) {
                $name = $_FILES['hostelImage']['name'];
                $temp_name = $_FILES['hostelImage']['tmp_name'];
                $image_exe =  strtolower(pathinfo($name, PATHINFO_EXTENSION));
                $allow_exe = ['png', 'jpeg', 'jpg', 'svg'];

                if (in_array($image_exe, $allow_exe)) {
                    $new_file_name =  'IMG-' . uniqid().".".$image_exe;
                    move_uploaded_file($temp_name, "../upload/".$new_file_name);

                    //then push the whole thing to the database
                    $sql2 = "INSERT INTO hostel_tbl (hostel_name, user_id, hostel_description,hostel_image,status )
                            VALUES('$hostelNmame', '$hostelId','$hostelDescription',' $new_file_name', '$status')";

                    $execute2 = mysqli_query($con, $sql2);
                    if ($execute2) {
                        // $success = '<p class="text-success">Hostel add successfully...</p>';
                        echo "<script>alert('Hostel Added Sucessfully')</script>";
                         header("location:http://localhost/HostelApp/Hoste_site/admin/layout-static.php");
                        } else {
                            echo (mysqli_error($con) . "<script>alert('Something went wrong')</script>");
                            header("location:http://localhost/HostelApp/Hoste_site/admin/layout-static.php");
                        }
                    } else {
                        echo ("<script>alert('You can only upload jpeg, png, jpg, svg')</script>");
                        header("location:http://localhost/HostelApp/Hoste_site/admin/layout-static.php");
                }
            }
        }
    } else {
        echo 'Can not connect' . mysqli_error($con);
    }
}
