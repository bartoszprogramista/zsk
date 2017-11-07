<?php
/*  FOMRULARZ NR 1
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];

if(empty($imie) || empty($nazwisko)){
    echo "nie wprowadziłeś poprawnych danych";
}else{
    echo "imię: <span style=\"color:red\">$imie</span>
    <br>Nazwisko: <span style=\"color:green\">$nazwisko</span>";
}

*/
/*  FORMULARZ 2
$login = $_POST['login'];
$pass = $_POST['haslo'];
echo "$login $pass";
define('STALA',1);
$a = STALA;// chuj wie po co ta stała
if(!empty($login)&& !empty($pass)){
    echo<<<DANE
    Login: $login<br>
    hasło: $pass<br>
DANE;
}else{
    //echo "nie wprowadziles wszystkich danych";
    header('location:formularz.php');
}

*/

/*
    FORMULARZ 3
if(isset($_GET['kolor'])){
    echo "zanaczyłeś kolor: {$_GET['kolor']} ";
}else{
    header('location:formularz.php');
}*/
?>
