<?php
$cookie_name= "user";
$cookie_value = "Jan Nowak";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30),"/");
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
