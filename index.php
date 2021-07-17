<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css?v=<?php echo time();?>">
    <title>LANDING PAGE</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        <a href="home.php">HOME</a>
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
            <button class="dropbtn">LOGIN</button>
            <div class="dropdown-content">
                <a href="log-in.php">Sign-in</a>
                <a href="register.php">Register</a>
                <a href="admin-login.php">Admin</a>
            </div>
        </div>
        <a href="photos.php">PHOTOS</a>
        <a href="about.php">CONTACT US</a>
        <div class="logo"><img src="img/travel-blog-logo2.png"></div>
    </div>


    <div class="containerhome">
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Petra</h1>
                <p>Petra is a famous archaeological site in Jordan's southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone
                    cliffs, earning its nickname, the "Rose City." Perhaps its most famous structure is 45m-high Al Khazneh, a temple with an ornate, Greek-style facade, and known as The Treasury </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Machu Picchu</h1>
                <p>Machu Picchu is an Incan citadel set high in the Andes Mountains in Peru, above the Urubamba River valley. Built in the 15th century and later abandoned, it’s renowned for its sophisticated dry-stone walls that fuse huge blocks without
                    the use of mortar, intriguing buildings that play on astronomical alignments and panoramic views. Its exact former use remains a mystery. </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>TAJ MAHAL</h1>
                <p>Iconic, beautiful, and jaw dropping — words can never be enough to describe the beauty of this landmark of eternal love. Taj Mahal in Agra, one of the most-admired seven wonders in the world is a classic tale of declaration of love by
                    a Mughal Emperor Shahjahan for his wife, Mumtaz. The artistic masterpiece was built by Shahjahan after the demise of his wife during child birth, as an apparent token of love in her memory. </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Great Wall of China</h1>
                <p>The Great Wall of China is one of the greatest sights in the world — the longest wall in the world, an awe-inspiring feat of ancient defensive architecture. Its winding path over rugged country and steep mountains takes in some great scenery.
                </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Christ the Redeemer</h1>
                <p>Rio de Janeiro is a huge seaside city in Brazil, famed for its Copacabana and Ipanema beaches, 38m Christ the Redeemer statue atop Mount Corcovado and for Sugarloaf Mountain, a granite peak with cable cars to its summit. The city is also
                    known for its sprawling favelas (shanty towns). Its raucous Carnaval festival, featuring parade floats, flamboyant costumes and samba dancers, is considered the world’s largest. </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Chichén Itzá</h1>
                <p>The brilliant ruins of Chichén Itzá evidence a dazzling ancient city that once centered the Maya empire in Central America. The stepped pyramids, temples, columned arcades, and other stone structures of Chichén Itzá were sacred to the
                    Maya and a sophisticated urban center of their empire from A.D. 750 to 1200. </p>
            </div>
        </div>
        <div class="sectionhome">
            <div class="contenthome">
                <h1>Colosseum</h1>
                <p>The Colosseum, is an oval amphitheatre in the centre of the city of Rome, Italy, just east of the Roman Forum and is the largest ancient amphitheatre ever built. Construction began under the emperor Vespasian in 72 and was completed in
                    AD 80 under his successor and heir, Titus. </p>
            </div>
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
</body>

</html>