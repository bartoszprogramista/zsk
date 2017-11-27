<?php
if(!isset($_COOKIE['zsk'])){
    session_name('zsk');
}
    session_start();
    $_SESSION['imie'] = "Filip";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sesja</title>
    </head>
    <body>
        Gitara siema <?php echo  $_SESSION['imie'];?> na stronie<br>
        Identyfikatorem sesji jest: <?php echo session_id();
        echo $_COOKIE['PHPSESSID']; ?>
        <a href="sesja2.php">nastepna strona </a>
    </body>
</html>
