<?php
    $id = $_GET['id'];
    echo $id;
    $polaczenie = new mysqli('localhost','root','','przychodnia4te');

    if(!$polaczenie->connect_errno){
        $sql =  "DELETE FROM pacjenci WHERE pacjenci.id = $id";

        if($rezultat = $polaczenie->query($sql)){
            $polaczenie->close();
            header('location:./pacjent.php');
            //echo "Usunięto osobęo id= ".$id;
        }

    }else{
        echo "błąd połączenia";
        $polaczenie->close();
    }


?>
