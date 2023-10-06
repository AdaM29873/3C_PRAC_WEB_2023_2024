<?php
    $number = 5;
    $number2 =6;
    if($number % $number2 > 0)
        echo(" liczba nie jest podzielna");
    if($number % $number2 == 0)
        echo(" liczba jest podzielna");
?>
<?php
    $number = 6;
    $number2 =6;
    switch($number %$number2)
    {
        case 0;
            echo(" liczba jest podzielna");
        default:
            echo(" liczba nie jest podzielna");
            break;
    }
?>
