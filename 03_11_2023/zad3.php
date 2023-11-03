<?php
    $kategoria = 2;
    if($kategoria < 0 && $kategoria >3)
       echo"zla dana";
    $cena_elektronika =50;
    $cena_warzywka =5;
    $cena_lody =7;

    $podatek_elektronika = 0.24;
    $podatek_warzywka = 0.2;
    $podatek_lody = 0.3;



    switch($kategoria)
    {
        case 1:
            echo "elrktronika : ". $cena_elektronika + $cena_elektronika* $podatek_elektronika;
            break;
        case 2:
            echo "warzywka : ". $cena_warzywka + $cena_warzywka* $podatek_warzywka;
            break;
        case 3:
            echo "lody : ". $cena_lody + $cena_lody* $podatek_lody;
            break;
    }
?>
