<?php
session_start();
$_SESSION["color"]= "blue";

exho $_SESSION['color'];

session_unset();

session_destroy();
$a = sha1("haslo");
?>