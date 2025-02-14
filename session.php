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
        ?>
</html>