<?php
    require_once("2_1_klasy.php");
    require_once("2_1_klasy.php"); // pozwala kilka razy załadować dany plik z klasą

    $auto1 = new Samochod("Polska");
    $auto1->marka = "Ferrari";
    $auto1->model = "F430";

   $auto1->wyswietl();
   $auto1->wyswietlForeach();








?>
