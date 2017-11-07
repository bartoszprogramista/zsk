<?php
// operatory

    $potegowanie = 2**3;
    $potegowanie2 = 2**10;

    echo $potegowanie;
    echo $potegowanie2;

    $modulo = 11%3;
    echo "<br>$modulo";

// + - / *

// operatory bitowe: & - AND, | - OR, ~ NOT, ^ XOR, przesunięcie bitowe w lewo <<
// przesunięcie bitowe w prawo >>

    $dziesiec = 0b1010;
    echo "<br>$dziesiec";

    $dziesiec = $dziesiec << 1;
    echo "<br>$dziesiec";
/*
    $dziesiec = $dziesiec >> 1;
    echo "<br>$dziesiec";
*/
// operatory logiczne

// and, or, xor, !, &&(ma większy priorytet niż poprzedni and), ||,


    $x =2 ;
    echo $x++; //2
    echo ++$x;  //4
    echo $x;    //4

    $y = $x++; //4
    echo $y;    //4
    $y = ++$x;  //6
    echo $y;    //6
    echo ++$y;  //7

// ********************************************************************************

    $tekst1 = "Pierwszy tekst";
    $tekst12 = "4444aaa";
    $tekst2 = "Drugi tekst";
    $liczba1 = 14;
    echo $tekst1 . $tekst2 .$liczba1; // liczba zamienia sie w stringa


//operatory rzutowania

    //bool, int, float, string, array, object, unset,

    $dwa = (int)$tekst1;
    echo $dwa;


    $trzy = (int)$tekst12;
    echo $trzy;

    $j =-1;
    $i =0;
    $c = 100;
    $j = (bool)$j;
    $i = (bool)$i;

    echo "<br>$j";
    echo "<br>$i";

    $c= (unset)$c;
    echo $c; // nic nie wyswietla
    echo gettype($c);// null

    $tekst = (int)$tekst12;
    echo $tekst; // 4444

    $liczba1 = (float)$liczba1;
    echo gettype($liczba1);

// string, array, object

// zadanie1
// sprawdź czy w sklepie kupisz rower

    $sklep = 'otwarty';
    $pieniadze = 800;
    $romet = true;
    if($sklep == 'otwarty' && $pieniadze > 900 && $romet){
        echo "<br>kupiłeś rower";
    }else{
        echo "<br>idź pieszo";
    }

//zadanie 2
// chcesz kupić rower lub hulajnoge

    $sklep = 'otwarty';
    $pieniadze = 1888;
    $romet = false;
    $hulajnoga = true;

    if($sklep == 'otwarty' && $pieniadze > 1000 && ($romet || $hulajnoga)){
        if($romet && $hulajnoga){
            echo "<br> ty bogaty skurwielu";
        }else if($romet){
            echo "<br> Kupiłeś romet";
        }else{
            echo "<br>Kupiłeś hulajnoge";
        }
    }else{
        echo "<br idziezs pieszo";
    }


$a = 1.0;
$b = 1;
if($a ===$b){
    echo "<br> Równe";
}else{
    echo "<br> Różne";
}
echo gettype($a);// int
echo gettype($b);//double

// rozmiar typu int

echo PHP_INT_SIZE; // 4

// KONTRONA TYPU ZMIENNYCH

$test = 'szkola';
$x = 10;
$a = 20.5;
$y = true;
$z = NULL;
$w;
echo gettype($test);//string
echo gettype($x);//integer
echo gettype($a);//double
echo gettype($y);//boolean
echo gettype($z);//NULL
echo @gettype($w);//error w chuj/NULL / @ usuwa error

echo "<br>";
echo is_string($test);///1
echo is_string($x);//nic nie wypisze
echo is_bool($y);//1
echo is_float($a);//1
echo is_int($x);//1
echo @is_null($z);//error i 1



// $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_REQUEST, $_SERVER
echo "<br>";
echo $_SERVER['SERVER_PORT'];echo "<br>";
echo $_SERVER['SCRIPT_NAME'];echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];echo "<br>";

$lokalPliku = $_SERVER['DOCUMENT_ROOT'];
echo "<br>$lokalPliku";
echo "<br>";
// STAŁE
// nazwy z dużych liter


define('NAZWISKO','Kowal');
echo NAZWISKO;
//NAZWISKO = "nowa"; // syntax error, nie mozna przypisywac do stałej

define('imie','Janusz');
echo imie;

define('wiek',18);
echo wiek; // nie sprawdza wielkosci liter w nazwie

define('PI',3.1415);
echo PI;
echo "<br>";
// stałe predefiniowane
echo PHP_VERSION;
echo gettype(PHP_VERSION);//string

$ver = PHP_VERSION;
if($ver>7.1){
    echo "Nowa wersja php";
}else{
    echo "stara wersja php";
}

echo PHP_OS;echo "<br>";
echo __LINE__;echo "<br>";
echo __FILE__;echo "<br>";
echo __DIR__;echo "<br>";


























?>
