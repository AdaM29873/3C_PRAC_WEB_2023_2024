<table>
    <tr>
        <td>ID</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>rok urodzenia</td>
    </tr>
    <?php
         $host = "localhost";
         $user ="root";
         $pass="";
         $db = "baza_filmow";
     
         $polaczenie = mysqli_connect($host, $user, $pass, $db);
     
         $zapytania = "SELECT * FROM filmy";
         
         $wynik = mysqli_query($polaczenie, $zapytania);
        while($row = mysqli_fetch_row($wynik))
        {
            echo"<tr>";
            echo"<td>$row[0]</td>";//$row[`id`]
            echo"<td>$row[1]</td>";
            echo"<td>$row[2]</td>";
            echo"<td>$row[3]</td>";
            echo"</tr>";
        }
    ?>
</table>
