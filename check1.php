<?php
$connect = mysqli_connect("localhost", "root", "", "travel");

if (isset($_POST["adminuser_name"]))
{
   
   $adminusername = mysqli_real_escape_string($connect, $_POST["adminuser_name"]);
    
   $query = "SELECT * FROM adminlogin WHERE adminusername = '".$adminusername."'";

   $result = mysqli_query($connect, $query);
   echo   mysqli_num_rows($result);
}


?>