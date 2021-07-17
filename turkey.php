<?php
session_start();
 
if (!isset($_SESSION['username']))
{
//echo "you are logged out";
header('location:log-in.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="turkey.css?v=<?php echo time();?>">
  <title>TURKEY</title>
</head>
<h1><?php echo  $_SESSION['username']; ?></h1>
<body>
  <!--<div class="dots">-->
    
  <!-- </div> -->
  <div class="container">
    <div class="pic">
      <div class="content1">
        <h2>Turkey</h2>
        <p>Turkey, country that occupies a unique geographic position, lying partly in Asia and partly in Europe. Throughout its history it has acted as both a barrier and a bridge between the two continents.</p>
      </div>


    </div>
    <div class="pic pic1">
      <div class="content">
        <h2>Istanbul</h2>
        <p>Istanbul has a timeless charm that owes much to its rich history. The city was historically referred to as Byzantium and Constantinople. It served as a focal point of several ancient empires. 
         </p>
      </div>
    </div>
    <div class="pic pic2">
      <div class="content">
        <h2>Cappadocia</h2>
        <p>Famous for its unique rock formations and amazing hot air ballooning opportunities, the otherworldly landscapes of Cappadocia are one of Turkey's most popular natural wonders.</p>
      </div>
    </div>
    <div class="pic pic3">
      <div class="content">
        <h2>Galata Tower</h2>
        <p>The Romanesque style tower was built as Christea Turris ("Tower of Christ") in 1348 during an expansion of the Genoese colony in Constantinople. Galata Tower was the tallest building in Istanbul at 219.5 ft (66.9 m) when it was built in 1348.</p>
      </div>
    </div>

</body>

</html>
