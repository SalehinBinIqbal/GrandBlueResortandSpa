<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/facilities.css">
    <!-- <link rel="stylesheet" href="css/contactus.css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/book.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <title>Reservation</title>
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
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Reservation</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link navtext" target="_blank"  href="index.php"> <i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navtext" target="_blank" href="memberlogin.php"><i class="fa fa-sign-in"></i> Login</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="maincontent">
            <div class="container">
                <div class="row">
          
                  <div class="col-md-12">
                      <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="headingtext">
                                    <h4 class="bookheading" id="hdtxt">
                                        Guest Information
                                    </h4>
                                    <h6 id="hdortxt">
                                        OR
                                    </h6>
                                    <button class="btn btn-primary" id="booklogin" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Login to Book Faster
                                    </button>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <form action="" method="POST">
                                                <div class="form-group"> 
                                                    <!-- <label class="text" style="float: left; margin-right: 0.5em; transform: translateY(0.45em);">Member ID</label> -->
                                                    <input style="max-width: 14.5em; float: left; margin-right: 0.5em;" type="text" name="id" placeholder="Member ID" value="" class="form-control" required/>
                                                    <input style="max-width: 14.5em; float: left; margin-right: 0.5em;" type="password" name="password" placeholder="Password" value="" class="form-control" minlength="6" required/>
                                                    <input  name="submitmem" type="submit"  value="Login" class="btn btn-success text"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr style="border-color: black; opacity: 1; margin-bottom: 5%;" class="dropdown-divider"> -->
                                <form action="" method="POST" id="myForm">
                                    <div style="display: none;">
                                        <td></td>
                                    </div>
                                    
          
                                    <div class="form-group mb-3"> 
                                      <label class="txt">Name</label>
                                      <input type="text" autocomplete="off" name="name" value="" class="form-control frm" required/>
                                    </div>
                                    

                                    <div class="form-group mb-3">
                                        <label for="exampleDataList" class="form-label txt">Gender</label>
                                        <input class="form-control frmdd" name="gender" list="datalistOptions" pattern="Male|Female|Other" id="exampleDataList" required>
                                        <datalist id="datalistOptions">
                                            <option value="Male">
                                            <option value="Female">
                                            <option value="Other">
                                        </datalist>
                                    </div>
                                    
                        
                                    <div class="form-group mb-3"> 
                                      <label  class="txt">Email</label>
                                      <input type="email" autocomplete="off"  name="email" value="" class="form-control frm" required/>
                                    </div>
                        
                                    <div class="form-group mb-3"> 
                                      <label  class="txt">Mobile Number</label>
                                      <input type="tel" autocomplete="off" name="phone" value="" class="form-control frm" required>
                                    </div>
                        
                                    <div class="form-group mb-3"> 
                                        <label  class="txt">NID/Passport No.</label>
                                        <input type="text" autocomplete="off" name="nid&psprt" value="" class="form-control frm" required>
                                    </div>

                                    <div class="form-group mb-3"> 
                                        <label  class="txt">Date of Birth</label>
                                        <div class="input-container">
                                            <input type="text" autocomplete="off" name="dob" value="" placeholder="MM/DD/YYYY" class="form-control frmdd datepicker" required><i class="fa fa-calendar"></i>
                                        </div>
                                         
                                    </div>



                                    <div class="form-group mb-3">
                                        <label for="exampleDataList" class="form-label txt">Nationality</label>
                                        <input class="form-control frmdd" name="nationality" list="datalistOptions1" id="exampleDataList1" required>
                                        <datalist id="datalistOptions1">
                                            <option value="Australia">
                                            <option value="Austria">
                                            <option value="Bangladesh">
                                            <option value="Belgium">
                                            <option value="Brazil">
                                            <option value="Canada">
                                            <option value="Chile">
                                            <option value="China">
                                            <option value="Croatia">
                                            <option value="Denmark">
                                            <option value="Egypt">
                                            <option value="England">
                                            <option value="France">
                                            <option value="Germany">
                                            <option value="Hungary">
                                            <option value="India">
                                            <option value="Indonesia">
                                            <option value="Italy">
                                            <option value="Japan">
                                            <option value="Malaysia">
                                            <option value="Mexico">
                                            <option value="Nepal">
                                            <option value="Netherland">
                                            <option value="New Zealand">
                                            <option value="Pakistan">
                                            <option value="Philippines">
                                            <option value="Russia">
                                            <option value="Saudi Arabia">
                                            <option value="Singapore">
                                            <option value="South Korea">
                                            <option value="Spain">
                                            <option value="Thailand">
                                            <option value="United Kingdom">
                                            <option value="United States">
                                            <option value="Vietnam">
                                        </datalist>
                                    </div>
                        
                                    
                                    <h4 class="bookheading" style="margin-top: 10%;">
                                        Booking Information
                                    </h4>

                                    <hr style="border-color: black; opacity: 1; border-style:dashed; margin-bottom: 5%;" class="dropdown-divider">

                                    <div class="form-group mb-3">
                                        <div class="input-container">
                                            <label for="exampleDataList" class="form-label txt">Selected Room </label>
                                            <p id="roomdetailslink">(For details <a href="rooms.php" target="_blank">click here.</a>)</p>
                                        </div>
                                        
                                        <input class="form-control frmdd" name="room" list="datalistOptions2" pattern="Ocean Side Villa|Family Villa|Deluxe Suite|Premium Suite|Ocean Side Room" id="exampleDataList2" required>
                                        <datalist id="datalistOptions2">
                                            <option value="Ocean Side Villa">
                                            <option value="Family Villa">
                                            <option value="Deluxe Suite">
                                            <option value="Premium Suite">
                                            <option value="Ocean Side Room">
                                        </datalist>
                                    </div>

                                    <div class="form-group mb-3"> 
                                        <label  class="txt">Check In</label>
                                        <div class="input-container">
                                            <input type="text" autocomplete="off" name="checkin" value="" placeholder="MM/DD/YYYY" class="form-control frmdd datepicker" required><i class="fa fa-calendar"></i>
                                        </div>
                                         
                                    </div>

                                    <div class="form-group mb-3"> 
                                        <label  class="txt">Check Out</label>
                                        <div class="input-container">
                                            <input type="text" autocomplete="off" name="checkout" value="" placeholder="MM/DD/YYYY" class="form-control frmdd datepicker" required><i class="fa fa-calendar"></i>
                                        </div>
                                         
                                    </div>

                                    <h4 class="bookheading" style="margin-top: 5%;">
                                        Membership Information
                                    </h4>

                                    <hr style="border-color: black; opacity: 1; border-style:dashed; margin-bottom: 2.5%;" class="dropdown-divider">


                                    <div class="form-group mb-3"> 
                                        <div class="input-container">
                                            <label for="exampleDataList" class="form-label txt">Do you want to be our member?</label>
                                            <p id="roomdetailslink">(Extra charges may apply)*</p>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="memberyes">
                                            <label class="form-check-label text" for="flexRadioDefault1">
                                              Yes
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="memberno" checked>
                                            <label class="form-check-label text" for="flexRadioDefault2">
                                              No
                                            </label>
                                        </div>
                                         
                                    </div>

                                    
                        
                                    <div class="form-group mb-3"> 
                                      <input name="book" type="submit"  value="Book Now" class="btn btn-outline-primary bookheading" id="sbmt"/>
                                    </div>
                        
                                </form>
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
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
    </script>

</body>

</html>