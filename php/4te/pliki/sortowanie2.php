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

            $pliki = array();
            $katalogi = array();

            $sortuj = 0;
            if(isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
            }


            $dane = scandir($dir, $sortuj);


            foreach($dane as $wartosc){
                if($wartosc != "." && $wartosc !=".."){
                    if(is_file($dir."/".$wartosc)){
                        $pliki[] = $wartosc;
                    }else{
                        $katalogi[] = $wartosc;
                    }

                }
            }

        }

        closedir($folder);
        if(isset($_GET['sortuj'])){
            $sortuj = $_GET['sortuj'];
            if($sortuj ==0){
                sort($pliki);
                sort($katalogi);
            }else{
                rsort($pliki);
                rsort($katalogi);
            }
        }
        echo "<p>pliki: <br>";
        echo "<ul>";
        foreach($pliki as $wartosc){
            echo "<li>$wartosc</li>";
        }
        echo "</ul>";
        echo "</p><hr>";

        echo "<p>Katalogi: <br>";
        echo "<ul>";
        foreach($katalogi as $wartosc){
            echo "<li>$wartosc</li>";
        }
        echo "</ul>";
        echo "</p><hr>";


    ?>
    <a href="sortowanie2.php?sortuj=0">Sortuj rosnąco</a>
    <a href="sortowanie2.php?sortuj=1">Sortuj malejąco</a>

    </body>
</html>
