<?php
    require_once "conn.php";
    $id=$_REQUEST['id'];
    $sql = "SELECT * from logindetails where id='".$id."'";
    $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    $row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="registerstyle.css">
    </head>
    <body>
        <form method="post" action="edit.php">
            <h1>Update</h1><hr>
            <div class="whole">
                <div class="updatedetails">
                    <input type="hidden" name="id" value=<?php echo $_REQUEST["id"]; ?>>
                    <label for="name" class="lbl">Name</label></br>
                    <input type="text" name="username" value=<?php echo $row["username"];?>><br>
                    <label for="password" class="lbl">Password</label></br>
                    <input type="password" name="password" value=<?php echo $row["passwords"];?>><br>
                    <label for="phone" class="lbl">Phone Number</label></br>
                    <input type="tel" name="phone" value=<?php echo $row["phone"];?>><br>
                    <label for="email" class="lbl">Email</label></br>
                    <input type="email" name="email" value=<?php echo $row["email"];?>><br>
                    <label for="gender" class="lbl">Gender</label></br>
                    <input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male") {echo "checked";}?>>
                    <label for="male" class="lbl">Male</label>
                    <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female") {echo "checked";}?>>
                    <label for="femlae" class="lbl">Female</label>
                    <input type="radio" name="gender" value="Others" <?php if($row['gender']=="Others") {echo "checked";}?>>
                    <label for="others" class="lbl">Others</label></br>
                
                    <div class="btns" style="text-align: center;">
                        <input type="submit" name="submit" value="Update" class="btnsss">
                        <a href="home.php" class="buttonss">Home</a><br><br>
                    </div>
                </div>
            </div>
        </form>
        <script src="registerscript.js"></script>
    </body>
</html>
