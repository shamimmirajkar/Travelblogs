<?php

$fullname=$_POST['fullname'];
// $lastname=$_POST['lastname'];
$email=$_POST['email'];
// $birthdate=$_POST['birthdate'];
$country=$_POST['country'];

$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confpassword'];

 $date=date("Y-m-d");
$connect=mysqli_connect("localhost" , "root" , "" , "travel");
$query = mysqli_query($connect,"insert into register (fullname , email , country , date) values ('$fullname' , '$email' , '$country' , '$date')" );
if(!$query)
{
    echo '<script>alert("ERROR OCCURED TRY REGISTERING AGAIN PLZZ!!!!")</script>';
	echo '<script>window.location="register.php"</script>';
}
else{
    echo '<script>alert("YOU HAVE SUCCESSFULLY REGISTERED!!!!")</script>';
	echo '<script>window.location="log-in.php"</script>';
}

$query2=mysqli_query($connect,"insert into  login (username,password,confirmpassword) VALUES ('$username','$password','$confirmpassword')");
?>



