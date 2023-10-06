Zad.5 Napisz skrypt, w którym użytkownik podaje wiek i otrzymuje odpowiednią informację: mniej niż 11 lat to dziecko, między 11 i 17 to nastolatek, 18 i więcej to dorosły.

<?php
    $number = 5;
    if($number < 11)
        echo("dziecko");
    if($number >= 11 && $number <= 17)
        echo("nastolatek");  
    if($number >= 18)
        echo("dorosły");  
?>
<?php
    $wiek = 5;
    switch(true)
    {
        case($wiek < 11):
            echo("dziecko");
            break;
        case($wiek >= 11 && $wiek <=17):
            echo("nastolatek");
            break;
        case($wiek >= 18):
            echo("dorosły");
            break;
    }
?>