<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Otwieranie w chuj</title>
    </head>
    <body>
        <?php
            echo "Wolne miejsce na partycji(bajty)<br>";
            $wolneMiejsce = round(((disk_free_space('/'))/(1024*1024)),2)."MB<br>";
            echo $wolneMiejsce;
            echo "Wielkość partycji<br>";
            $partycja = round(((disk_total_space('/'))/(1024*1024)),2)."MB<br>";
            echo $partycja;

            if(!$fd = fopen("./test/matura.txt", 'rb')){
                echo "nie moge otworzyc pliku";
            }else{
                $rozmiar = filesize("./test/matura.txt");
                $tekst = fread($fd, $rozmiar);
                fclose($fd);
            }
        ?>

        <form>
            <textarea name="area">
            <?php
                echo $tekst;
            ?>
            </textarea>
            <input type="submit" name="przycisk" value="Zapisz"/>
        </form>
        <?php
        if(isset($_GET['przycisk'])){
            $nowyTekst = $_GET['area'];
            echo $nowyTekst;
            if($fd = fopen("./test/matura.txt", 'wb')){
                if(fwrite($fd, $nowyTekst)===false ){
                    echo "Błąd zapisu";
                }else{
                    echo "cośtam";
                }
            }else{
                echo "Nie moe otworzyćpliku o nazwie matura.txt";
            }
        }
        ?>

    </body>
</html>
