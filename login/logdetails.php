<?php
require_once "conn.php";
require_once "link.php";

    // Store the $user array in a session variable
    $_SESSION['user'] = $user;

    $stmt = $conn->prepare("SELECT * FROM logindetails WHERE id= ?");
    $stmt->bind_param("i", $user['id']);
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerss">
        <h1>User Details</h1>
        <div class="line">
                
            </div>
        <div class="contentss">
            <?php
                if (mysqli_num_rows($result)>0) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo '<div class="itemss">';
                        echo '<p><b>Username:</b> ' . $row["username"] . '</p>'; 
                        echo '<p><b>Password:</b> ' . $row["passwords"] . '</p>'; 
                        echo '<p><b>Phone:</b> ' . $row["phone"] . '</p>'; 
                        echo '<p><b>Email:</b> ' . $row["email"] . '</p>'; 
                        echo '<p><b>Gender:</b> ' . $row["gender"] . '</p>'; 
                        echo '<p><a href="update.php?id='. $row["id"].'" class="buttonss">Update</a> 
                        <a href="delete.php?id='. $row["id"].'" class="buttonss">Delete</a>
                        <a href="logout.php" class="buttonss">Logout</a></p>';
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
        <div class="homebtn">
            <a href="home.php" class="homie">Home</a>
        </div>
    </div>
</body>
</html>
