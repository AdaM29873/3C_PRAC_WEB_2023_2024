<?php 
$cookie_name= "username";
$cookie_value = "Adam Majkowski";
setcookie($cookie_name,$cookie_value);

setcookie("user", " ", time() + 3600);
setcookie("username","Maciej k");
setcookie("user", false);
$_COOKIE['user'];


if(!isset($_COOKIE['hits']))
{
     $ile = 1;
}
else
{
    $ile = (int)$_COOKIE['hits'];
    if($ile<1)
        $ile = 1;
    $ile++;
}
setcookie("hits", "$ile"); 
?>

<html>
    <body>
        <?php
        if(isset($_COOKIE['hits']))
            if($ile> 10)
            echo "odwiedziłes nas ponad 10 razy!!";
        ?>
    </body>
</html>

