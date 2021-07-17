<?php
 session_start();
$connect = mysqli_connect("localhost", "root", "", "travel");

if (isset($_POST["submit"]))
{
   $adminpassword=$_POST['adminpassword'];
$adminusername=$_POST["adminusername"];
    $query = "SELECT * FROM adminlogin WHERE adminusername = '".$adminusername."'";

   $result = mysqli_query($connect, $query);
   $adminusername_count = mysqli_num_rows($result);


if ($adminusername_count)
{
   $adminusername_pass= mysqli_fetch_assoc($result);
   $pass = $adminusername_pass['adminpassword'];
   $_SESSION['adminusername']=$adminusername_pass['adminusername'];
    
if($pass == $adminpassword)
    {
       
 echo   '<script>alert("SUCCESSFUL LOGIN")</script>';
 echo '<script>window.location="admin.php"</script>';
    }
    else
    {
    
      echo '<script>alert("INCORRECT PASSWORD")</script>';
      echo '<script>window.location="admin-login.php"</script>';
    }
}
}
?>