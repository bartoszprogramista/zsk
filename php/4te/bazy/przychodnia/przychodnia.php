<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Przychodnia</title>
        <link rel="stylesheet" href="przychodnia.css">
    </head>
    <body>
        <div id="baner">
            <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
        </div>
        <div id="panellewy">
            <h3>LISTA PACJENTÓW</h3>

        <?php
            $polaczenie = @new mysqli('localhost','root','','przychodnia4te');
            if(!$polaczenie->connect_errno){
                //echo "Prawidłowe połączenie";
                $zapytanie = "SELECT id, imie, nazwisko from pacjenci";
                if($rezultat = $polaczenie->query($zapytanie)){
                    while($wiersz = $rezultat->fetch_assoc()){
                        echo <<<WIERSZ
                        {$wiersz['id']}
                        {$wiersz['imie']}
                        {$wiersz['nazwisko']}
                        <br>
WIERSZ;

                    }
                echo "<br>"."<br>";
                echo <<<FORM
                    <form action="pacjent.php">
                Podaj id:<br>
                <input type="number" name="id">
                <input type="submit" name="przycisk" value="Pokaż dane">


                    </form>

FORM;
                }else{
                    echo "Błąd zapytania";
                }
            }else{
               //  echo "Błąd".$polaczenie->connect_errno;    //1045 HASŁO     2002 serwer 1045 hasło 1049 baza

            }
        ?>
                       <h3>LEKARZE</h3>
            <ul>
                <li>pn-śr
                    <ol>
                        <li>Anna Kwiatkowska</li>
                        <li>Jan Kowalewski</li>
                    </ol></li>
                <li>czw – pt
                    <ol>
                        <li>Krzysztof Nowak</li>
                    </ol></li>
            </ul>



        </div>
        <div id="panelprawy">
            <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>

            Brak wybranego pacjenta

        </div>
        <div id="stopka">
            <p>utworzone przez: xd</p>
            <a href="kwerendy.txt">Pobierz plik z kwerendami:</a>
        </div>





    </body>
</html>
