<?php
    require_once "conn.php";
    if(isset($_POST["submit"]))
    {
        $id=$_REQUEST['id'];
        $eventname=$_POST["eventname"];
        $theme=$_POST["theme"];
        $guests=$_POST["guests"];
        $budget=$_POST["budget"];
        $request=$_POST["request"];

        $update = " update events
        set eventname = '".$eventname."', theme='".$theme."', guests= '".$guests."', budget = '".$budget."', 
        request = '".$request."'
        WHERE id='".$id."'";
        if(mysqli_query($conn,$update))
        {
            echo "<script>alert('Data Updated successfully');
            window.location.href='wishlist.php';</script>";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
?>