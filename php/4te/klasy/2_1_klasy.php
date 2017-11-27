<?php

    class Samochod{
        public $marka, $model, $produkcja,$kola;

        function __construct($panstwo,$kola){
            $this->produkcja = $panstwo;
            $this->ilosckol = $kola;
        }
        public function ustawMarke(){
            $this->marka = $wartosc;
        }
        public function pobierzMarke(){
            return $this->marka;
        }
        public function ustawModel(){
            $this->model = $wartosc;
        }
        public function pobierzModel(){
            return $this->model;
        }
        public function wyswietl(){
            echo <<<WYSWIETL
            Marka: $this->marka<br>
            Model: $this->model <br>
            Panstwo: $this->produkcja <br>


WYSWIETL;
        }
        public function wyswietlForeach(){
            echo "<ul>";
            foreach($this as $klucz => $wartosc){
                echo "<li> $klucz : $wartosc </li>";
            }
            echo "</ul>";

        }
    }











?>
