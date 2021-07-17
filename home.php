<?php

session_start();
 
if (!isset($_SESSION['username']))
{
// echo "you are logged out";
header('location:log-in.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css?v=<?php echo time();?>">
    <title>HOME</title>

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
    <!-- <button class="dropbtn">LOGIN
      <i class="fa fa-caret-down"></i>
    </button> -->
    <!-- <div class="dropdown-content">
    <a href="log-in.php">Sign-in</a>
                <a href="register.php">Register</a>
                <a href="admin-login.php">Admin</a>
    </div> -->
  </div> 
  <a href="photos.php">PHOTOS</a>
  <a href="about.php">CONTACT US</a>
  <a href="logout.php">LOGOUT</a>
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


    <h2><?php echo  $_SESSION['username']; ?></h2>
    </div>

    <a class="titleplace"><center>Santorini</center></a>
    <p class="qoute">And then you go to a place that stops you in your tracks and makes you wonder how you got so lucky just to be there.</p>
    <p class="qoute">  As our ship entered the foggy caldera and I caught my first glimpses of Santorini,</p>
    <p class="qoute">   I knew it would be one of those places.</p>
    <div class="latest">
    <a class="font">latest post</a>



    <div class="wrapper">

        <div class="box"> <img src="img/satute.jpg">
            <a class="text1">New york</a>
            <p>New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural centers</p>

        </div>
        <div class="box"> <img src="img/mumbai.jpg">
            <a class="text1">Mumbai</a>
            <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924.</p>
        </div>
        <div class="box">
            <img src="img/cappadocia-805624_1920 (1).jpg">
            <a class="text1">Turkey</a>
            <p>Turkey, officially the Republic of Turkey, is a transcontinental country located mainly on the Anatolian Peninsula in Western Asia, with a smaller portion on the Balkan Peninsula in Southeastern Europe.</p>

        </div>
        <div class="box">
            <img src="img/chile.jpg">
            <a class="text1">Chile</a>
            <p>Chile is a long, narrow country stretching along South America's western edge, with more than 6,000km of Pacific Ocean coastline. Santiago, its capital, sits in a valley surrounded by the Andes and Chilean Coast Range mountains. </p>
        </div>
        <div class="box"> <img src="img/george-washington-bridge-2098351_1920.jpg">
            <a>Newjersey</a>
            <p>The George Washington Bridge is a double-decked suspension bridge spanning the Hudson River, connecting the New York City borough of Manhattan with the New Jersey borough of Fort Lee. The bridge is named after George Washington, the first
                president of the United States.</p>
        </div>
        <div class="box">
            <img src="img/tianjin.jpg">
            <a>Tianjin</a>
            <p>Tianjin is a major port city in northeastern China. Following the 1858 Treaties of Tianjin, several Western nations established concessions in Tianjin. The European-style houses, municipal buildings and churches in Wudadao (Five Great Avenues)
                are legacies of that period.</p>
        </div>
        <div class="box">
            <img src="img/cafe (1).jpg">
            <a>Paris</a>
            <p>paris, the capital of northern Italy’s Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals – including the Grand Canal thoroughfare – lined with Renaissance and Gothic palaces.</p>
        </div>
        <div class="box">
            <img src="img/venice.jpg">
            <a>Venice</a>
            <p>Venice, the capital of northern Italy’s Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals – including the Grand Canal thoroughfare – lined with Renaissance and Gothic palaces.</p>
        </div>
        <div class="box">
            <img src="img/oia.jpg">
            <a>Oia</a>
            <p>Oia is a coastal town on the northwestern tip of Santorini, a Greek Aegean island. The town has whitewashed houses carved into the rugged clifftops, and overlooks a vast caldera filled with water. In a 19th-century mansion, the Naval Maritime
                Museum has exhibits on local seafaring history, including old figureheads, sailors’ chests and models of old ships.</p>
        </div>
</div>
    </div>
    <div style="margin-top:3%;">
   

    <a class="backimg"><img src="img/Newyork.jpg" alt=""></a>
    
    <a class="font">Highlights</a>

    <!--slides-->

    <div class="slideshow-container" style="margin-top:6%">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/castelmezzano.edit.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/venice.edit.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/architecture.edit.jpg" style="width:100%">
 
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


    <br>

    
   <center> <div class="map"> <iframe src="https://www.google.com/maps/d/embed?mid=1fadxUg1cJvZjlh9d-cRHE7x0zVM&hl=en" width="1111" height="480"></iframe></div>
   </center>
   

    <script src="js/index.js"></script>
    <footer>

        <center><label for="fname">FEEDBACK</label><br><br>
        <form action="feedback.php" method="post">
            <input type="text" id="fname" name="fname">
            <input type="submit" id="ok" class="but" name="ok" value="submit" required placeholder="FEEDBACKS">
    </form> <br><br>&copy;2020<br/>
            <a href="#">Terms</a>
        </center>
    </footer>
</body>

</html>