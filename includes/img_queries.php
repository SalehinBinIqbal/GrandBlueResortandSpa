<?php
    include_once 'includes/conn_include.php';
    $link = mysqli_connect($host,$user,$password,$db);
    $query1 = "SELECT img_path FROM images WHERE img_name= 'banner1.png'";
    $query2 = "SELECT img_path FROM images WHERE img_name= 'banner2.png'";
    $query3 = "SELECT img_path FROM images WHERE img_name= 'banner3.png'";
    $query4 = "SELECT img_path FROM images WHERE img_name= 'banner4.png'";
    $query5 = "SELECT img_path FROM images WHERE img_name= 'banner5.png'";
    $query6 = "SELECT img_path FROM images WHERE img_name= 'Villa1.jpg'";
    $query7 = "SELECT img_path FROM images WHERE img_name= 'Villa2_3.jpg'";
    $query8 = "SELECT img_path FROM images WHERE img_name= 'Suite1.jpg'";
    $query9 = "SELECT img_path FROM images WHERE img_name= 'Suite2.jpg'";
    $query10 = "SELECT img_path FROM images WHERE img_name= 'Room1.jpg'";
    $query11 = "SELECT img_path FROM images WHERE img_name= 'Cafe.png'";
    $query12 = "SELECT img_path FROM images WHERE img_name= 'Club_3.jpg'";
    $query13 = "SELECT img_path FROM images WHERE img_name= 'Restaurant1_1.jpg'";
    $query14 = "SELECT img_path FROM images WHERE img_name= 'Restaurant2.png'";
    $query15 = "SELECT img_path FROM images WHERE img_name= 'Bar.jpg'";
    $query16 = "SELECT img_path FROM images WHERE img_name= 'Relax_1.jpg'";
    $query17 = "SELECT img_path FROM images WHERE img_name= 'Relax_2.jpg'";
    $query18 = "SELECT img_path FROM images WHERE img_name= 'Relax_3.png'";
    $query19 = "SELECT img_path FROM images WHERE img_name= 'Relax_4.png'";
    $query20 = "SELECT img_path FROM images WHERE img_name= 'Relax_5.jpg'";
    $query21 = "SELECT img_path FROM images WHERE img_name= 'Enjoy2.png'";
    $query22 = "SELECT img_path FROM images WHERE img_name= 'Enjoy1.jpg'";
    $query23 = "SELECT img_path FROM images WHERE img_name= 'Enjoy4.jpg'";
    $query24 = "SELECT img_path FROM images WHERE img_name= 'Enjoy3.jpg'";
    $query25 = "SELECT img_path FROM images WHERE img_name= 'Enjoy5.jpg'";
    $query26 = "SELECT img_path FROM images WHERE img_name= 'facebook.svg'";
    $query27 = "SELECT img_path FROM images WHERE img_name= 'twitter.svg'";
    $query28 = "SELECT img_path FROM images WHERE img_name= 'instagram.svg'";
    $query29 = "SELECT img_path FROM images WHERE img_name= 'discord.svg'";
    $query30 = "SELECT img_path FROM images WHERE img_name= 'award.png'";
    $query31 = "SELECT img_path FROM images WHERE img_name= 'award2.png'";
    //Ocean side room
    $query32 = "SELECT img_path FROM images WHERE img_name= 'banner_room.png'";
    $query33 = "SELECT img_path FROM images WHERE img_name= 'Room1_1.jpg'";
    $query34  = "SELECT img_path FROM images WHERE img_name= 'Room1_2.jpg'";
    $query35 = "SELECT img_path FROM images WHERE img_name= 'Room1_3.jpg'";
    $query36 = "SELECT img_path FROM images WHERE img_name= 'Room1_4_GF.png'";
    $query37 = "SELECT img_path FROM images WHERE img_name= 'Room1_5_FF.png'";
    
    //ocean side villa
    $query38 = "SELECT img_path FROM images WHERE img_name= 'banner_villa.png'";
    $query39 = "SELECT img_path FROM images WHERE img_name= 'Villa.png'";
    $query40 = "SELECT img_path FROM images WHERE img_name= 'Villa1_1.jpg'";
    $query41 = "SELECT img_path FROM images WHERE img_name= 'Villa1_2.png'";
    $query42 = "SELECT img_path FROM images WHERE img_name= 'Villa1_3.jpg'";
    $query43 = "SELECT img_path FROM images WHERE img_name= 'Villa1_4.jpg'";
    $query44 = "SELECT img_path FROM images WHERE img_name= 'Villa1_5.jpg'";
    $query45 = "SELECT img_path FROM images WHERE img_name= 'Villa1_6.jpg'";
    //family villa
    $query46 = "SELECT img_path FROM images WHERE img_name= 'banner_famvilla.png'";
    $query47 = "SELECT img_path FROM images WHERE img_name= 'Villa2.jpg'";
    $query48 = "SELECT img_path FROM images WHERE img_name= 'Villa2_1.jpg'";
    $query49 = "SELECT img_path FROM images WHERE img_name= 'Villa2_2.jpg'";
    $query50 = "SELECT img_path FROM images WHERE img_name= 'Villa2_3.jpg'";
    $query51 = "SELECT img_path FROM images WHERE img_name= 'Villa2_4.jpg'";
    $query52 = "SELECT img_path FROM images WHERE img_name= 'Villa2_5.jpg'";
    $query53 = "SELECT img_path FROM images WHERE img_name= 'Villa2_6.jpg'";
    $query54 = "SELECT img_path FROM images WHERE img_name= 'Villa2_7.jpg'";
    $query55 = "SELECT img_path FROM images WHERE img_name= 'Villa2_8.jpg'";
    $query56 = "SELECT img_path FROM images WHERE img_name= 'Villa2_9.jpg'";
    $query57 = "SELECT img_path FROM images WHERE img_name= 'Villa2_10.jpg'";

    //$query58 = "SELECT img_path FROM images WHERE img_name= 'Villa2_1.jpg'";
    //delux suite
    $query58 = "SELECT img_path FROM images WHERE img_name= 'banner_dsuite.png'";
    $query59 = "SELECT img_path FROM images WHERE img_name= 'Suite1.jpg'";
    $query60 = "SELECT img_path FROM images WHERE img_name= 'Suite1_1.jpg'";
    $query61 = "SELECT img_path FROM images WHERE img_name= 'Suite1_2.jpg'";
    $query62 = "SELECT img_path FROM images WHERE img_name= 'Suite1_3.jpg'";
    $query63 = "SELECT img_path FROM images WHERE img_name= 'Suite1_4.jpg'";
    //premium suite
    $query64 = "SELECT img_path FROM images WHERE img_name= 'banner_prsuite.png'";
    $query65 = "SELECT img_path FROM images WHERE img_name= 'Suite2.jpg'";
    $query66 = "SELECT img_path FROM images WHERE img_name= 'Suite2_1.jpg'";
    $query67 = "SELECT img_path FROM images WHERE img_name= 'Suite2_2.jpeg'";
    $query68 = "SELECT img_path FROM images WHERE img_name= 'Suite2_3.jpeg'";
    $query69 = "SELECT img_path FROM images WHERE img_name= 'Suite2_4.jpg'";
    
    $banner1 = mysqli_query($link,$query1);
    $banner2 = mysqli_query($link,$query2);
    $banner3 = mysqli_query($link,$query3);
    $banner4 = mysqli_query($link,$query4);
    $banner5 = mysqli_query($link,$query5);
    $Villa1 = mysqli_query($link,$query6);
    $Villa2_3 = mysqli_query($link,$query7);
    $Suite1 = mysqli_query($link,$query8);
    $Suite2 = mysqli_query($link,$query9);
    $Room1 = mysqli_query($link,$query10);
    $Cafe = mysqli_query($link,$query11);
    $Club_3 = mysqli_query($link,$query12);
    $Restaurant1_1 = mysqli_query($link,$query13);
    $Restaurant2 = mysqli_query($link,$query14);
    $Bar = mysqli_query($link,$query15);
    $Relax_1 = mysqli_query($link,$query16);
    $Relax_2 = mysqli_query($link,$query17);
    $Relax_3 = mysqli_query($link,$query18);
    $Relax_4 = mysqli_query($link,$query19);
    $Relax_5 = mysqli_query($link,$query20);
    $Enjoy2 = mysqli_query($link,$query21);
    $Enjoy1 = mysqli_query($link,$query21);
    $Enjoy4 = mysqli_query($link,$query23);
    $Enjoy3 = mysqli_query($link,$query24);
    $Enjoy5 = mysqli_query($link,$query25);
    $facebook = mysqli_query($link,$query26);
    $twitter = mysqli_query($link,$query27);
    $instagram = mysqli_query($link,$query28);
    $discord = mysqli_query($link,$query29);
    $award = mysqli_query($link,$query30);
    $award2 = mysqli_query($link,$query31);
    //ocean side room
    $banner_room = mysqli_query($link,$query32);
    $Room1_1 = mysqli_query($link,$query33);
    $Room1_2 = mysqli_query($link,$query34);
    $Room1_3 = mysqli_query($link,$query35);
    $Room1_4_GF = mysqli_query($link,$query36);
    $Room1_5_FF = mysqli_query($link,$query37);
    
    //ocean side villa
    $banner_villa = mysqli_query($link,$query38);
    $Villa = mysqli_query($link,$query39);
    $Villa1_1 = mysqli_query($link,$query40);
    $Villa1_2 = mysqli_query($link,$query41);
    $Villa1_3 = mysqli_query($link,$query42);
    $Villa1_4 = mysqli_query($link,$query43);
    $Villa1_5 = mysqli_query($link,$query44);
    $Villa1_6 = mysqli_query($link,$query45);
    //family villa
    $banner_famvilla = mysqli_query($link,$query46);
    $Villa2 = mysqli_query($link,$query47);
    $Villa2_1 = mysqli_query($link,$query48);
    $Villa2_2 = mysqli_query($link,$query49);
    $Villa2_3 = mysqli_query($link,$query50);
    $Villa2_4 = mysqli_query($link,$query51);
    $Villa2_5 = mysqli_query($link,$query52);
    $Villa2_6 = mysqli_query($link,$query53);
    $Villa2_7 = mysqli_query($link,$query54);
    $Villa2_8 = mysqli_query($link,$query55);
    $Villa2_9 = mysqli_query($link,$query56);
    $Villa2_10 = mysqli_query($link,$query57);
  //delux suite
  $banner_dsuite = mysqli_query($link,$query58);
  $Suite1 = mysqli_query($link,$query59);
  $Suite1_1 = mysqli_query($link,$query60);
  $Suite1_2 = mysqli_query($link,$query61);
  $Suite1_3 = mysqli_query($link,$query62);
  $Suite1_4 = mysqli_query($link,$query63);

    //premium suite
    $banner_prsuite = mysqli_query($link,$query64);
    $Suite2 = mysqli_query($link,$query65);
    $Suite2_1 = mysqli_query($link,$query66);
    $Suite2_2 = mysqli_query($link,$query67);
    $Suite2_3 = mysqli_query($link,$query68);
    $Suite2_4 = mysqli_query($link,$query69);

?>
