<?php
session_start();
?>
<html>
    <body>
        <p>Click the following link to see the session variable:</p> 
        <?php
            // Set session variables
            $_SESSION["user"] = "Nasser";
            $_SESSION["email"] = "";
            //must first load the page that has the session_start() function
            echo $user;
        ?>
    </body>
</html>