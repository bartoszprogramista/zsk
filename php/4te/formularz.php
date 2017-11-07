<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formularz</title>
    </head>
    <body>
<!-- formularz nr 1
<form action="dane.php" method="get">
            Imię <input type="text" name="imie"><br>
            Nazwisko <input type="text" name="nazwisko"><br>
             <input type="submit"><br>

        </form>-->
<!--
     FROMULARZ NR 2
            <form action="dane.php" method="post">
            Imie<input type="text" name="login"><br>
            Hasło<input type="password" name="haslo"><br>
            <input type="submit" value="dawai">
        </form>-->
<!--
    FORMULARZ NR 3
            <form method="get" action="dane.php">
            <input type="radio" name="kolor" value="biały">biały<br>
            <input type="radio" name="kolor" value="Zielony">Zielony<br>
            <input type="radio" name="kolor" value="niebieski">niebieski<br>
            <input type="radio" name="kolor" value="czerwony">czerwony<br>
            <input type="submit" value="dawai">

        </form>-->
        <form method="get" >
            <input type="radio" name="kolor" value="biały">biały<br>
            <input type="radio" name="kolor" value="Zielony">Zielony<br>
            <input type="radio" name="kolor" value="niebieski">niebieski<br>
            <input type="radio" name="kolor" value="czerwony">czerwony<br>
            <input type="submit" value="dawai">

        </form>
        <?php
            if(isset($_GET['kolor'])){
                echo "zanaczyłeś kolor: {$_GET['kolor']} ";
            }else{
                echo "hehe";
            }

        ?>
    </body>
</html>
