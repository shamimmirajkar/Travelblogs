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
  <link rel="stylesheet" href="India.css?v=<?php echo time();?>">
  <title>INDIA</title>
</head>
<h1><?php echo  $_SESSION['username']; ?></h1>
<body>
  <!--<div class="dots">-->
    <!-- </div> -->
   
  <div class="container">
    <div class="pic">
      <div class="content1">
        <h2>India</h2>
        <p> India might just be the most colorful country in the world. It's a land of otherworldly landscapes for travel -- from stunning lakes and endless rolling plains to the snow-capped Himalayas in the north.</p>
      </div>


    </div>
    <div class="pic pic1">
      <div class="content">
        <h2>Jaipur</h2>
        <p>Jaipur, popularly known as the Pink City of India, is the largest city in the state of Rajasthan. It is also the capital of Rajasthan. Known for Hawa Mahal, Jal Mahal, Amer Fort, Jantar Mantar and several other places to visit, Jaipur has numerous stories to tell.
         </p>
      </div>
    </div>
    <div class="pic pic2">
      <div class="content">
        <h2>Taj Mahal</h2>
        <p>The Taj Mahal is widely considered one of the most beautiful buildings ever created. The exquisite marble structure in Agra, India, is a mausoleum, an enduring monument to the love of a husband for his favorite wife.</p>
      </div>
    </div>
    <div class="pic pic3">
      <div class="content">
        <h2>Golden Temple</h2>
        <p>Sri Harmandir Sahib (Golden Temple ) The Golden temple is located in the holy city of the Sikhs, Amritsar. The Golden temple is famous for its full golden dome, it is one of the most sacred pilgrim spots for Sikhs.</p>
      </div>
    </div>

</body>

</html>
