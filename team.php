<?php 
    include_once 'includes/conn_include.php';

    $link = mysqli_connect($host,$user,$password,$db);

    $query = "SELECT img_path FROM team WHERE img_name= 'team_azmi'";
    $query1 = "SELECT img_path FROM team WHERE img_name= 'team_rawna'";
    $sql = mysqli_query($link,$query);
    $sql1 = mysqli_query($link,$query1);

    $memberNo = array();
    $memberName = array();
    $memberStID = array();
    $memberPost = array();
    $memberimg = array();
    $memberimgPath = array();
    $memberfbPath = array();
    $memberigPath = array();
    $memberdcPath = array();
    $memberfbtittle = array();
    $memberigtittle = array();
    $memberdctittle = array();
    $memberfblink = array();
    $memberiglink = array();
    $memberdclink = array();
    $index = 0;
    $query2 = "SELECT * FROM team";
    $result=mysqli_query($link,$query2); 
    $resultset=array();  
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)) {
        
            $memberNO[$index] = $row['MemberNo'];
            $memberName[$index] = $row['name'];
            $memberStID[$index] = $row['studentID'];
            $memberPost[$index] = $row['post'];
            $memberimg[$index] = $row['img_name'];
            $memberimgPath[$index] = $row['img_path'];
            $memberfbPath[$index] = $row['fbPath'];
            $memberigPath[$index] = $row['igPath'];
            $memberdcPath[$index] = $row['dcPath'];
            $memberfbtittle[$index] = $row['fb_tittle'];
            $memberigtittle[$index] = $row['ig_tittle'];
            $memberdctittle[$index] = $row['dc_tittle'];
            $memberfblink[$index] = $row['fb_link'];
            $memberiglink[$index] = $row['ig_link'];
            $memberdclink[$index] = $row['dc_link'];
            $index++;
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
    <link href="css/team.css" rel="stylesheet">

    <title>GrandBlue Resort & Spa / Team</title>
  </head>
  <body>
    <div class="team">
        <div class="text-center">
            <img class="logo" src="images/commonimages/Logo.png" alt="...">
            <div class="logotext">
                <p id="grandtext">Grand</p>
                <p id="bluetext">Blue</p>
                <div id="resorttext">
                    <p id="subtext">Resort & Spa</p>
                </div>
            </div>
        </div>
        <div class="container content">
            <div class="row">
                <?php
                   for($index = 0; $index <=1; $index++){ 
                ?>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="headingtext">
                                <!-- Member 1 -->
                                <?php echo  $memberNO[$index]; ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                                       
                            <img class="dp" src="<?php echo $memberimgPath[$index]; ?>" width="50%" alt="">   
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 descriptionbox">
                            <div class="row">
                                <div class="col-sm-12 description">
                                    <h4>
                                        <!-- Name -->
                                        <?php echo $memberName[$index]; ?>
                                    </h4>
                                    <h6>
                                        <!-- ID -->
                                        <?php echo  $memberStID[$index]; ?>
                                    </h6>
                                    <p>
                                        <!-- Member description -->
                                        <?php echo $memberPost[$index]; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row row-cols-3 justify-content-md-center text-center">
                                <div class="col-md-auto">
                                    <a href="<?php echo $memberfblink[$index]; ?>" target="_blank">
                                        <img data-toggle="tooltip" data-placement="bottom" title="<?php echo  $memberfbtittle[$index];  ?>" src="<?php echo $memberfbPath[$index]; ?>" width="50px" alt="">
                                    </a>
                                </div>
                                <div class="col-md-auto">
                                    <a href="<?php echo $memberiglink[$index]; ?>" target="_blank">
                                        <img data-toggle="tooltip" data-placement="bottom" title="<?php echo  $memberigtittle[$index];  ?>" src="<?php echo $memberigPath[$index]; ?>" width="50px" alt="">
                                    </a> 
                                </div>
                                <div class="col-md-auto">
                                    <a href="<?php echo $memberdclink[$index]; ?>" target="_blank">
                                        <img  data-toggle="tooltip" data-placement="bottom" title="<?php echo  $memberdctittle[$index];  ?>" src="<?php echo $memberdcPath[$index]; ?>" width="50px" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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