<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="sticky-top">


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand w-25" href="home.php">Beacon Hostel</a>
            <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hostels</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <a class="nav-link " href="#"><i class="fa fa-shopping-cart text-light">Booked</i> </a>
                <div class="btmessage">
                    <a class="nav-link nav-icons" href="#">
                        <i class="fa fa-envelope"></i>
                        <span class="text-danger ">3</span>
                    </a>

                </div>
            </div>
        </nav>
    </section>

    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner iamge_courosel">
                <!-- <div class="carousel-item active  ">
                    <img class="d-block w-100" height="500vh" src="../admin/assets/img/testimonial-bg1.jpg" alt="First slide">
                </div> -->
                <div class="carousel-item active slide_image_parent">
                    <div class="caption ">
                        <div class="caption_wrapper">
                            <p class="text-light"> welcome to...</p>
                            <h2> beacon hostel </h2>

                            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

                        </div>
                    </div>
                    <img class="d-block w-100 slide_image " height="600px" src="../admin/assets/img/testimonial-bg1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item slide_image_parent">
                    <div class="caption ">
                        <div class="caption_wrapper">
                            <p class="text-light"> get your best hostel here... </p>
                            <h2> on beacon hostel </h2>

                            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

                        </div>
                    </div>
                    <img class="d-block w-100 slide_image " height="600px" src="../admin/assets/img/testimonial-bg1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item slide_image_parent">
                    <div class="caption ">
                        <div class="caption_wrapper">
                            <p class="text-light">wish you nice stay... </p>
                            <h2> in our hostel </h2>

                            <button class="view_hostel text-light"><a href="">get your hostel</a></button>

                        </div>
                    </div>
                    <img class="d-block w-100 slide_image " height="600px" src="../admin/uploads/IMG-62a1c41753bec.jpg" alt="Second slide">
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100 " height="500vh" src="../admin/assets/img/testimonial-bg1.jpg" alt="Third slide">
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>