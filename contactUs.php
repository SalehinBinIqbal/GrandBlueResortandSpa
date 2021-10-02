<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/commondesign.css">
    <link rel="stylesheet" href="css/contactus.css">

    <title>GrandBlue Resort & Spa / ContactUs</title>
</head>

<body>
    <div>
        <div class="commonheader">
            <div class="header">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <div class="text-center">
                                <img src="images/commonimages/Logo.png" width="40px" alt="">
                                <p id="subheading">Resort & Spa</p>
                            </div>
                        </a>
                        <h4 id="navtitle">Menu</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="btn btn-secondary" href="book.php" target="_blank" role="button">Reservation</a>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h3>
                                <button type="button" class="btn-close btn-close-white text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php">
                                            <p class="navbarwords">Home</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="whyUs.php">
                                            <p class="navbarwords">Why Us</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="rooms.php">
                                            <p class="navbarwords">Rooms & Suites</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="dine.php">
                                            <p class="navbarwords">Restaurants & Cafe</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="relax.php">
                                            <p class="navbarwords">Relaxation</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="enjoy.php">
                                            <p class="navbarwords">Recreations</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="contactUs.php">
                                            <p class="navbarwords">Contact Us</p>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="team.php" target="_blank">
                                            <p class="navbarwords">Team</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade  topcarousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/contactUs/banner1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/contactUs/banner4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/contactUs/banner2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text-center">
                <a href="index.php">
                    <img class="logo" src="images/commonimages/Logo.png" alt="...">
                </a>
                <div class="logotext">
                    <a id="grandtext" href="index.php">Grand</a>
                    <a id="bluetext" href="index.php">Blue</a>
                    <div id="resorttext">
                        <p><a id="subtext" href="index.php">Resort & Spa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contactblock commonblock">
          <div class="container">
            <div class="row">
      
              <div class="col-md-12">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="headingtext">
                                <p id="contactheading1">
                                    Let's Talk and
                                </p>
                                <h1 id="contactheading2">
                                  Get Together
                                </h1>
                            </div>
                            <form action="" method="POST" id="myForm">
      
                                <div class="form-group mb-3"> 
                                  <!-- <label class="text">Name</label> -->
                                  <input type="text" autocomplete="off" placeholder="Name" name="name" value="" class="form-control" required/>
                                </div>
                    
                    
                                <div class="form-group mb-3"> 
                                  <!-- <label  class="text">Email</label> -->
                                  <input type="email" autocomplete="off" placeholder="Email"  name="email" value="" class="form-control" required/>
                                </div>
                    
                                <div class="form-group mb-3"> 
                                  <!-- <label  class="text">Mobile Number</label> -->
                                  <input type="tel" autocomplete="off" placeholder="Mobile" name="phone" value="" class="form-control" required>
                                </div>
                    
                                <div class="form-group mb-3"> 
                                  <!-- <label class="text">Message</label> -->
                                  <textarea class="form-control" autocomplete="off" placeholder="Type your text" id="exampleFormControlTextarea1" name="message"  value="" rows="5" required></textarea>
                                </div>
                    
                    
                    
                                <div class="form-group mb-3"> 
                                  <input name="submit" type="submit"  value="Submit" class="btn btn-outline-primary submit"/>
                                </div>
                    
                            </form>
                        </div>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>                
    </div>

    <div class="commonfooter">
        <div class="prefooter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 id="footername">GrandBlue Resort & Spa</h3>
                                <p id="footertext">Inani, Cox's Bazar, Chittagong, Bangladesh.</p>
                            </div>
                        </div>
                        <div class="row" id="followsection">
                            <div class="col-sm-12">
                                <h5 id="followus">Follow Us</h5>
                            </div>
                        </div>
                        <div class="row" id="footerimglink">
                            <div class="col-sm-12">
                                <div class="row row-cols-4">
                                    <div class="col-sm-3">
                                        <a href="https://www.facebook.com" target="_blank">
                                            <img id="fb" data-toggle="tooltip" data-placement="bottom" title="Facebook"
                                                src="images/commonimages/facebook.svg" width="50px" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://www.twitter.com/login" target="_blank">
                                            <img id="tweet" data-toggle="tooltip" data-placement="bottom"
                                                title="Twitter" src="images/commonimages/twitter.svg" width="50px"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://www.instagram.com" target="_blank">
                                            <img id="ig" data-toggle="tooltip" data-placement="bottom" title="Instagram"
                                                src="images/commonimages/instagram.svg" width="50px" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://www.discord.com/login" target="_blank">
                                            <img id="dc" data-toggle="tooltip" data-placement="bottom" title="Discord"
                                                src="images/commonimages/discord.svg" width="50px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                          <img src="images/whyus/award.png" width="125px" alt="">
                          <img src="images/whyus/award2.png" width="125px" alt="">
                        </div>
                      </div>
                    <div class="col-sm-4 text-center">
                        <div class="row row-cols-2">
                            <div class="col-sm-6">
                                <a class="footerlink" href="rooms.php">Stay</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="book.php" target="_blank">Book</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="dine.php">Dine</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="whyUs.php">About</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="relax.php">Relax</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="contactUs.php">Contact</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="enjoy.php">Enjoy</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="footerlink" href="team.php" target="_blank">Team</a>
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


    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
        document.getElementById("myForm").addEventListener("submit", myFunction);
        
        function myFunction() {
          alert("Thank you for contacting us!\nWe will respond to your request shortly!");
        }
    </script>
        
</body>

</html>