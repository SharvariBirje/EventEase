<!-- inserting the details -->
<?php
    require_once "conn.php";

        if(isset($_POST["rsubmit"]))
        {

            $username=$_POST["username"];
            $password=$_POST["password"];
            $phone=$_POST["phone"];
            $email=$_POST["email"];
            $gender=$_POST["gender"];

            $sqll = "SELECT * from logindetails where username='".$username."'";
            $result = mysqli_query($conn,$sqll) or die (mysqli_error($conn));
            if (mysqli_num_rows($result)<0)
            {
                if($username!="" && $password!="" && $phone!="" && $email!="" && $gender!="")
                {
                    $sql= "INSERT INTO logindetails (username,passwords,phone,email,gender)
                    VALUES ('$username', '$password', '$phone', '$email', '$gender')";
                    if (mysqli_query($conn,$sql))
                    {
                        echo "<script>alert('Data Inserted Successfully');window.location.href='index.php';</script>";
                    }
                    else
                    {
                        echo mysqli_error($conn);
                    }
                }
                else
                {
                    echo "<script>alert('Values cannot be Empty!');window.location.href='Register.php';</script>";
                }
            }
            else
            {
                echo "<script>alert('Username already exists');window.location.href='Register.php';</script>";
            }
            
        }

        
?>