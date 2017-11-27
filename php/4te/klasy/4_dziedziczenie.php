<?php
    require_once("2_1_klasy.php");

    class Ciezarowy extends Samochod{
        public $ladownosc;

        public function wyswietl(){
            echo parent::wyswietl();
            echo "Ładowność: ".$this->ladownosc;
        }
    }
    $tir1 = new Ciezarowy("Polska",4);
    $tir1->ladownosc = 19000;
    $tir1->marka = "DAF";
    $tir1->model = "XF 95 480";

    echo $tir1->wyswietl()."<br>";

    $tir2 = new Samochod("Polska",5);
    echo $tir2->ladownosc; //Notice: Undefined property: Samochod::$ladownosc









?>
