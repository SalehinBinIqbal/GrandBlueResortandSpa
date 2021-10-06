<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "grandblue";

    $link = mysqli_connect($host,$user,$password,$db);

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
      }

?>