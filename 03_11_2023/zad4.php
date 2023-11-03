<?php
    $rok = 1760;
    if ($rok < 1)
     echo("zła dana");
    else if($rok % 4 == 0)
        echo("przestępny,");
    else if( $rok % 4!= 0)
        echo("nieprzestepny,");
    $stulecie = round($rok /100,); 
       echo(" stulecie: " .$stulecie);
?>