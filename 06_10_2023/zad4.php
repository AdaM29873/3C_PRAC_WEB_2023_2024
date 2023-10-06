<?php
    $number = 5;
    if($number > 0)
        echo("liczba większa od zera");
    if($number == 0)
        echo("liczba jest równa zero");  
    if($number < 0)
        echo("liczba jest mniejasza od zera");  
?>
<?php
    $number = 5;
    switch(true)
    {
    case ($number > 0):
        echo"liczba jest wieksza od zera";
        break;
    case($number == 0 ):
        echo"liczba jest równa zero";
        break;
       default:
        echo"liczba jest mniejsza od zera";
        break;
    }
?>