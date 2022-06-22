<?php
ob_start();
include "./config/connect.php";
include "../include/navbar.php";
// include('./config/__register_house_owners.php')


?>
<!-- 
           Navbar section.............
        -->
<div id="layoutSidenav_content">
    <main>

        <h1 class="my-4 mx-2">Register House owners</h1>
        <div class="container-fluid px-4">
            <form method='post'>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name='fname' class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">First name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name='lname' class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input name='phone' class="form-control" id="inputEmail" type="text" placeholder="+256 70.." />
                    <label for="inputEmail">Phone</label>
                </div>
                <div class="form-floating mb-3">
                    <input name='email' class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name='password' class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input name='confirm_password' class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                            <label for="inputPasswordConfirm">Confirm Password</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn-success" name='submit' type="submit">Create Account</button></div>
                </div>
            </form>

        </div>
    </main>
    <?php



    include('./config/__register_house_owners.php');
    include "../include/footer.php";
    ?>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>