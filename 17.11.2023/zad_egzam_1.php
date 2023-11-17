<?php
$pl = 10;
// rodzaj na jaka walute przeliczamy
$whatValue = 1;
define("Euro", 4.32);
define("Dolar",3.21);
define("Frank",3.98);
if($whatValue ==1|| $whatValue == 2|| $whatValue == 3)
{

    switch( $whatValue) 
    {
        case 1:
            echo($pl/Euro+"euro");
            break;
        case 2:
            echo($pl/Dolar+"$");
            break;
        case 3:
            echo($pl/Frank+"Frank");
            break;
    }
}
else 
    echo("zła wartość wprowadzona");


?>