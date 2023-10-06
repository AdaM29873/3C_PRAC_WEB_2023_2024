<?php
    $number = 101;
    if($number >= 100 && $number < 150)
        echo("liczba mieści się w przedziale");
    else 
        echo("liczba nie mieści się w przedziale");
?>
<?php
    $number = 101;
   switch(true)
   {
        case($number >=100&& $number < 150);
            echo("liczba mieści się w przedziale");
            break;
        default:
            echo("liczba nie mieści się w przedziale");
            break;
   }
?>
