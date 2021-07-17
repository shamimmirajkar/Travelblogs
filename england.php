<?php
session_start();
 
if (!isset($_SESSION['username']))
{
// echo "you are logged out";
header('location:log-in.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="england.css?v=<?php echo time();?>">
    <title>England</title>
</head>
<h1><?php echo  $_SESSION['username']; ?></h1>
<body>
    <!--<div class="dots">-->
        
    <!-- </div> -->
    <div class="container">
        <div class="pic">
            <div class="content1">
                <h2>London</h2>
                <p>London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ‘Big Ben’ clock tower and Westminster Abbey, site
                    of British monarch coronations.</p>
            </div>


        </div>
        <div class="pic pic1">
            <div class="content">
                <h2>Big Ben</h2>
                <p>Big Ben is the nickname for the Great Bell of the striking clock at the north end of the Palace of Westminster in London;the name is frequently extended to refer to both the clock and the clock tower.
                </p>
            </div>
        </div>
        <div class="pic pic2">
            <div class="content">
                <h2>Millennium Wheel</h2>
                <p>The London Eye, or the Millennium Wheel, is a cantilevered observation wheel on the South Bank of the River Thames in London. It is Europe's tallest cantilevered observation wheel,and is the most popular paid tourist attraction in the
                    United Kingdom.</p>
            </div>
        </div>
        <div class="pic pic3">
            <div class="content">
                <h2>London Bridge</h2>
                <p>Tower Bridge, one of the London's most famous landmarks, is a bascule and suspension bridge on River Thames. It has two towers, in Victorian Gothic style, that are connected with two walkways t</p>
            </div>
        </div>

</body>

</html>