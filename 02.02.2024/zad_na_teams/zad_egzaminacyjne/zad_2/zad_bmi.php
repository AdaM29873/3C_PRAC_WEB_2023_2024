<?php
if(isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['height']))
{
    $waga = $_POST['weight'];
    $wzrost = $_POST['height']/100;
    $BMI = ($waga)/($wzrost*$wzrost);
    
    if($BMI < 18,5)
    {
        echo"niedowaga: ".$BMI; 
    }
    if($BMI > 18,5 && $BMI< 24,99)
    {
        echo"wartość prawidłowa: ".$BMI; 
    }
    if($BMI >= 25)
    {
        echo"nadwaga: ".$BMI; 
    }
}
else
{
    echo"złe dane podane"; 
}
?>