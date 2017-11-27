<?php
    class Liczby{
        public $wartosc1 = 1;
        protected $wartosc2 = 2;
        private $wartosc3 = 3 ;
        public function wyswietl(){
            echo "Wartosc1 : ".$this->wartosc1."<br>";
            echo "Wartosc2 : ".$this->wartosc2."<br>";
            echo "Wartosc3 : ".$this->wartosc3."<br>";
        }
    }

    class Rzeczywiste extends Liczby{
        public function wyswietl(){
/*            echo "Wartosc1 : ".$this->wartosc1."<br>";
            echo "Wartosc2 : ".$this->wartosc2."<br>";
            echo "Wartosc3 : ".$this->wartosc3."<br>";*/
            parent::wyswietl();
        }
    }
    $liczba1 = new Liczby();
    $liczba2 = new Rzeczywiste();



    $liczba1->wyswietl();


    echo $liczba2->wartosc1;
    echo $liczba2->wartosc2;// error
    echo $liczba2->wartosc3;//error



?>
