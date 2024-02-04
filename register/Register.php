<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="registerstyle.css">
    </head>
    <body>
        <form onsubmit="return validator()" method="post" action="medium.php">
            <div class="full">
                <div class="left">
                    <h1>EventEase</h1>
                    <p><b>Seamless Events, Endless Memories</b></p>
                </div>
                <div class="right">
                    <div class="register">
                        <h1 style="text-align: center;">Register</h1>
                    </div>
                    <div class="details">  
                    <!-- style="text-align: center;" -->
                        <label for="name" class="lbl">Name</label></br>
                        <input type="text" id="nm" name="username" placeholder="Username" onBlur="checkusernameAvailability()"><br/>
                        <div id="usernameavail"></div><br/>
                        <label for="password" class="lbl">Password</label></br>
                        <input type="password" id="pswrd" name="password" placeholder="Password"><br/>
                        <label for="phone" class="lbl">Phone Number</label></br>
                        <input type="tel" id="phn" name="phone" placeholder="Phone Number"><br/>
                        <label for="email" class="lbl">Email</label></br>
                        <input type="email" id="eml" name="email" placeholder="Email"><br/>
                        <label for="gender" class="lbl">Gender</label></br>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male" class="lbl">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="femlae" class="lbl">Female</label>
                        <input type="radio" id="others" name="gender" value="Others">
                        <label for="others" class="lbl">Others</label></br>
                    </div>
                    <div class="btns" style="text-align: center;">
                        <input type="submit" name="rsubmit" value="Register" class="btn">
                    </div>
                </div>
            </div>
        </form>
        <script src="registerscript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            function checkusernameAvailability(usernameinput)
            {
                var username=$("#nm").val();
                $.ajax({
                    method:"POST",
                    url:"usernamecheck.php",
                    data:{username:username},
                    success:function(data)
                    {
                        $('#usernameavail').html(data);
                    }
                });
            }
        </script>
    </body>
</html>