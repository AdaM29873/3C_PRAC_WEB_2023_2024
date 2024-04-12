<?php 
$cookie_name= "user";
$cookie_value = "Jan Kowalski";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30),"/");
setcookie("user", " ", time() - 3600);
setcookie("user","");
setcookie("user", false);
$_COOKIE['user'];
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
            echo "Cookie named ". $cookie_name . "'is set!<br>";
        else
        {
            echo "Cookie '". $cookie_name . "'is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>

