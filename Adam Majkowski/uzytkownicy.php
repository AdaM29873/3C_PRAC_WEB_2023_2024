<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <?php
     $host = "localhost";
     $user ="root";
     $pass="";
     $db = "portal";
 
     $connect = mysqli_connect($host, $user, $pass, $db);
    ?>
    <section>
        <div id="banner1"><h2>Nasze osiedle</h2></div>
        <div id="banner2"> 
            <?php
                $query = "SELECT COUNT(*) FROM `dane`";
                $result = mysqli_query($connect, $query);
                $res = mysqli_fetch_row($result);
                echo "<h5>Liczba użytkowników portalu: $res[0] </h5>"
            ?>
        </div>
    </section>
    <section>
        <div id="left">
            <h3>Logowanie</h3>
            <form action="uzytkownicy.php" method="post">
                <p>login</p>
                <input type="text" name="login">
                <p>hasło</p>
                <input type="password" name="haslo">
                <br>
                <button>Zaloguj</button>
            </form>
        </div>
        <div id="right">
           <h3>Wizytówka</h3>
           <div id="box">
                <?php

                ?>
            </div>
        </div>
    </section>
    <div id="footer"><p>Stronę wykonał: Adam Majkowski</p></div>
</body>
</html>