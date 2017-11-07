<?php
    $liczba = 10;
    $_liczba =15;
    $logiczne = true;
    $tekst = "tekstxdddd";
    $imie = "janusz";
    $Imie = "janusz";
    $Imię = "grażyna";
    $Imię_ = "sena";

    echo "<br>$liczba";
    echo "<br>$tekst";
    echo '<br>$tekst';

// typy zmiennych
// typ skalarny
// typ boolean
    $prawda = true;
    $falsz = false;


// typ integer

    $calkowita =200;

    $szesnastkowa = 0xA;
    $szesnastkowa = 0xFF;

    $osemkowa = 07;
    $osemkowa3 = 010; // 0*8^0 + 1*8^1

    $binarna = 0b1010;
    $binarna2 = 0b10;



    echo "<br>$szesnastkowa";
    echo "<br>$osemkowa";
    echo "<br>$osemkowa3";
    echo "<br>$binarna";
    echo "<br>$binarna2";

// typ float

    $zmiennoprzecinkowa = 5.7;

    echo "<br>$zmiennoprzecinkowa";

// typ string

/*
    $zmienna = 5.25;
    echo "$zmienna";
    echo '$zmienna';
*/

// skłądnia heredoc
    $imie = "Filip";
    $napis = <<<TEKST
    <br>Mam na imie $imie

TEKST;



// <-- MUSI BYĆ MAKSYMALNIE PO LEWEJ STRONIE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// i nie może być żadnych pierdolonych spacji przed i po np TEKST


    //echo $napis;

// składnia nowdoc
    $nazwisko = "Nowak";
    $tekst = <<<'ETYKIETA'
    <br>Moje nazwisko: $nazwisko
ETYKIETA;

    echo $tekst;


// typ złożony
    //typ array (tablicowy)
    //typ object (obiektowy)

//typ specjalny
    //typ resource
    // typ NULL

    $inna = null;
    $inna1 = NULL;
    $inna2 = nUlL; // nie wiadomo czy jest dobre


//***************************************************************************************

echo "<br>Zmienna o nazwie $inna ma wartość: null";
echo "<br>Zmienna o nazwie \$inna ma wartość: null";
echo "<br>Zmienna o nazwie \$inna ma wartość:", $inna;



























?>
