<?php
    session_start();
    if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
        if($polaczenie = new mysqli('localhost','root','','chuj4te')){
            $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
            $haslo = $polaczenie->real_escape_string(htmlentities($_POST['haslo']));
            $sql = "SELECT login,haslo FROM uzytkownik where login = '$login' and haslo = '$haslo'";

            if($rezultat = $polaczenie->query($sql)){
                if($rezultat->num_rows > 0){
                    $_SESSION['zalogowany'] = true;
                    $_SESSION['login'] = $login;
                    unset($_SESSION['blad']);
                    header('location:zalogowany.php');


                }else{
                    $_SESSION['blad'] = "Błędne dane logowania";
                    header('location:logowanie.php');
                }
            }else{
                echo "Błędne zapytanie";
            }

        }else{
            echo "Błędne połączenie z bazą danych";
        }
    }else{
        header('location:logowanie.php');
    }




?>
