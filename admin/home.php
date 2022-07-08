<?php
include('./config/connect.php');
include "../include/navbar.php";



?>

<!-- side navbar here -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">HOME</h3>
            <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
            <br>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body h5"><i class="fa fa-bell fa-2x"></i>
                            <span class="h3 text-warning ml-2"></span>

                            <span class=" top-0 start-100 translate-middle badge rounded-pill bg-danger" id="num_notification">
                                <span class="visually-hidden">unread messages</span>
                            </span>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="http://localhost/HostelApp\Hoste_site\admin\config\__update_notification.php" style="text-decoration:none">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">

                        <div class="card-body h5">Pending Bookings &nbsp;
                            <span class="h3 text-warning ml-5">

                                <?php
                                $sql = "SELECT * FROM booking_tbl WHERE Booking_status = 'pending'";

                                $rsl = mysqli_query($con, $sql);
                                $num = mysqli_num_rows($rsl);
                                if ($num < 10) {
                                    echo '0' . $num;
                                } else {
                                    echo $num;
                                }


                                ?>
                            </span>

                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="booking.php" style="text-decoration:none">View Details>>></a>
                            <!-- <a class="small text-white stretched-link" href="#" style="text-decoration:none">View Details</a> -->
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body h5">Users &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <span class="h3 text-info  ml-5">

                                <?php
                                $sql = "SELECT * FROM user_tbl WHERE type = 'users' AND status ='active'";

                                $rsl = mysqli_query($con, $sql);
                                $num = mysqli_num_rows($rsl);
                                if ($num < 10) {
                                    echo '0' . $num;
                                } else {
                                    echo $num;
                                }


                                ?>
                            </span>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="tables.php" style="text-decoration:none">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body h5">Hostels &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <span class="h3 text-dark  ml-5">

                                <?php
                                $sql = "SELECT * FROM hostel_tbl WHERE status ='active'";

                                $rsl = mysqli_query($con, $sql);
                                $num = mysqli_num_rows($rsl);
                                if ($num < 10) {
                                    echo '0' . $num;
                                } else {
                                    echo $num;
                                }


                                ?>
                            </span>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="all_hostel.php" style="text-decoration:none">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "../include/footer.php";
    ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="js/custom.js"></script>
</body>

</html>