<?php


if(trim($rows['Booking_status'])=='pending'){?>


<form action="./partials/__owner_confirmation.php" method="post">
    <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
    <input type="hidden" value="<?php echo $rows['user_id'] ;?>" name="user_id">
    <div class="btn bg-success rounded  btn-sm" >Pending</div>
    <button class="btn btn-sm bg-danger rounded" name="cancel">Cancel</button>
    <button class="btn btn-sm bg-primary rounded" name="confirm">Confirm</button>
</form>
<?php
    // echo "Pending";
}else if(trim($rows['Booking_status'])=='confirmed'){?>
    
    <form action="./partials/__owner_confirmation.php" method="post">
        <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
        <!-- <button class="btn btn-sm bg-danger rounded disabled">Cancel</button> -->
        <button class="btn btn-sm bg-primary rounded">Confirmed</button>
    </form>
    
    <?php

}else {?>

<form action="./partials/__owner_confirmation.php" method="post">
    <input type="hidden" value="<?php echo $rows['booking_id'] ;?>" name="btn_id">
    <button class="btn btn-sm bg-danger rounded ">Cancelled</button>
    <button class="btn btn-sm bg-primary rounded"  name="confirm">Confirm</button>
</form>

<?php


}




// clser
?>

    


