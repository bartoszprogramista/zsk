<?php
//DATA
    echo date("Y");
    echo date("y"),"<br>";
    echo date("Y-m-d"),"<br>";
    echo date("Y-M-D"),"<br>";
    echo date("Y-M-D"),"<br>";
    echo date("e"),"<br>";
    echo date("F"),"<br>";

//CZAS

    echo date("g"),"<br>"; // format 12 godzinny bez zera na poczatku
    echo date("G"),"<br>"; // format 24 godzinny
    echo date("h"),"<br>";  // format 12 godzinny z zerem na poczatku
    echo date("H"),"<br>";  // format 24 godzinny z zerem na poczatku

    echo date("i"),"<br>";// minuty z zerem na początku
    echo date("I"),"<br>"; // czas letni lub zimowy: letni(1), zimowy(0)
    echo date("j"),"<br>"; // dzien miesiaca bez zera
    echo date("l"),"<br>";  //dzien tygodnia
    echo date("L"),"<br>"; // znacznik roku przestępnego
    echo date("m"),"<br>"; // miesiąc z zerem
    echo date("n"),"<br>"; // miesiac bez zera na poczatku
    echo date("0"),"<br>"; // +0100 różnica dodo czasu Greenwich
    echo date("o"),"<br>"; // rok
    echo date("P"),"<br>"; // +01:00 roznica d oczasu greenwich
    echo date("s"),"<br>"; //sekundy
    echo date("S"),"<br>";// st
    echo date("t"),"<br>"; // liczba dni miesiaca
    echo date("T"),"<br>"; // CET strefa czasowa
    echo date("U"),"<br>"; // znacznik czasu Uniksa
    echo date("w"),"<br>"; // dzien tygodnia
    echo date("W"),"<br>"; //tydzien
    echo date("z"),"<br>"; // dzien roku, liczony od zera
    echo "<hr>";

// *********************************************************************
$data = getdate();
$dzien = $data['mday'];
$miesiac = $data['mon'];
$rok = $data['year'];
$dzienTygodnia = $data['wday']; // dzien tygodnia 0 - 6, 0 = niedziela
$dzienRoku = $data['yday'] +1;
$dzienTygodnia1 = $data['weekday'];
$miesiac1 = $data['month'];
$znacznik = $data[0];


switch($miesiac){
    case 1:
        $miesiac = "styczen";
        break;
    case 2:
        $miesiac = "luty";
        break;
    case 3:
        $miesiac = "marzec";
        break;
    case 4:
        $miesiac = "kwiecien";
        break;
    case 5:
        $miesiac = "maj";
        break;
    case 6:
        $miesiac = "czerwiec";
        break;
    case 7:
        $miesiac = "lipiec";
        break;
    case 8:
        $miesiac = "sierpień";
        break;
    case 9:
        $miesiac = "wrzesień";
        break;
    case 10:
        $miesiac = "październik";
        break;
    case 11:
        $miesiac = "listopad";
        break;
    case 12:
        $miesiac = "grudzien";
        break;
}

switch($dzienTygodnia){
    case 0:
        $dzienTygodnia = "niedziela";
        break;
    case 1:
        $dzienTygodnia = "poniedzialek";
        break;
    case 2:
        $dzienTygodnia = "wtorek";
        break;
    case 3:
        $dzienTygodnia = "środa";
        break;
    case 4:
        $dzienTygodnia = "czwartek";
        break;
    case 5:
        $dzienTygodnia = "piątek";
        break;
    case 6:
        $dzienTygodnia = "sobota";
        break;

}

echo "$dzien - $miesiac - $rok, $dzienTygodnia<br> ";
echo "$dzienRoku, $dzienTygodnia1, $miesiac1, $znacznik";

// ************************************************************************************
// ZNACZNIK CZASU


$r1 = 2017;
$m1 = 10;
$d1 = 31;

$r2 = 1998;
$m2 = 12;
$d2 = 7;

$czas1 = mktime(0,0,0,$m1, $d1, $r1); // godzina, minuta, sekunda, miesiac, dzień, rok

$czas2 = mktime(0,0,0,$m2, $d2, $r2);
$czas = abs($czas2 - $czas1);// wartosc bezwzgledna
$dni = $czas/(60*60*24);
$lata = floor($dni/365);
echo "<br> Ilość sekund: $czas";
echo "<br> Ilość dni: $dni";
echo "<br> Ilość lat: $lata";


// **************************************************************
//strtotime()

$data = mktime();// aktulany znacznik czasu
echo "<br> $data ";
echo $dataDzisiejsza = strtotime("now"),"<br>";
echo $dataUrodzenia = strtotime("7 december 1998"), "<br>";

$panFilip = abs($dataDzisiejsza - $dataUrodzenia);
echo $panFilip,"<br>";

$dziesiecDniWstecz = strtotime("- 10 day");
echo $dziesiecDniWstecz, "<br>";

$wczoraj = strtotime("yesterday");
echo $wczoraj, "<br>";

$jutro = strtotime("tomorrow");
echo $jutro, "<br>";

$przyszlosc = strtotime("+10 day 7 hours 30 minutes 7 seconds");
 echo $przyszlosc, "<br>";


// zadanie. ile sekund ma jeden dzień

$dzisiaj = strtotime("today");
$dzienSekundy = $jutro- $dzisiaj;
echo $dzienSekundy,"<br>"; // 86400
















































?>
