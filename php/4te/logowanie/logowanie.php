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
        <h2>Logowanie do systemu</h2>
        <?php
            if(isset($_SESSION['blad'])){
                echo $_SESSION['blad'];
            }
            if(isset($_SESSION['zalogowany'])){
                header('location:zalogowany.php');
            }

        ?>
        <form method="post" action="sprawdz.php">
            <input type="text" name="login" placeholder="login"><br>
            <input type="password" name="haslo"><br>
            <input type="submit" value="Zaloguj" name="przycisk">

        </form>
    </body>
</html>
