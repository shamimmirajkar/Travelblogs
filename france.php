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
    <link rel="stylesheet" href="france.css?v=<?php echo time();?>">
    <title>France</title>
</head>

<h1><?php echo  $_SESSION['username']; ?></h1>
<body>
    <!--<div class="dots">-->
       
    <div class="container">
        <div class="pic">
            <div class="content1">
                <h2>France</h2>
                <p>France, in Western Europe, encompasses medieval cities, alpine villages and Mediterranean beaches. Paris, its capital, is famed for its fashion houses, classical art museums including the Louvre and monuments like the Eiffel Tower.</p>
            </div>


        </div>
        <div class="pic pic1">
            <div class="content">
                <h2>Paris</h2>
                <p>There's a reason Paris is one of the most popular cities among travelers. Known as the “City of Light” or the “City of Love,” the streets of Paris overflow with culture, art, beauty, and history. ... Paris was originally a Roman City called
                    “Lutetia.” It's believed that Paris only has one stop sign in the entire city.</p>
            </div>
        </div>
        <div class="pic pic2">
            <div class="content">
                <h2>Eiffel Tower</h2>
                <p>The Eiffel Tower, La Tour Eiffel in French, was the main exhibit of the Paris Exposition — or World's Fair — of 1889. It was constructed to commemorate the centennial of the French Revolution and to demonstrate France's industrial prowess
                    to the world.</p>
            </div>
        </div>
        <div class="pic pic3">
            <div class="content">
                <h2>Mount Saint</h2>
                <p>A magical island topped by a gravity-defying medieval monastery, the Mont-Saint-Michel counts among France's most stunning sights. For centuries one of Europe's major pilgrimage destination.</p>
            </div>
        </div>

</body>

</html>