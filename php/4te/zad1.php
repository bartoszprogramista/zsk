<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kakak</title>
    </head>
    <body>
        Zad 1
        <form action="" method="get">
            Tekst <input type="text" name="pole1">
            Szukany <input type="text" name="pole2">
            <input type="submit">



        </form>


    </body>
<?php

$tekst =$_GET['pole1'];
$tekstSzukany =$_GET['pole2'];



function licz($tekst, $tekstSzukany){

    $szukaj = substr_count($tekst, $tekstSzukany);
    echo "Liczba powtórzen wynosi: $szukaj";


}
licz($tekst, $tekstSzukany);

?>
</html>
