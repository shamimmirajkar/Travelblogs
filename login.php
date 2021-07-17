<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "travel");

if (isset($_POST["login"]))
{
   $password=$_POST['password'];
$username=$_POST["username"];
    $query = "SELECT * FROM login WHERE username = '".$username."'";

   $result = mysqli_query($connect, $query);
   $username_count = mysqli_num_rows($result);


if ($username_count)
{
   $username_pass= mysqli_fetch_assoc($result);
   $pass = $username_pass['password'];
   $_SESSION['username']=$username_pass['username'];
    
if($pass == $password)
    {
      //  echo "successful login";
 echo   '<script>alert("SUCCESSFUL LOGIN")</script>';
 echo '<script>window.location="home.php"</script>';
    }
    else
    {
      //  echo "please login again";
      echo '<script>alert("INCORRECT PASSWORD")</script>';
      echo '<script>window.location="log-in.php"</script>';
    }
}
}
?>