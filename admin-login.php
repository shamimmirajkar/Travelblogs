<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINLOGIN</title>
    <link rel="stylesheet" href="adminlogin.css?v=<?php echo time();?>">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

        // ajax by jquery
            $(document).ready(function ()
            {
                $("#adminusername").blur(function ()
                {
                    console.log($("#adminusername").val())
                    var adminusername = $(this).val();
                    var l = adminusername.length;
                    if( l == 0 ){
                            $("#message").html('Enter USERNAME!');
                            $('#submit').attr("disabled",true);
                            }
              else 
              {
                    $.ajax({url:'check1.php',
                        async:true,
                        method:'POST',
                        data:{adminuser_name:adminusername},
                        success: function (data)
                        {
                            if(data != '0')
                            {
                            $("#message").html('');
                            $('#submit').attr("disabled",false);
                            }
                        else
                        {
                            $("#message").html('ADMIN OF SUCH USERNAME DOES NOT EXISTS');
                            $('#submit').attr("disabled",true);
                        }
                            }
                    });
              }
                });
                $("#adminusername").click(function ()
                {
                    $("#message").html('');
                    $('#submit').attr("disabled",false);
                });
                
            
                
                $("#adminpassword").click(function ()
                {
                    $("#passwd").html("");
                });
 });
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("adminpassword");
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
        <form action="adminlogin.php" method="post">
              <table>
               <tr>
              <td id="center1">ADMIN:</td>
              <td><input type="text" id="adminusername" name="adminusername" placeholder="ADMIN" required/>
                <div id="message"> </div>
            </td>
              </tr> 
              <tr>
                <td id="center1">PASSWORD:</td>
                <td> <input type="password"  id="adminpassword"   name="adminpassword" placeholder="PASSWORD" required/>
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
             
        
        <input type="submit" id="submit" name="submit" value="Login">
        
        <br>
        <br>
        <hr>
        <br>
        <h6><marquee behavior="scroll" direction="left" scrollamount="12">ONLY FOR ADMINS*</marquee></h6>
    </form>
</div>
</div>
        
    
</body>
</html>