Napisz skrypt wyznaczający najmniejszą z trzech liczb podanych przez użytkownika. Wyświetl odpowiedni komunikat.
<?php
    $number1 = 2;
    $number2 = 4;
    $number3 = 7;
    if($number1 <= $number2 && $number1 <= $number3)
        echo"najmniejsza jest liczba 1";
    elseif ($number2 <=$number1 && $number2 <= $number3) 
        echo"najmniejsza jest liczba 2";
    else
        echo" najmniejsza jest liczba3";
?>