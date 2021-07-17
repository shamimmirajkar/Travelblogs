<?php
session_start();
    $feedback=$_POST['fname'];
$username=$_SESSION['username'];
 $date=date("Y-m-d");
$connect=mysqli_connect("localhost" , "root" , "" , "travel");
$query = mysqli_query($connect,"insert into feedbacks (username ,feedback, date) values ('$username' , '$feedback' ,'$date')" );
if(!$query)
{
    echo '<script>alert("ERROR OCCURED !! TRY GIVING YOUR FEEDBACK AGAIN PLEASE!!!!")</script>';
	echo '<script>window.location="home.php"</script>';
}
else{
    echo '<script>alert("YOUR FEEDBACK HAS BEEN SUCCESSFULLY COUNTED !!!!")</script>';
	echo '<script>window.location="home.php"</script>';
}

?>



