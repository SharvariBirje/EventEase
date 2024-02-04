<?php
    include "conn.php";
    if(!empty(isset($_POST["username"])) && isset($_POST["username"]))
    {
        $username = $_POST["username"];
        checkusername($conn, $username);
    }
    function checkusername($conn, $username)
    {
        $query = "SELECT username FROM logindetails WHERE username = '$username'";
        $result = $conn->query($query);
        if($result->num_rows>0)
        {
            echo "<span style='color:red'>Username already exists</span>";
        }
        else
        {
            echo "<span style='color:green'>Username Available</span>";
        }
    }
?>
