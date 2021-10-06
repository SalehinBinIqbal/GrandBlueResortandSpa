<?php 
    include_once 'includes/conn_include.php';

    session_start();
    $member_flag =1;
    if(!isset($_POST['submitmem'])){
        $mem_name1 = '';
        $gender1 = '';
        $email1 = '';
        $mobile1 = '';
        $nid1 = '';
        $dateofbirth1 = '';
        $nationality1 = '';  
    }

    if(isset($_POST['submitmem'])){

        $_SESSION['memID']=$_POST['id'];
        $memID = $_POST['id'];
        $memPassword = md5($_POST['password']);

        $sql = "SELECT * FROM members WHERE memID='$memID' and mem_password='$memPassword'";
        $memberresult = mysqli_query ($link, $sql) or die( mysqli_error ($link));
        if(mysqli_num_rows($memberresult)>0){
            while($data = mysqli_fetch_assoc($memberresult)) {
                $memberID = $data['memID'];
                $mem_name1 = $data['mem_name'];
                $gender1 = $data['gender'];
                $email1 = $data['email'];
                $mobile1 = $data['mobile'];
                $nid1 = $data['nid'];
                $dateofbirth1 = $data['DateOfBirth'];
                $nationality1 = $data['nationality'];
            }
            $member_flag =1;           
        }
        else{
            unset($_POST['id']);
            $memberID = '';
            $mem_name1 = '';
            $gender1 = '';
            $email1 = '';
            $mobile1 = '';
            $nid1 = '';
            $dateofbirth1 = '';
            $nationality1 = '';  
            $error = "Invalid Member ID or Password";
        }
        
    }  
    
    
        if(isset($_POST['book'])){
            
            if(isset($_POST['null_value'])){

            if(isset($_SESSION['memID'])){
            $memberID = $_SESSION['memID'];
            $member_room = $_POST['room'];
            $member_checkin = $_POST['checkin'];
            $member_checkout = $_POST['checkout'];

            $sql = "SELECT * FROM members WHERE memID = $memberID";
            $memberresult = mysqli_query ($link, $sql) or die( mysqli_error ($link));
            $noOfrow = mysqli_num_rows($memberresult);

            if($noOfrow){
                $row = mysqli_fetch_assoc($memberresult);
                $mem_name1 = $row['mem_name'];
                $gender1 = $row['gender'];
                $email1 = $row['email'];
                $mobile1 = $row['mobile'];
                $nid1 = $row['nid'];
                $dateofbirth1 = $row['DateOfBirth'];
                $nationality1 = $row['nationality'];
                $visit_number = $row['times_visited'];
            }

            $memberBooksql = "INSERT INTO books (memberID,memberName,memberGender,memberEmail,memberMobile,memberNid,memberDob,memberNationality,memberRoom,memberCheckin,memberCheckout,memberStatus) VALUES('$memberID','$mem_name1','$gender1','$email1','$mobile1','$nid1','$dateofbirth1','$nationality1','$member_room','$member_checkin','$member_checkout',2)";
            $resultInsertbooks = mysqli_query ($link, $memberBooksql) or die( mysqli_error ($link));

            $visit_number = $visit_number +1;
            $update_member_table = "UPDATE members SET room = '$member_room', checkin = '$member_checkin', checkout = '$member_checkout', times_visited = $visit_number where memID = $memberID ";
            $resultupdate_members = mysqli_query ($link, $update_member_table) or die( mysqli_error ($link));
            }
        }
        }

        if(isset($_POST['book'])){
            
            $name=$_POST['name'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nid = $_POST['nid&psprt'];
            $dateofbirth = $_POST['dob'];
            $nationality = $_POST['nationality'];
            $room = $_POST['room'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $radioval = $_POST['flexRadioDefault'];


            if($radioval == "memberno"){
                
                $sql = "INSERT INTO books (memberName,memberGender,memberEmail,memberMobile,memberNid,memberDob,memberNationality,memberRoom,memberCheckin,memberCheckout,memberStatus) VALUES('$name','$gender','$email','$phone','$nid','$dateofbirth','$nationality','$room','$checkin','$checkout',1)";
                $resultInsert = mysqli_query ($link, $sql) or die( mysqli_error ($link));
                $memberStatus = 1;                                        
           }
            
            if($radioval == "memberyes"){
            
                $sql = "INSERT INTO members (mem_name,gender,email,mobile,nid,DateOfBirth,nationality,room,checkin,checkout,mem_password,mem_status) VALUES('$name','$gender','$email','$phone','$nid','$dateofbirth','$nationality','$room','$checkin','$checkout',md5('GB1234'),2)";
                 
                if (mysqli_query($link, $sql)) {
                    $last_id = mysqli_insert_id($link);
                }
                $memberBooksql = "INSERT INTO books (memberID,memberName,memberGender,memberEmail,memberMobile,memberNid,memberDob,memberNationality,memberRoom,memberCheckin,memberCheckout,memberStatus) VALUES('$last_id','$name','$gender','$email','$phone','$nid','$dateofbirth','$nationality','$room','$checkin','$checkout',2)";
                $resultInsertbooks = mysqli_query ($link, $memberBooksql) or die( mysqli_error ($link));
            }
            if (!isset($_SESSION)) {
                session_start();
            }            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_SESSION['postdata'] = $_POST;
                unset($_POST);
                header("Location: ".$_SERVER['PHP_SELF']);
                exit;
        }
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
                                                    <input style="max-width: 14.5em; float: left; margin-right: 0.5em;" type="text" name="id" placeholder="Member ID" value="<?php if(isset($_POST['submitmem']) && $member_flag == 1 ){echo $memberID;} else { echo '';} ?>" class="form-control" required/>
                                                    <input style="max-width: 14.5em; float: left; margin-right: 0.5em;" type="password" name="password" placeholder="Password" value="" class="form-control" minlength="6" required/>
                                                    <input  name="submitmem" type="submit"  value="Login" class="btn btn-success text"/>
                                                </div>
                                            </form>
                                            <?php                                
                                                if(isset($error)){
                                                    echo '<p style="color: red ; margin-bottom:0; ">'.$error.'</p>';
                                                                                 
                                                }                                                              
                                             ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr style="border-color: black; opacity: 1; margin-bottom: 5%;" class="dropdown-divider"> -->
                                <form action="" method="POST" id="myForm">
                                    <div style="display: none;">
                                    <input type="text" name="null_value" value="<?php if(isset($_POST['book'])){$null_value = "boom"; echo $null_value;} ?>">
                                            <?php 
                                            // if(isset($_POST['submitmem'])){
                                            //     if(mysqli_num_rows($memberresult)>0){
                                            //         while($data = mysqli_fetch_assoc($memberresult)) { 
                                            //             $memberStatus = $data['mem_status']; ?> <td>
                                            //             <?php echo $memberStatus;
                                            //         }
                                            //     }
                                            // }    
                                            ?>
                                        </td>
                                    </div>
                                    
          
                                    <div class="form-group mb-3"> 
                                      <label class="txt">Name</label>
                                      <input type="text" autocomplete="off" name="name" value="<?php echo $mem_name1; ?>" class="form-control frm" required/>
                                    </div>
                                    

                                    <div class="form-group mb-3">
                                        <label for="exampleDataList" class="form-label txt">Gender</label>
                                        <input class="form-control frmdd" name="gender" value = "<?php echo $gender1; ?>" list="datalistOptions" pattern="Male|Female|Other" id="exampleDataList" required>
                                        <datalist id="datalistOptions">
                                            <option value="Male">
                                            <option value="Female">
                                            <option value="Other">
                                        </datalist>
                                    </div>
                                    
                        
                                    <div class="form-group mb-3"> 
                                      <label  class="txt">Email</label>
                                      <input type="email" autocomplete="off"  name="email" value="<?php echo $email1; ?>" class="form-control frm" required/>
                                    </div>
                        
                                    <div class="form-group mb-3"> 
                                      <label  class="txt">Mobile Number</label>
                                      <input type="tel" autocomplete="off" name="phone" value="<?php echo $mobile1; ?>" class="form-control frm" required>
                                    </div>
                        
                                    <div class="form-group mb-3"> 
                                        <label  class="txt">NID/Passport No.</label>
                                        <input type="text" autocomplete="off" name="nid&psprt" value="<?php echo $nid1; ?>" class="form-control frm" required>
                                    </div>

                                    <div class="form-group mb-3"> 
                                        <label  class="txt">Date of Birth</label>
                                        <div class="input-container">
                                            <input type="text" autocomplete="off" name="dob" value="<?php echo $dateofbirth1; ?>" placeholder="MM/DD/YYYY" class="form-control frmdd datepicker" required><i class="fa fa-calendar"></i>
                                        </div>
                                         
                                    </div>



                                    <div class="form-group mb-3">
                                        <label for="exampleDataList" class="form-label txt">Nationality</label>
                                        <input class="form-control frmdd" value="<?php echo $nationality1; ?>" name="nationality" list="datalistOptions1" id="exampleDataList1" required>
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

                                    <?php
                                        if(!isset($_POST['id'])){
                                    ?>

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
                             <?php } ?>

                                    
                        
                                    <div class="form-group mb-3"> 
                                      <input name="book" type="submit"  value="Book Now" class="btn btn-outline-primary bookheading" id="sbmt"/>
                                    </div>
                                    <?php                                
                                        if(isset($fail_message)){
                                            echo '<p style="color: red ; margin-bottom:0; ">'.$fail_message.'</p>';
                                        }                                                              
                                    ?>
                        
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