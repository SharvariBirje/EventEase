<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    <body>
        <form method="post" onsubmit="return validator()" action="login.php">
            <div class="full">
                <div class="left">
                    <h1>EventEase</h1>
                    <p><b>Seamless Events, Endless Memories</b></p>
                </div>
                <div class="right">
                    <div class="login">
                        <h1 style="text-align: center;">Login</h1>
                    </div>
                    <div class="details" style="text-align: center;">
                        <input type="text" id="nm" name="username" placeholder="Username"><br/>
                        <input type="password" id="pswrd" name="password" placeholder="Password"><br/>
                        Didn't Register <a href="Register.php">Click here</a>
                    </div>
                    <div class="btns" style="text-align: center;">
                        <input type="submit" name="submit" value="Login" class="btn">
                    </div>
                </div>
            </div>
        </form>
        <script src="script.js"></script>
    </body>
</html>