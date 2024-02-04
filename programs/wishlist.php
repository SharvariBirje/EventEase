<?php
require_once "conn.php";
require_once "link.php";

    // Store the $user array in a session variable
    $_SESSION['user'] = $user;

    $stmt = $conn->prepare("SELECT * FROM events WHERE fk= ?");
    $stmt->bind_param("i", $user['id']);
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Wishlist</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">
            <h1>EventEase</h1>
        </div>
            
        <div class="container">
            <?php include 'header.php';?>
            
            <div class="line">
                    
            </div>


            <div class="containerss">
                


                <div class="contentss">
                    <?php
                        if (mysqli_num_rows($result)>0) 
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                echo '<div class="eventitem">';
                                echo '<p><b>Type of Event:</b> ' . $row["eventname"] . '</p>'; 
                                echo '<p><b>Theme:</b> ' . $row["theme"] . '</p>'; 
                                echo '<p><b>Total number of Guests:</b> ' . $row["guests"] . '</p>'; 
                                echo '<p><b>Budget:</b> ' . $row["budget"] . '</p>'; 
                                echo '<p><b>Special Requests:</b> ' . $row["request"] . '</p>'; 
                                echo '<p><a href="eventupdate.php?id='. $row["id"].'" class="buttonss">Update</a> 
                                <a href="eventdelete.php?id='. $row["id"].'" class="buttonss">Delete</a> </p>';
                                echo '</div>';
                            }
                        } 
                        else 
                        {
                            echo "0 results";
                        }
                
                        mysqli_close($conn)
                    ?>
                </div>

            </div>
 
            <div class="line">
                    
            </div>
            <?php include 'footer.php';?>
        </div>
    </body>
</html>
