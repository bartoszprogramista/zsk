<?php

    $polaczenie = new mysqli('localhost','root','','przychodnia4te');

    if(!$polaczenie->connect_errno){

        $polaczenie->set_charset("utf8");


        if(!empty($_POST['imie']) &&
           !empty($_POST['nazwisko']) &&
           !empty($_POST['choroby_przewlekle']) &&
           !empty($_POST['uczulenia']) &&
           !empty($_POST['choroby']) &&
           !empty($_POST['leki_przepisane']) &&
           !empty($_POST['opis'])
          ){
            echo "dziala";
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $choroby_przewlekle = $_POST['choroby_przewlekle'];
            $uczulenia = $_POST['uczulenia'];
            $choroby = $_POST['choroby'];
            $leki_przepisane = $_POST['leki_przepisane'];
            $opis = $_POST['opis'];

            // sanityzacja, nie pozwala na chujowe wyswietlanie danych z bazy
            $imie = $polaczenie ->real_escape_string(htmlentities($imie));
            $nazwisko = $polaczenie ->real_escape_string(htmlentities($nazwisko));
            $choroby_przewlekle = $polaczenie ->real_escape_string(htmlentities($choroby_przewlekle));
            $uczulenia = $polaczenie ->real_escape_string(htmlentities($uczulenia));
            $leki_przepisane = $polaczenie ->real_escape_string(htmlentities($leki_przepisane));
            $opis = $polaczenie ->real_escape_string(htmlentities($opis));

            $sql = "INSERT INTO `pacjenci` (`id`, `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia`, `choroba`, `leki_przepisane`, `opis`) VALUES (NULL, '$imie', '$nazwisko', '$choroby_przewlekle', '$uczulenia', '$choroby', '$leki_przepisane', '$opis')";

            if($rezultat=$polaczenie->query($sql)){
                header('location: ./pacjent.php');
            }else{
                echo "Błędne zapytanie";
            }



        }else{
            header('location: ./pacjent.php');
        }

    }else{
        echo "błąd połączenia";
    }

        $polaczenie->close();
?>
