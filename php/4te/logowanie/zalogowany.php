<?php
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logowanie</title>
    </head>
    <body>
        <?php
            if(!isset($_SESSION['zalogowany'])){
                header('location:logowanie.php');
            }


        ?>
        <h2>Zalogowany do systemu jako użytkownik</h2>
        <?php

            echo $_SESSION['login'];
            echo " <a href=\"wyloguj.php?wyloguj=\">Wyloguj mnie</a>";
        ?>

    </body>
</html>
