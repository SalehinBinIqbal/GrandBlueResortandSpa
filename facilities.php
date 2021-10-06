<?php 
        include_once 'includes/conn_include.php';
        session_start();
        if(!isset($_SESSION['login_memberID'])){
            header('location: memberlogin.php');
        }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/facilities.css">

    <title>Member Facilities</title>
</head>

<body>
    <div>
        <div>
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
                <div class="container-fluid">
                    <div class="text-center">
                        <img src="images/commonimages/Logo.png" width="40px" alt="">
                        <p id="subheading">Resort & Spa</p>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selfcare</h5>
                            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link navtext" aria-current="page" href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active navtext" href="facilities.php">Facilities</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                            <a href="logout.php">
                                <button id="logoutbtn" type="button" class="btn btn-danger navtext">Logout <i class="fa fa-sign-out"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="maincontent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Spa</h5>
                                        <p class="card-text">By being a member of our services you're having the benefit of visiting our spa for free while staying.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="images/Relax/Relax_2.jpg" class="img-fluid rounded-start" alt="...">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Gym Membership</h5>
                                        <p class="card-text">By being a member of our services you're having the benefit of having a free gym membership card.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="images/Relax/Relax_4.png" class="img-fluid rounded-start" alt="...">
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-7">
                                    <img src="images/Enjoy/Enjoy.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Golf Equipment</h5>
                                        <p class="card-text">By being a member of our services you're having the benefit of not renting any single equipment to play golf.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-7">
                                    <img src="images/Enjoy/Enjoy4.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Tennis Equipment</h5>
                                        <p class="card-text">By being a member of our services you're having the benefit of not renting any single equipment to play tennis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Movie Tickets</h5>
                                        <p class="card-text">By being a member of our services you're having the benefit of not buying any tickets to watch movies while staying.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="images/Enjoy/Enjoy1.jpg" class="img-fluid rounded-start" alt="...">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Watersports Equipment</h5>
                                        <p class="card-text">By Being a member of our services you're having the benefit of not renting any single equipment to play watersports.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="images/Enjoy/Enjoy3.jpg" class="img-fluid rounded-start" alt="...">
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <p id="cpyrttext">
            © Copyright 2021 GrandBlue Resort & Spa. | All Rights Reserved | Powered by SNASBI
        </p>
    </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>