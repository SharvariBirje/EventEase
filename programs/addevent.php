<html>
    <head>
        <title>Add Event</title>
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
            <form method="post" action="display.php">
                <div class="booking">
                    <h2 style="text-align: center;">Book Your Event</h2>
                </div>
                <div class="cntnt">
                    <div class="itm">  
                        <!-- style="text-align: center;" -->
                        <label for="eventname" class="lbl">Type of Event</label></br>
                        <input type="text" name="eventname" placeholder="Birthday"><br/>
                        <label for="theme" class="lbl">Theme</label></br>
                        <input type="text" name="theme" placeholder="Avengers"><br/>
                        <label for="guestno" class="lbl">Total number of Guests</label></br>
                        <input type="number" name="guests" placeholder="200"><br/>
                        <label for="budget" class="lbl">Budget</label></br>
                        <input type="number" name="budget" placeholder="10000"><br/>
                        <label for="request" class="lbl">Special Requests</label></br>
                        <textarea name="request" rows="3" cols="50"></textarea><br>
                    </div>
                </div>
                <div class="btns" style="text-align: center;">
                    <input type="submit" name="submit" value="Book" class="btn">
                </div>
                

                <div class="line">
                    
                </div>
            </form>

        <?php include 'footer.php';?>
        </div>
    </body>
</html>