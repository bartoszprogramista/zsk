<!DOCTYPE html>
<html>
    <head>
        <title>Obiekty</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
        require_once("2_1_klasy.php");
        $auta = array();

        for($i =0;$i<5; $i++){
            $auta[$i] = new Samochod("Polska",4);
        }
        $auta[0]->marka = "Opel";
        $auta[0]->model = "Omega";
        $auta[1]->marka = "Fiat";
        $auta[1]->model = "126p";
                $auta[2]->marka = "Fiat";
        $auta[2]->model = "xdxd";
/*        echo "<pre>";
        print_r($auta);
        echo "</pre>"; //lepiej to wyglada dzieki pre*/
        echo "Obiekty: <br>";

        echo <<<TABLE

TABLE;


?>
        <table>
            <tr>
                <th>Marka</th>
                <th>Model</th>
                <th>Produkcja</th>
                <th>Ilosc kół</th>
            </tr>
<?php
            foreach($auta as $auto){
                if(!empty($auto->marka) &&!empty($auto->model)){
                    echo "<tr>";
                    echo "<td>$auto->marka</td>";
                    echo "<td>$auto->model</td>";
                    echo "<td>$auto->produkcja</td>";
                    echo "<td>$auto->ilosckol</td>";
                    echo "</tr>";
                }
            }
?>
        </table>
    </body>
</html>
