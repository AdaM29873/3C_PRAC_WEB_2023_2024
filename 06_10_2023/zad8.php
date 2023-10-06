<?php
    $number1 = 2;
    $number2 = 4;
    $number3 = 7;
    if($number1 == $number2 || $number1 ==$number3 || $number3 == $number2)
    {
        echo("co najmniej dwie liczby sa takie same");
    }
    else
    {
        echo("żadne nie są takie same");
    }
?>
<?php
    $number1 = 2;
    $number2 = 4;
    $number3 = 7;
    switch(true)
    {
        CASE($number1 == $number2 || $number1 == $number3 || $number2 == $number3):
            echo("min. dwie są takie same");
        break;
        default:
            echo"zadne nie są takie same";
            break;
    }
?>