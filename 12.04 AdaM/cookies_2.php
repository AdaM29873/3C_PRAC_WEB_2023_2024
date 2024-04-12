<?php
if(!isset($_COOKIE['visited']))
{
    setcookie("visited","yes");
    $str = "cookie o nazwie visited nie jest ustawiona.";
}
else
{
    $str = "cookie o nazwie visited jest ustawiona.";
    $str .= "jego wartość to: {$_COOKIE['visited']}.";
}
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inttial-scale=1.0">
        <tittle>COOKIE</tittle>
    </head>
<body>
    <div>
        <?php
            echo $str;
        ?>
    </div>
</body>
</html>
