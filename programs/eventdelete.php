<?php
    require_once "conn.php";
    $del=$_REQUEST['id'];


    
    $select = "SELECT * FROM events";
    $result = mysqli_query($conn,$select);

    if (mysqli_num_rows($result)>0) 
    {
        $sql= "DELETE FROM events WHERE id=$del";
        if (mysqli_query($conn,$sql))
        {
            echo "<script>alert('Data Deleted Successfully');window.location.href='wishlist.php';</script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
    else 
    {
        echo "0 results";
    }
?>
