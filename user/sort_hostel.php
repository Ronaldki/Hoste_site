<div class=" col-sm-5 col-ms-7 mt-3">

<ul class="list-group">
  <li class="list-group-item">
    <div class="h4 text-primary text-center">Sort Hostel</div>

  </li>
  <li class="list-group-item">
    <form class="form-inline " method="get" action="dispay_sort_hostel.php">
        <input type="hidden" name="status">
      <div class="form-group mx-sm-3 mb-2">
        <input type="number" class="form-control" id="inputPassword2" placeholder="min price" name="min">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <input type="number" class="form-control" id="inputPassword2" placeholder="max price" name="max">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

  </li>
  <li class="list-group-item">
    <a href="dispay_sort_hostel.php?status=single&min=&max=" class="p-2 text-secondary w-100" style="text-decoration:none ;">Single Rooms</a>

  </li>
  <li class="list-group-item">
    <a href="dispay_sort_hostel.php?status=double&min=&max=" class=" p-2 text-secondary w-100" style="text-decoration:none ;">Double Rooms</a>

  </li>
</ul>
</div>