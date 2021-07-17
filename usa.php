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
  <link rel="stylesheet" href="usa.css?v=<?php echo time();?>">
  <title>NEWYORK</title>
</head>
<h1><?php echo  $_SESSION['username']; ?></h1>
<body>
  <!--<div class="dots">-->
    
  <!-- </div> -->
  <div class="container">
    <div class="pic">
      <div class="content1">
        <h2>Newyork</h2>
        <p>New York is a state in the Northeastern United States. New York was one of the original thirteen colonies that formed the United States. With more than 19 million residents in 2019, it is the fourth-most-populous state.</p>
      </div>


    </div>
    <div class="pic pic1">
      <div class="content">
        <h2>Sunset</h2>
        <p>Manhattan's skyline, with its many skyscrapers, is universally recognized, and the city has been home to several of the tallest buildings in the world. As of 2019, New York City had 6,455 high-rise buildings, the third most in world after Hong Kong and Seoul.</p>
      </div>
    </div>
    <div class="pic pic2">
      <div class="content">
        <h2>Statue of Liberty</h2>
        <p>The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor within New York City, in the United States. </p>
      </div>
    </div>
    <div class="pic pic3">
      <div class="content">
        <h2>Brooklyn Bridge</h2>
        <p>The Brooklyn Bridge is a hybrid cable-stayed/suspension bridge in New York City, spanning the East River between the boroughs of Manhattan and Brooklyn. Opened on May 24, 1883, the Brooklyn Bridge was the first fixed crossing of the East River.</p>
      </div>
    </div>

</body>

</html>
