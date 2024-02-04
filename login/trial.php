<?php
    require_once "conn.php";
    session_start();
    if(isset($_SESSION["login"]))
    {
        header("location:home.php");
    }
    else
    {
        header("location:index.php");
    }

?>