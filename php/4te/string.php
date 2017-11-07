<?php

echo <<<FORM

    <form method="post">

        <input type="text" name="dane"><Br>
        <input type="submit">

    </form>


FORM;

    if(isset($_POST['dane'])){
        $dane = $_POST['dane'];
        $niedozwolone = array("czarny", "biały");
        $zamiana = "#$******";
        $poprawne = str_ireplace($niedozwolone, $zamiana, $dane);
        echo $poprawne;
    }











?>
