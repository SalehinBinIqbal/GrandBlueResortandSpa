<?php 
    include_once 'includes/conn_include.php';
    session_start();

    if(isset($_POST['submit'])){
        $memID = $_POST['id'];
        $memPassword = $_POST['password'];
        
        $query = "SELECT * FROM members WHERE memID= '$memID'";
        $sql = mysqli_query($link,$query);
        
        if(mysqli_num_rows($sql)>0){
            $row = mysqli_fetch_assoc( $sql);
            $memberID = $row['memID'];
            $mainMemberPassword = $row['mem_password'];          
            if($memberID == $memID && $mainMemberPassword == md5($memPassword))  {
                
                $memberData = $row['memID'];
                $_SESSION['login_memberID'] = $memberData;
                header('location: profile.php');
            }
            else{
                $error = "Invalid Member ID or Password";
            }        
        }
        else{
            $error = "Invalid Member ID or Password";
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
    <link rel="stylesheet" href="css/login.css">

    <title>Member Login</title>
</head>

<body>
    <div>
        <div class="container  blk">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Member Login</h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">

                                <div class="form-group row align-items-center"> 
                                    <label class="txt col-md-4 col-form-label text-md-right">Enter Member ID</label>
                                    <div class="col-md-8">
                                        <input type="text" name="id" value="" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center" style="margin-top: 0.8em;"> 
                                    <label class="txt col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" value="" class="form-control" minlength="6" required/>
                                    </div>
                                </div>
                                <div class="form-group" style="float: right; margin-top: 2%;">
                                    <input name="submit" type="submit"  value="Login" class="btn btn-success txt"/>
                                </div>
                              </form>
                              <?php 
                                if(isset($error)){
                                    echo '<p class="text-center" style="color: red; margin-left:6%; margin-top:1%;">'.$error.'</p>';
                                }
                              ?>
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