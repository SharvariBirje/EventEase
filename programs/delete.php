<?php
    require_once "conn.php";
    $del=$_REQUEST['id'];


    $sql= "DELETE FROM logindetails WHERE id=$del";
            if (mysqli_query($conn,$sql))
            {
                echo "<script>alert('Data Deleted Successfully');</script>";
            }
            else
            {
                echo mysqli_error($conn);
            }
            
    session_start();
    if(isset($_SESSION["login"]))
    {
        unset($_SESSION["login"]);
        session_destroy();
    }

    header('location:index.php');
?>
