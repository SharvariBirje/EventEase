<?php
    session_start();
    require_once "conn.php";
    if(isset($_POST["submit"]))
    {
        if(!empty($_POST["username"]) && !empty($_POST["password"]))
        {
            $username=$_POST["username"];
            $password=$_POST["password"];

            $sql= "SELECT * FROM logindetails WHERE username = '".$username."' and passwords = '".$password."'";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result);
            if($user)
            {
                $_SESSION["username"] = $username;
                $_SESSION["login"] = "login";
                header("location:trial.php");
            }
            else
            {
                echo "<script>
                alert('Invalid Login Credentials');
                window.location.href='index.php'
                </script>";
            }
        }
        else
        {
            echo "<script>
            alert('Username and Password cannot be empty!');
            window.location.href='index.php'
            </script>";
        }

    }

?>