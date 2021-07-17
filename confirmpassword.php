<?php

if (isset($_POST["signup"]))
{
   $password=$_POST['password'];
$confpassword=$_POST["confpassword"];

if($password == $confpassword)
{

echo '<script>alert("YOU HAVE SUCCESSFULLY REGISTERED!!!!")</script>';
echo '<script>window.location="log-in.php"</script>';
}
    
}
?>