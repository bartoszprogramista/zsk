<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Weterynarz </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
    <div id="panellewy">
        <h2>Psy</h2>
        <?php

        // POŁĄCZENIE Z SERWEREM
            if($polaczenie = mysqli_connect('localhost', 'root', '')){
                echo "prawidłowe połączenie z serwerem <br>";
            }else{
                //exit("Błędne połączenie");
                echo "Błędne połączenie<br>";
            }
          mysqli_set_charset($polaczenie,"utf8");
        // POŁĄCZENIE Z BAZĄ DANYCH
            if(mysqli_select_db($polaczenie, 'weterynarz')){
                echo "Połączyłeś się z bazą danych weterynarz<br>";
            }else{
                echo "nie połączyłeś się <br>";
            }

            $zapytanie = "SELECT zwierzeta.id, zwierzeta.imie, zwierzeta.wlasciciel from zwierzeta WHERE zwierzeta.rodzaj = 1";

           // $rezultat = mysqli_query($polaczenie," SELECT zwierzeta.id, zwierzeta.imie, zwierzeta.wlasciciel from zwierzeta WHERE zwierzeta.rodzaj = 1");
           if($rezultat = mysqli_query($polaczenie,$zapytanie)){
               echo "Prawidłowe zapytanie<br>";
           }else{
               echo "Błędne zapisanie<br>";
            }
            // wyświetlenie zapytania - Pan Profesor Szyperator to wymyślił

            while($wiersz = mysqli_fetch_row($rezultat)){
                echo <<<WIERSZ
                $wiersz[0]
                $wiersz[1]
                $wiersz[2]<br>
WIERSZ;
            }

        ?>
        <h2>Koty</h2>
        <?php

            $zapytanie2 = "SELECT zwierzeta.id, zwierzeta.imie, zwierzeta.wlasciciel from zwierzeta WHERE zwierzeta.rodzaj Like 2";

           // $rezultat = mysqli_query($polaczenie," SELECT zwierzeta.id, zwierzeta.imie, zwierzeta.wlasciciel from zwierzeta WHERE zwierzeta.rodzaj = 1");
           if($rezultat2 = mysqli_query($polaczenie,$zapytanie2)){
               echo "Prawidłowe zapytanie<br>";
           }else{
               echo "Błędne zapisanie<br>";
            }
            // wyświetlenie zapytania

            while($wiersz2 = mysqli_fetch_assoc($rezultat2)){
                echo <<<WIERSZ
                {$wiersz2['id']}
                {$wiersz2['imie']}
                {$wiersz2['wlasciciel']}<br>
WIERSZ;
            }

        ?>
    </div>
    <div id="panelsrodkowy">
        <h2>
            SZZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH
        </h2>
        <?php

            $zapytanie = "SELECT `imie`, `telefon`, `szczepienie`,`opis` from zwierzeta";

            if($rezultat = mysqli_query($polaczenie, $zapytanie)){

                while($wiersz = mysqli_fetch_assoc($rezultat)){
                echo <<<WIERSZ

                Pacjent: {$wiersz['imie']}<br>
                Telefon właściciela: {$wiersz['telefon']},
                ostatnie szczepienie: {$wiersz['szczepienie']},
                informacje: {$wiersz['opis']}
                <hr>
                <br>


WIERSZ;
}


            }else{
                echo "Błędne zapytanie";
            }

            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="panelprawy"></div>






<?php
//https://egzamin-e14.blogspot.com/2017/10/arkusz-e14-03-1706.html
// ZAD DOM ZROBIC CSS, zdjecie w inkscape i dokończyć egzamin w chuj


?>

    </body>
</html>
