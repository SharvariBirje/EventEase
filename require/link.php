<?php
    session_start();
    require_once "conn.php";

    

    $sql= "SELECT id FROM logindetails WHERE username = '".$_SESSION["username"]."'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result);
    
?>