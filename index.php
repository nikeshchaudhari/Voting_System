<?php
session_start();
include("config.php");
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>

    <section>
        <div class="container-fluid nav-bar px-0">
            <div class="row">
                <div class="col-lg-6 col-sm-12 ">
                    <div class="logo d-flex justify-content-lg-start justify-content-sm-center px-1 ">
                        <a href="">
                            <img src="https://www.news24galaxy.com/wp-content/uploads/2022/01/1200px-Election_Commission_Nepal.svg_.png"
                                alt="" width="50px">
                        </a>
                    </div>
                </div>
                <div class=" col-lg-6 d-flex justify-content-lg-end justify-content-sm-center gap-2 px-4">
                    <a class="btn login-btn mt-2" href="login.php" role="button">login</a>
                    <a class="btn logout-btn mt-2" href="signUp.php" role="button">SignUp</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <div class="container-fluid">
        <marquee behavior="0.5" direction="left">voting system काे याे वेबसाइटमा यहाँहरूलाई हार्दिक स्वागत छ।</marquee>
        <div class="row">
            <div class="  col-lg-12 carasole-img mt-2">


                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner ">

                        <div class="carousel-item active">

                            <img src="https://ocmcm.lumbini.gov.np/media/sliders/IMG_0893_rqfCOsn.jpg.1784x600_q85_crop.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/18497559/pexels-photo-18497559/free-photo-of-road-leading-to-a-mountain-valley-hidden-by-fog.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/15906474/pexels-photo-15906474/free-photo-of-a-man-sitting-on-a-hill.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="d-block w-100 " alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- view Candidate Name -->
 <div class="container-fluid  ">
        <div class="row"> 
            <div class=" voter title overflow-hidden ">
                <h3 class=" text-center mt-4 ">Choose Your Voters</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid  voter-view my-4 overflow-hidden">
        <div class="row ">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        
                    </div>
                </div>
            </div>
 <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                       
                    </div>
                </div>
            </div>
             <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                       
                    </div>
                </div>
            </div>
             <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>