<?php

//declare(strict_types = 1); // restrykcje odnoścnie typów danych,

    function wartosc($a){
        if($a<0){
            return "ujemna <br>";
        }elseif($a > 0){
            return "dodatnia <br>";
        }else{
            return "zero<br>";
        }
    }

$x = wartosc(-5);
echo gettype($x);

// **************************

function dajWartosc():int{
    return 10.55;
}

echo dajWartosc();

//***************************

// zasięg zmiennych
$x = 10;
function wyswietl(){
    echo "<br>Wartosc zmiennej \$x wynosi: ";
    echo $GLOBALS['x'];

}
wyswietl();
echo "<br>";
echo "Wartość zmiennej \$x wynosi: $x";

// **********************************

$y = 11;
function wyswietly(){
    global $y;
    echo "Wartość zmiennej \$y wynosi: $y";
}
echo "<br>";
wyswietly();

// *********************************

function suma(){
     $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba =+10;
}
echo "<br>";
suma();


function suma1(){
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba +=10;
}

 suma1();
 suma1();
 suma1();
// ************************************

// argumenty

function dodaj($x, $y = 1){
    return $x +$y;
}

$z = 20;
$liczba = dodaj($z,6);
echo "$liczba<br>";
$liczba1 = dodaj(2,5);
echo "$liczba1<br>";
$liczba2 = dodaj(3);
echo "$liczba2<br>";

// typy danych

function mnozenie(float $x, int $y){
    return $x * $y;
}
echo mnozenie(3,4)."<br>";
echo mnozenie(3.5,2)."<br>";
echo mnozenie(2,3.5)."<br>";




































?>
