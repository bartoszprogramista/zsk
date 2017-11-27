<?php
    class Liczby{
        public static $liczba = 10;
        public static function wyswietl(){
            echo "Wartość statycznego pola wynosi: ";
            echo Liczby::$liczba."<br>";
        }
    }


    echo Liczby::$liczba; // wyswietlanie liczby stałej z klays
    Liczby::wyswietl();
    Liczby::$liczba = 200;
    Liczby::wyswietl();






?>
