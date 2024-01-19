<?php
echo "Twoje dane:"."<br>";
echo "płeć: ".$_POST['plec']. "<br>";

if(!empty($_POST['nazw']))
{
    echo "nazwisko: ".$_POST['nazw']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole nazwisko". "<br>";
}

if(!empty($_POST['imie']))
{
    echo "imię: ".$_POST['imie']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole imię". "<br>";
}

if(!empty($_POST['pesel']))
{
    echo "Nr pesel: ".$_POST['pesel']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole pesel". "<br>";
}

if(!empty($_POST['mail']))
{
    echo "Adres poczty elektronicznej: ".$_POST['mail']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole z adresem elektronicznym". "<br>";
}

if(!empty($_POST['telefon']))
{
    echo "nr telefonu: ".$_POST['telefon']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole z numerem telefonu". "<br>";
}

if(!empty($_POST['adres']))
{
    echo "Adres: ".$_POST['adres']. "<br>";
}
else
{
    echo "proszę zaznaczyc pole z adresem zamieszkania". "<br>";
}

echo "wybrany kierunek: ".$_POST['kierunek']. "<br>";
?>