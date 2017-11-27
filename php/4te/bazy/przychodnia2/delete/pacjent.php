<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usuwanie hehe</title>
        <link rel="stylesheet" href="przychodnia.css">

    </head>
    <body>
       <h2>Wyświetlanie i usuwanie danych</h2>
        <?php
            $polaczenie = new mysqli('localhost','root','','przychodnia4te');

            if(!$polaczenie->connect_error){
                $sql ="SELECT * FROM pacjenci";
             echo <<<XD
             <table>
                    <tr>
                        <th>id</th>
                        <th>imie</th>
                        <th>nazwisko</th>
                        <th>choroby przewlekłe</th>
                        <th>uczulenia</th>
                        <th>choroby</th>
                        <th>leki przepisane</th>
                    </tr>

XD;
            if($rezultat = $polaczenie->query($sql)){
                while($wiersz =$rezultat->fetch_assoc()){
                    echo <<<QWERT
                    <tr>
                        <td> {$wiersz['id']}</td>
                        <td> {$wiersz['imie']}</td>
                        <td> {$wiersz['nazwisko']}</td>
                        <td> {$wiersz['choroby_przewlekle']}</td>
                        <td> {$wiersz['uczulenia']}</td>
                        <td> {$wiersz['choroba']}</td>
                        <td> {$wiersz['leki_przepisane']}</td>
                        <td> <a href='delete.php?id={$wiersz['id']}'>usuń</a></td>
                    </tr>


QWERT;
                }


                echo "</table>";
            }else{
                echo "Błędne zapytanie";
            }

            }else{
                echo "Błąd połączenia: ".connect_errno;
            }
        $polaczenie->close();
        ?>

    </body>
</html>
