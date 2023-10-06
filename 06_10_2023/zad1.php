<?php
    $number = 5;
    if($number % 2 == 1)
        echo("liczba jest nieparzysta");
    if($number % 2 == 0)
        echo("liczba jest parzysta");
?>
<?php
    $number = 5;
    switch($number%2)
    {
        case(1):
            echo("liczba jest nieparzysta");
            break;
        case(0):
            echo("liczba jest parzysta");
            break;
    }
?>