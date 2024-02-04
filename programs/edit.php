<?php
    require_once "conn.php";
    if(isset($_POST["submit"]))
    {
        $id=$_REQUEST['id'];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];

        $update = " update logindetails
        set username = '".$username."', passwords='".$password."', phone= '".$phone."', email = '".$email."', 
        gender = '".$gender."'
        WHERE id='".$id."'";
        if(mysqli_query($conn,$update))
        {
            echo "<script>alert('Data Updated successfully');
            window.location.href='logdetails.php';</script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>