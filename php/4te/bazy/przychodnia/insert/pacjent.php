<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usuwanie hehe</title>
        <link rel="stylesheet" href="przychodnia.css">

    </head>
    <body>
       <h2>Wyświetlanie i dodawanie danych</h2>
        <?php
            $polaczenie = new mysqli('localhost','root','','przychodnia4te');



            if(!$polaczenie->connect_error){


                $sort = 'id';
                if(isset($_GET['sort'])){
                    $sort = $_GET['sort'];
                }
                $sql = "SELECT * FROM pacjenci order by $sort";



             echo <<<XD
             <table>
                    <tr>
                        <th><a href='pacjent.php?sort=id'> id</a></th>
                        <th><a href='pacjent.php?sort=imie'>imie</a></th>
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
                        <td> {$wiersz['opis']}</td>
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


        <form action="insert.php" method="post">
            <input type="text" name="imie" placeholder="imie"> <br><br>
            <input type="text" name="nazwisko" placeholder="nazwisko"> <br><br>
            <input type="text" name="choroby_przewlekle" placeholder="choroby_przewlekle"> <br><br>
            <input type="text" name="uczulenia" placeholder="uczulenia"> <br><br>
            <input type="text" name="choroby" placeholder="choroby"> <br><br>
            <input type="text" name="leki_przepisane" placeholder="leki_przepisane"> <br><br>
            <textarea rows="10" cols="15" name="opis" >
                opis...
            </textarea><br><br>


            <input type="submit" name="przycisk" value="dodaj" > <br><br>
        </form>

    </body>
</html>
