<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                    $.ajax({url:'check.php',
                        async:true,
                        method:'POST',
                        data:{user_name:username},
                        success: function (data)
                        {
                            if(data != '0')
                            {
                            $("#message").html('');
                            $('#login').attr("disabled",false);
                            }
                        else
                        {
                            $("#message").html('USERNAME DOES NOT EXISTS');
                            $('#login').attr("disabled",true);
                        }
                            }
                    });
                });
                $("#username").click(function ()
                {
                    $("#message").html('');
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
           
        }
        </script>
    </head>
    <body>
        <div class="container1">
            <div class="header">
            <h1>LOGIN</h1>
            </div>
            <br>
            <div class="main">
            <form action="login.php" method="post">
                  <table>
                   <tr>
                       <!-- <div class="input-container"> -->
                  <td id="center1">USERNAME:</td>
                  <td><input type="text" id="username" name="username" placeholder="username" required> 
                    <div id="message"> </div>
                    </td>
                <!-- </div>  -->
                
                  </tr> 
                  <tr>
                    <td id="center1">PASSWORD:</td>
                    <td><input type="password"  id="pass"   name="password" placeholder="password" required>
                        <div id="passwd"> </div>
                  </td>
                    </tr> 
                    <tr>
                        <td> </td>
                      <td> 
                        <div id="show">
                        <input type="checkbox" onclick="myFunction()" id="show">
                        Show Password</div>
                   
                    </td>
                  </table>
        
        <input type="submit" id="login" name="login" value="Login">
        <hr>
        <br>
        <p class="text" >don't have an account?<a href="register.php">Register</a></p>
    </form>
    </div>
    </div>
</body>
</html>