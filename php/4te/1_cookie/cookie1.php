<?php
if(!isset($_COOKIE['szkola'])):
    setcookie('szkola','zsk');
    $komunikat = "Cookie o nazwie szkola nie bylo ustawione<br>";
else:
    $komunikat = "Cookie o nazwie szkola jest ustawione<br>";
    $komunikat.="".$_COOKIE['szkola'];
endif;


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>cookie</title>
    </head>
    <body>
        <?php
            echo $komunikat;


        ?>



    </body>
</html>
