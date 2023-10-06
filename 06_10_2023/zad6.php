
<?php
    $rok = 1760;
    if($rok %400 == 0)
        echo("przestępny, liczba dni w lutym: 29");
    else if($rok %100 == 0)
        echo("nieprzestępny, liczba dni w lutym: 28");  
    else if($rok % 4 == 0 && $rok % 100 != 0)
        echo("przestępny,liczba dni w lutym: 29 ");
    else if($rok % 4 != 0)
        echo("nieprzestępny,liczba dni w lutym: 28");
?>
<?php
$rok = 1760;
switch(true)
{
    case(($rok%4 == 0 && $rok %100 !=0)|| ($rok %400 == 0));
        echo("przestępny,liczba dni w lutym: 29 ");
        break;
    default:
        echo("nieprzestępny,liczba dni w lutym: 28 ");
}
?>