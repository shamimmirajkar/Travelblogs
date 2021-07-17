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
    <link rel="stylesheet" href="japan.css?v=<?php echo time();?>">
    <title>JAPAN</title>
</head>
<h1><?php echo  $_SESSION['username']; ?></h1><br>

<body>
   
   
    <div class="container">
        <div class="pic">
            <div class="content1">
                <h2>Japan</h2>
                <p>Japan is an island country in East Asia located in the northwest Pacific Ocean. It is bordered by the Sea of Japan to the west and extends from the Sea of Okhotsk in the north to the East China Sea and Taiwan in the south.</p>
            </div>
        </div>
        <div class="pic pic1">
            <div class="content">
                <h2>Yoshino</h2>
                <p>Mount Yoshino (吉野山, Yoshinoyama), in Nara Prefecture, has been Japan's most famous cherry blossom viewing spot for many centuries. It is said that the first trees were planted along its slopes more than 1300 years ago, and today the mountain
                    is covered by approximately 30,000 cherry trees of many different varieties, especially of the Yamazakura variety.</p>
            </div>
        </div>
        <div class="pic pic2">
            <div class="content">
                <h2>Tokyo</h2>
                <p>Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid
                    large public gardens</p>
            </div>
        </div>
        <div class="pic pic3">
            <div class="content">
                <h2>Mount Fuji</h2>
                <p>Japan’s Mt. Fuji is an active volcano about 100 kilometers southwest of Tokyo. Commonly called “Fuji-san,” it’s the country’s tallest peak, at 3,776 meters. A pilgrimage site for centuries, it’s considered one of Japan’s 3 sacred mountains,
                    and summit hikes remain a popular activity.</p>
            </div>
        </div>

</body>



</html>