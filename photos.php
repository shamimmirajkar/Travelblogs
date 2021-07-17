<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="photos.css?v=<?php echo time();?>">
    <title>PHOTOS</title>
</head>

<body>
<div class="bgimg">
    <div class="topnav" id="myTopnav">
    <div class="logo" class="active"><img src="img/travel-blog-logo2.png"></div>
  <a href="home.php" >HOME</a>
 
  <div class="dropdown">
    <button class="dropbtn">DESTINATION 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="japan.php">Japan</a>
            <a href="usa.php">USA</a>
            <a href="england.php">England</a>
            <a href="france.php">France</a>
            <a href="India.php">India</a>
            <a href="turkey.php">Turkey</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">LOGIN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="log-in.php">Sign-in</a>
                <a href="register.php">Register</a>
                <a href="admin-login.php">Admin</a>
    </div>
  </div> 
  <a href="photos.php">PHOTOS</a>
  <a href="about.php">CONTACT US</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

     
    </div>

    <div class="wrapper">

        <div class="box"> <img src="img/london-530055_1920.jpg">

        </div>
        <div class="box"> <img src="img/mont-saint-michel-688405_1920.jpg">

        </div>
        <div class="box">
            <img src="img/buddhist temple.jpg">

        </div>
        <div class="box">
            <img src="img/blossom-4151081_1920.jpg">
        </div>
        <div class="box"> <img src="img/george-washington-bridge-2098351_1920.jpg">
        </div>
        <div class="box">
            <img src="img/tianjin.jpg">
        </div>
        <div class="box">
            <img src="img/sunset-4715004_1920.jpg">
        </div>
        <div class="box">
            <img src="img/subway-2893846_1920.jpg">
        </div>
        <div class="box">
            <img src="img/hindu-2178480_1920.jpg">
        </div>
        <div class="box">
            <img src="img/alley-89197_1920.jpg">
        </div>
        <div class="box">
            <img src="img/architecture-1850676_1920.jpg">
        </div>
        <div class="box">
            <img src="img/india-1309206_1920.jpg">
        </div>
        <div class="box">
            <img src="img/subway-2893846_1920.jpg">
        </div>
        <div class="box">
            <img src="img/paris-112439_1920.jpg">
        </div>
        <div class="box">
            <img src="img/galata-4802332_1920.jpg">
        </div>
        <div class="box">
            <img src="img/dusk-3997154_1920.jpg">
        </div>
        <div class="box">
            <img src="img/hamburg-3846525_1920.jpg">
        </div>
        <div class="box">
            <img src="img/london-598182_1920.jpg">
        </div>
        <div class="box">
            <img src="img/lake-71208_1920.jpg">
        </div>
        <div class="box">
            <img src="img/hong-kong-2288999_1920.jpg">
        </div>
    </div>
</body>
</html