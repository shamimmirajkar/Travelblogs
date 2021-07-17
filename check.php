<?php
$connect = mysqli_connect("localhost", "root", "", "travel");

if (isset($_POST["user_name"]))
{
   
   $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
    
   $query = "SELECT * FROM login WHERE username = '".$username."'";

   $result = mysqli_query($connect, $query);
   echo   mysqli_num_rows($result);
}


?>