<?php 
  include_once 'includes/conn_include.php';
  session_start();
  if(isset($_SESSION['login_memberID'])){

    $memberID1 = $_SESSION['login_memberID'];
    $query = "SELECT * FROM members WHERE memID= '$memberID1'";
    $sql = mysqli_query($link,$query);

    $noOfrow = mysqli_num_rows($sql);

    if($noOfrow){
      $row = mysqli_fetch_assoc($sql);
      $memberID = $row['memID'];
      $mem_name1 = $row['mem_name'];
      $gender1 = $row['gender'];
      $email1 = $row['email'];
      $mobile1 = $row['mobile'];
      $nid1 = $row['nid'];
      $dateofbirth1 = $row['DateOfBirth'];
      $nationality1 = $row['nationality'];
      $room = $row['room'];
      $lastCheckin = $row['checkin'];
      $lastCheckout = $row['checkout'];
      $times_visited = $row['times_visited'];
      $currPassword = $row['mem_password'];
    }

    if(isset($_POST['submitmob'])){
      if(isset($_POST['phone'])){
        $updatePhone= $_POST['phone'];
        $update_member_table = "UPDATE members SET mobile = '$updatePhone'  where memID = $memberID1 ";
        $resultupdate_members = mysqli_query ($link, $update_member_table) or die( mysqli_error ($link));
        header('location: profile.php');
      }

    }
    if(isset($_POST['submitmail'])){
        if(isset($_POST['email'])){
          $updateEmail= $_POST['email'];
          $update_member_table = "UPDATE members SET email = '$updateEmail'  where memID = $memberID1 ";
          $resultupdate_members = mysqli_query ($link, $update_member_table) or die( mysqli_error ($link));
          header('location: profile.php');
        }
    }
    if(isset($_POST['submitpassword'])){ 
      $currPass = $_POST['curpass'];
        if(isset($currPass)){
          if(md5($currPass) === $currPassword){
            $newPass = $_POST['newpass'];
            $newPass1 = md5($newPass);
            if($newPass == $_POST['conpass']){
              $update_member_table = "UPDATE members SET mem_password = '$newPass1'  where memID = $memberID1 ";
              $resultupdate_members = mysqli_query ($link, $update_member_table) or die( mysqli_error ($link));
              $successUpdate = 'success';
            }
            else{
              $missmatch = "Password Mismatch";
            }
          }
          else{
            $wrongCurrPass = "Incorrect Password";
          }
        }
    }
}
else{
  $_SESSION['error_login'] = 'Please Login First';
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
    <link rel="stylesheet" href="css/member.css">

    <title>Member Profile</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selfcare</h5>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active navtext" aria-current="page" href="profile.php">Profile</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navtext" href="facilities.php">Facilities</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Change Password</button>
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
        <?php 
          if(isset($missmatch) || isset($wrongCurrPass)){ ?>
            <div class="alert alert-danger  alert-dismissible fade show text-center" role="alert">
              <strong>Warning!</strong>&nbsp There's been an error while changing your password!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php }
        ?>
        <?php 
          if(isset($successUpdate)){ ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <strong>Well Done!</strong>&nbsp You've successfully updated your password!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php }
        ?>
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 blk">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">My Information</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-borderless">
                          <tbody>
                            <tr>
                              <td class="section">Name:</td>
                              <td class="value"><?php echo $mem_name1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Date of Birth:</td>
                              <td class="value"><?php echo  $dateofbirth1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Gender:</td>
                              <td class="value"><?php echo  $gender1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Mobile:</td>
                              <td class="value"><?php echo  $mobile1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Email:</td>
                              <td class="value"><?php echo  $email1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">NID/Passport:</td>
                              <td class="value"><?php echo  $nid1; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Nationality:</td>
                              <td class="value"><?php echo  $nationality1; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <button class="btn btn-outline-secondary updt" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update Contact Information</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 blk">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">My Service Information</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-borderless">
                          <tbody>
                            <tr>
                              <td class="section">Member ID:</td>
                              <td class="value"><?php echo  $memberID; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Times Visited:</td>
                              <td class="value"><?php echo $times_visited; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Last room type:</td>
                              <td class="value"><?php echo  $room; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Last Check in:</td>
                              <td class="value"><?php echo  $lastCheckin; ?></td>
                            </tr>
                            <tr>
                              <td class="section">Last Check out:</td>
                              <td class="value"><?php echo  $lastCheckout; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Update Contact Information</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="phone" checked>
                <label class="form-check-label txt" for="flexRadioDefault1">
                  Mobile
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="email">
                <label class="form-check-label txt" for="flexRadioDefault2">
                  Email
                </label>
              </div>
              <form action="" method="POST" class="phone box">
    
                <div class="form-group mb-3"> 
                  <!-- <label  class="text">Mobile Number</label> -->
                  <input id="mob" type="tel" autocomplete="off" placeholder="Enter Mobile" name="phone" value="" class="form-control txt" required>
                </div>
    
                <div class="form-group mb-3" style="float: right;"> 
                  <input name="submitmob" type="submit"  value="Submit" class="btn btn-success txt"/>
                  <button type="button" class="btn btn-danger txt" data-bs-dismiss="modal">Cancel</button>
                </div>
    
              </form>
              <form action="" method="POST" class="email box">

                <div class="form-group mb-3"> 
                  <!-- <label  class="text">Email</label> -->
                  <input id="mail" type="email" autocomplete="off" placeholder="Enter Email"  name="email" value="" class="form-control txt" required/>
                </div>
    
                <div class="form-group mb-3" style="float: right;"> 
                  <input name="submitmail" type="submit"  value="Submit" class="btn btn-success txt"/>
                  <button type="button" class="btn btn-danger txt" data-bs-dismiss="modal">Cancel</button>
                </div>
    
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" class="phone box">
    
                <div class="form-group mb-3"> 
                  <label  class="txt">Current Password</label>
                  <input type="password" autocomplete="off" name="curpass" value="" class="form-control txt" minlength="6" required>
                </div>
                
                <div class="form-group mb-3"> 
                  <label  class="txt">New Password</label>
                  <input type="password" autocomplete="off" name="newpass" value="" class="form-control txt" minlength="6" required>
                </div>

                <div class="form-group mb-3"> 
                  <label  class="txt">Confirm Password</label>
                  <input type="password" autocomplete="off" name="conpass" value="" class="form-control txt" minlength="6" required>
                </div>

                <div class="form-group mb-3" style="float: right;"> 
                  <input name="submitpassword" type="submit"  value="Submit" class="btn btn-success txt"/>
                  <button type="button" class="btn btn-danger txt" data-bs-dismiss="modal">Cancel</button>
                </div>
    
              </form>
              <?php
                if(isset($missmatch)){
                  echo '<p class="txt" style="color: red; margin-top:1%;">'.$missmatch.'</p>';
                }
                if(isset($wrongCurrPass)){
                  echo '<p class="txt" style="color: red;  margin-top:1%;">'.$wrongCurrPass.'</p>';
                }
              ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function(){
          $('input[type="radio"]').click(function(){
            document.getElementById("mob").value = "";
            document.getElementById("mail").value = "";
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);          
            $(".box").not(targetBox).hide();
            $(targetBox).show();
              
          });
      });
    </script>

  </body>
</html>