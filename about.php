<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="about.css?v=<?php echo time();?>">
    <title>CONTACT US</title>
</head>
<body>

<div class="topnav" id="myTopnav">

  <div class="logo" class="active"><img src="img/travel-blog-logo2.png"></div>
  <a href="home.php" >HOME</a>
 
  <div class="dropdown">
    <button class="dropbtn">DESTINATION 
      
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

<div class="wrapper">
        <div class="font">Team Members</div>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                <img src="img/team (3).png" alt="Team_image">
                   
                </div>
                <p>
                <h3>Shamim Mirajkar</h3>
                <h4>6118027</h4>
                Lives In :  Mumbai<br>
                Mobile No. :  8291017422<br>
                Email :  shamimmirajkar@gmail.com
              </p>

                <br>Check
                <a href="https://www.instagram.com/shamim_mirajkar/" class="social-icon">
                    <i class="fa fa-instagram"></i>
                </a>
                

            </div>
            <div class="team_member">
                <div class="team_img">
                <img src="img/team (1).png" alt="Team_image">
                    
                </div>
                <p>
                <h3>Rakesh Gargave</h3>
                <h4>6118012</h4>
                Lives In :  Banglaore<br>
                Mobile No. :  8108035581<br>
                Email :  gargaverakehs123.com
                </p>

                <br>Check
                <a href="https://www.instagram.com/rakeshgargave/" class="social-icon">
                    <i class="fa fa-instagram"></i>
                </a>
                
            </div>
            <div class="team_member">
                <div class="team_img">
                <img src="img/team (2).png" alt="Team_image">
                </div>
                <p>
                <h3>Ruba Khan</h3>
                <h4>6118020</h4>
               
                Lives In :  Delhi<br>
                Mobile No. :  8108035591<br>
                Email :  khanruba12@gmail.com
              </p>
                <br>Check
                <a href="https://www.instagram.com/khan_ruba_/" class="social-icon">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
   
    <!-- <script src="js/index.js"></script> -->
</body>
</html>
