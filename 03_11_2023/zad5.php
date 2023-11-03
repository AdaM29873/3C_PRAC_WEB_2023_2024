<?php
    $procent = 59;
    if($procent < 0)   
      echo("zła dana") ;
    else if($procent < 30)   
      echo("1") ;
    else if($procent >= 30 && $procent < 50)   
      echo("2") ;
    else if($procent >= 50 && $procent < 70)   
      echo("3") ;
    else if($procent >= 70 && $procent < 85)   
      echo("4") ;
    else if($procent >= 85 && $procent < 97)   
      echo("5") ;
    else if($procent >= 97)   
      echo("6") ;
?>