<?php
    $side_A = 20;
    $side_B = 59;
    $side_C = 20;
    if ( $side_A < 1)
     echo"zla dana";
    if ( $side_B < 1)
     echo"zla dana";
    if ( $side_C < 1)
     echo"zla dana";
    else if($side_A==$side_B && $side_B==$side_C)   
      echo("trk. rownoboczny");
    else if($side_A > $side_B && $side_A > $side_C && $side_B*$side_B + $side_C*$side_C == $side_A*$side_A)
     echo("trk. prostokatny");
    else if($side_C > $side_B && $side_C > $side_A && $side_B*$side_B + $side_A*$side_A == $side_C*$side_C)
        echo("trk. prostokatny");
    else if($side_B > $side_A && $side_B > $side_C && $side_A*$side_A + $side_C*$side_C == $side_B*$side_B)
        echo("trk. prostokatny");
    else if($side_C == $side_A || $side_C == $side_B|| $side_A == $side_B)
        echo("TRK. rownoramienny;");
  
?>