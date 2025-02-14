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
        // a cookie is set using the setcookie function 
        // the cookie function should be set before the html tag
        //it taket the following parameters
        // name, value, expire, path, domain, secure, httponly

        $cookie_name = "NASSER";
        $cookie_value = "NASSER cookie";
        $set_cookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        #86400 is equivalent to 1 day

        if(!isset($_COOKIE[$cookie_name])){
            print("cookie named ".$cookie_name." is not set");
        }else{
            echo "cookie named ".$cookie_name." is set!<br>";
            echo "cookie value is ".$_COOKIE[$cookie_name];
        }

        print("<br>");
        print($_SERVER['SERVER_PORT']);
    ?>
    
</body>
</html>