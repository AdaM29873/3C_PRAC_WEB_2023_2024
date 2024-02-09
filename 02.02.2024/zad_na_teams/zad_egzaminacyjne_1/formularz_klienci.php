<?php
echo "Twoje dane:"."<br>";
echo "płeć: ".$_POST['plec']. "<br>";

if(!empty($_POST['rok_urodzenia']))
{
    echo "rok urodzenia: ".$_POST['rok_urodzenia']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole imię". "<br>";
}

?>