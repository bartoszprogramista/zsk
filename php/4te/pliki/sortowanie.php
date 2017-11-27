<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pliki i foldery</title>
    </head>
    <body>
    <?php
        $dir = "./test";
        if(!($folder = opendir($dir))){
            exit("Nie można otworzyć folderu");
        }else{
            $sortuj = 0;
            if(isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
            }
            $pliki = array();
            $katalogi = array();
            $dane = scandir($dir, $sortuj);

            echo "<ul>";
            foreach($dane as $wartosc){
                if($wartosc != "." && $wartosc !=".."){
                    echo "<li>$wartosc </li>";
                }
            }
            echo "</ul>";
        }
        closedir($folder);
    ?>
    <a href="sortowanie.php?sortuj=0">Sortuj rosnąco</a>
    <a href="sortowanie.php?sortuj=1">Sortuj malejąco</a>

    </body>
</html>
