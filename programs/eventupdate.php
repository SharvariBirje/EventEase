<?php
    require_once "conn.php";
    $id=$_REQUEST['id'];
    $sql = "SELECT * from events where id='".$id."'";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    $row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Event Update</title>
        <link rel="stylesheet" href="registerstyle.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="eventedit.php">
            <h1>Event Update</h1><hr>
            <div class="whole">
                <div class="updatedetails">
                    <input type="hidden" name="id" value=<?php echo $_REQUEST["id"]; ?>>
                    <label for="eventname" class="lbl">Type of Event</label></br>
                    <input type="text" name="eventname" value=<?php echo $row["eventname"];?>><br>
                    <label for="theme" class="lbl">Theme</label></br>
                    <input type="text" name="theme" value=<?php echo $row["theme"];?>><br>
                    <label for="guestno" class="lbl">Total number of Guests</label></br>
                    <input type="number" name="guests" value=<?php echo $row["guests"];?>><br>
                    <label for="budget" class="lbl">Budget</label></br>
                    <input type="number" name="budget" value=<?php echo $row["budget"];?>><br>
                    <label for="request" class="lbl">Special Requests</label></br>
                    <textarea name="request" rows="3" cols="50"><?php echo $row['request'];?></textarea><br>

                
                    <div class="btns" style="text-align: center;">
                        <input type="submit" name="submit" value="Update" class="btnsss">
                        <a href="home.php" class="buttonss">Home</a><br><br>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
