<?php
    $dni = 30;
if(!isset($_COOKIE['licznik'])){
    $licznik = 1;
}else{
    $licznik = intval($_COOKIE['licznik']); // intval - rzutowanie typu
    $licznik++;
}

setcookie('licznik',"$licznik",time()+60*60*24*$dni);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>cookie</title>
    </head>
    <body>
        <?php
        if($licznik ==1){
            echo "liczba odwiedzin w ciąg uostatnich $dni dni :<span style\"color:red\">$licznik</span> raz";
        }else{
            echo "liczba odwiedzin w ciąg uostatnich $dni dni :<span style\"color:red\">$licznik</span> razy";
        }



        ?>
        <form action="cookie3.php">
            <input type="submit" name="usun" value="usuń">

        </form>
        <?php
            if(isset($_GET['usun'])){
                setcookie('licznik','time()-100');
            }

        ?>


    </body>
</html>
