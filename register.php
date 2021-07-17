<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="registeration-login.css?v=<?php echo time();?>">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

        // ajax by jquery
            $(document).ready(function ()
            {
                $("#username").blur(function ()
                {
                    console.log($("#username").val())
                    var username = $(this).val();
                    var l = username.length;
                    if( l == 0 ){
                            $("#message").html('Enter username!');
                            $('#signup').attr("disabled",true);
                            }
              else 
              {
                   $.ajax({url:'check.php',
                        async:true,
                        method:'POST',
                        data:{user_name:username},
                        success: function (data)
                        {
                            if(data != '0')
                            {
                            $("#message").html('username already exists!');
                            $('#signup').attr("disabled",true);
                            }
                        else 
                        {
                            $("#message").html('');
                            $('#signup').attr("disabled",false);
                        }
            
                            }
                    });
                }
                });
                $("#username").click(function ()
                {
                    $("#message").html("");
                        $('#signup').attr("disabled",false);
                 
                });
                $("#pass").click(function ()
                {
                     $("#passwd").html("Must contain ( one number,one lowercase letter,one uppercase ) and at least 8 or more characters");
                });

                $("#pass").blur(function ()
                {
                    $("#passwd").html("");
                });

                $("#conpass").blur(function ()
                {
                    if ($("#pass").val() != $(this).val())
                    {
                        $("#passw").html("passwords do not match");
                        $('#signup').attr("disabled",true);
                        
                    }
                });
                $("#conpass").click(function ()
                {
                    $("#passw").html("");
                        $('#signup').attr("disabled",false);
                 
                });

            });
    </script>
    <script>
    function myFunction() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
          x.type = "text";
          
        } else {
          x.type = "password";
        }
        var x = document.getElementById("conpass");
        if (x.type === "password") {
          x.type = "text";
         
        } else {
          x.type = "password";
        }
      }
    </script>

    <title>REGISTRATION</title>
</head>

<body>
    <div class="container">
<div class="header">
<h1>Create  Account</h1>
<h4>Get started with your free account!</h4>
</div>
<br>
<div class="main">
<form action="registeration.php" method="post">
      <table>
        <tr>
      <td id="center">FULLNAME:</td>
      <td><input type="text" id="fullname" name="fullname" placeholder="FULLNAME" required></td>
      </tr>
      <tr>
      <td id=center>EMAIL:</td>
      <td><input type="email" name="email" id="email" placeholder="EMAIL ID" required></td>
      </tr>
    <tr>
    <td id=center>COUNTRY:</td>
    <td><input type="text" name="country" placeholder="COUNTRY" id="country" required ></td>
    </tr>
<tr>
<td id=center>USERNAME:</td>
<td>
    <input  type="text" id="username" name="username" placeholder="USERNAME" required>
    <div id="message"> </div> 
</td>
</tr>
<tr>
    <td id=center>PASSWORD:</td>
    <td>
        <input type="password"  id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain ( one number,one lowercase letter,one uppercase ) and at least 8 or more characters" name="password" placeholder="PASSWORD" required/></h5> 
        <div id="passwd"> </div> 
    </td>
    </tr>
    <tr>
        <td id="center">CONFIRM PASSWORD:&nbsp</td>
        <td>
            <input type="password"  id="conpass" name="confpassword" placeholder="CONFIRM PASSWORD" required></h5> 
        <div id="passw"> </div> 
        </td>
    </tr>   
    <tr>
        <td> </td>
      <td> 
        <div id="show">
        <input type="checkbox" onclick="myFunction()" id="show">
        Show Password</div>
   
    </td>
    </tr>    
     </table>
    
    <input type="submit" id="signup" name="signup" value="Create Account">
    <hr>
    <p class="text" >Already have an acount?<a href="log-in.php">Log In</a></p>
    </form>
    </div>
    </div>
</body>

</html>