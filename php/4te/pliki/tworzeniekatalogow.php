<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pliki i foldery</title>
    </head>
    <body>
        <form>
            <h4>DOdaj folder</h4><br>
            <input type="text" name="folder">
            <input type="submit" name="przyciskF" value="Doddaj folder">
            <h4>DOdaj plik</h4><br>
            <input type="text" name="plik">
            <input type="submit" name="przyciskP" value="Doddaj plik">

        </form>

    <?php
        if(isset($_GET['usunF'])){
            $usun = $_GET['usunF'];
            if(file_exists("./test/$usun")){

                rmdir("./test/$usun");
            }
        }
        if(isset($_GET['usunP'])){
            $usun = $_GET['usunP'];
            if(file_exists("./test/$usun")){

                unlink("./test/$usun");
            }
        }


        if(isset($_GET['przyciskF']) && !empty($_GET['folder'])){
            $folder = $_GET['folder'];
            if(!file_exists("./test/$folder")){
                mkdir("./test/$folder");

            }else{
                echo "folder o nazwie $folder już istnieje<br>Podaj inną nazwę";
            }
        }
        if(isset($_GET['przyciskP'])&& !empty($_GET['plik'])){
            $plik = $_GET['plik'];
            if(!file_exists("./test/$plik")){
                if($fd = fopen("./test/$plik",'w')){
                    if(file_exists("./test/$plik")){
                        echo "Dodano plik o nazwie $plik";
                    }
                    fclose($fd);
                }
            }else{
                echo "<h3>Plik o nazwie $plik już istnieje</h3>";
            }
        }




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
            echo "<li>$wartosc<a href=\"tworzeniekatalogow.php?usunP=$wartosc\">Usuń</a></li>";
        }
        echo "</ul>";
        echo "</p><hr>";

        echo "<p>Katalogi: <br>";
        echo "<ul>";
        foreach($katalogi as $wartosc){
            echo "<li>$wartosc<a href=\"tworzeniekatalogow.php?usunF=$wartosc\">Usuń</a></li>";
        }
        echo "</ul>";
        echo "</p><hr>";


    ?>
    <a href="tworzeniekatalogow.php?sortuj=0">Sortuj rosnąco</a>
    <a href="tworzeniekatalogow.php?sortuj=1">Sortuj malejąco</a>

    </body>
</html>
