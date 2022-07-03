<?php


if(trim($rows['Booking_status'])=='pending'){?>
<!-- put this form if the status is pending -->
<form action="./config/__confirm_cancel_book.php" method="post">
    <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
    <input type="hidden" value="<?php echo $rows['user_id'] ;?>" name="user_id">
    <div class="btn bg-success rounded  btn-sm" >Pending</div>
    <button class="btn btn-sm bg-danger rounded" name="cancel">Cancel</button>
    <button class="btn btn-sm bg-primary rounded" name="confirm">Confirm</button>
</form>
<?php
    // echo "Pending";
}else if(trim($rows['Booking_status'])=='confirmed'){?>

<!-- put this form if the status is confirmed -->
    
    <form action="./config/__confirm_cancel_book.php" method="post">
        <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
        <input type="hidden" value="<?php echo $rows['user_id'] ;?>" name="btn_id">
        <button class="btn btn-sm bg-primary rounded">Confirmed</button>
        <button class="btn btn-sm bg-danger rounded" name="cancel">Cancel</button>
    </form>
    
    <?php

}else {?>

<!-- put this form if the status is councelled -->
<form action="./config/__confirm_cancel_book.php" method="post">
    <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
    <input type="hidden" value="<?php echo $rows['user_id'] ;?>" name="btn_id">
    <button class="btn btn-sm bg-danger rounded ">Cancelled</button>
    <button class="btn btn-sm bg-primary rounded"  name="confirm">Confirm</button>
</form>

<?php


}




// clser
?>

    


