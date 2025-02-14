<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #print("welcome ".$_SESSION['user']);

        $cookie_name = "NASSER";
        $cookie_value = "NASSER cookie";
        $set_cookie($cookie_name, $cookie_value)


    ?>
    
</body>
</html>