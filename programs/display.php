<!-- inserting the details -->
<?php
    require_once "conn.php";
    require_once "link.php";

    // Store the $user array in a session variable
    $_SESSION['user'] = $user;



    if(isset($_POST["submit"]))
    {
        $eventname=$_POST["eventname"];
        $theme=$_POST["theme"];
        $guests=$_POST["guests"];
        $budget=$_POST["budget"];
        $request=$_POST["request"];

        if($eventname!="" && $theme!="" && $guests!="" && $budget!="")
        {
            $sql = "SELECT id FROM logindetails WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user['id']);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0)
            {
                $sql = "INSERT INTO events (eventname,theme,guests,budget,request,fk) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssi",$_POST["eventname"], $_POST["theme"], $_POST["guests"], $_POST["budget"], $_POST["request"],$user['id']);
                $stmt->execute();
                echo "<script>alert('Data Inserted Suceesfully');window.location.href='display.php';</script>";
            } 
            else 
            {
                echo "Error: The foreign key value doesn't exist in the logindetails table";
            }
        }
    
        else
        {
            echo "<script>alert('Values cannot be Empty!');window.location.href='addevent.php';</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Confirmation</title>
        <link rel="stylesheet" href="registerstyle.css">
    </head>
    <body>
        <div class="msg">
            <div class="message">
                <p>We will contact you soon. Press Next to see your Booking</p>
                <div class="btns" style="text-align: center;">
                    <a href="wishlist.php" class="buttonss">Next</a><br><br>
                </div>
            </div>
            
        </div>
    </body>
</html>