<?php
session_start();
 
if (!isset($_SESSION['adminusername']))
{
//echo "you are logged out";
header('location:admin-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTERED USERS</title>
  <link rel="stylesheet" href="feedbacks-registered.css?v=<?php echo time();?>">
</head>
<body>
 <h3><?php echo  $_SESSION['adminusername'];?></h3><br>
    <h1>REGISTERED USERS</h1>
    
<table class="mytable">
    <tr>
        <th>FULLNAME</th>
        <th>EMAIL</th>
        <th>COUNTRY</th>
        <th>DATE</th>

        
    </tr>
    
<?php

$connect=mysqli_connect("localhost" , "root" , "" , "travel");
$query="Select * from register";
$result=mysqli_query($connect, $query);
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fullname"]. "</td><td>"
        . $row["email"]. "</td><td>" . $row["country"]. "</td><td>" .$row["date"]. "</td></tr>";
        }
    echo "</table>";
}
    else
   { echo " ";
}


?>
</table>
</body>
</html>