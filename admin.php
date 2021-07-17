<?php
session_start();
 
if (!isset($_SESSION['adminusername']))
{
// echo "you are logged out";
header('location:admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="admin.css?v=<?php echo time();?>">
</head>
<body>
  
  <header>
    <nav>
      <div class="navbar">
      <div  id="logo">
          <img src="photos\sr2 black.jpg" alt="logo">
          <div class="topnav">
          <label id="hello">  <?php echo  $_SESSION['adminusername']; ?></label><br>
          <!-- <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> -->
          <a href="adminlogout.php">LOGOUT</a>
           
</div></div><br>
</div>
        <!-- </div><br><br><br> -->
        
        <!-- <ul class="main-nav" > -->
       
          <h1>WELCOME TO THE ADMIN SIDE </h1><br>
             
            
            <div  class="wrapper">
        <div class="box">
          <h3>YOUR ACCESSING SPACE ,ADMIN CHECK YOUR REGISTERED USERS</h3>
          <li><a  href="registered.php">REGISTERED</a></li>
        </div>
        <div class="box">
        <h3>FEEDBACKS</h3>
        <li><a  href="feedbacksadmin.php">FEEDBACKS</a></li>
        </div>
</div>
          <!-- </div> -->
</ul>
 </nav>
 </header>
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