<?php

// instrukcja if

$x = 2 ;
$y = 4;
if($x<$y){
    echo "Zmienna x jest mniejsza od zmiennej y <br>";
}

if($x < $y):
    echo "Zmienna x jest mniejsza od zmiennej y<br> ";
endif;

// instrukcja if else
$a = 2;
$b = 2;

if($a < $b){
    echo "Zmienna a jest mniejsza od zmiennej b<br>";
}else{
    echo "Zmienna a nie jest mniejsza od zmiennej b<br>";
}

if($a < $b):
    echo "Zmienna a jest mniejsza od zmiennej b<br>";
else:
    echo "Zmienna a nie jest mniejsza od zmiennej b<br>";
endif;

// instrukcja if... else if

if($a< $b){
    echo "Zmienna a jest mniejsza od zmiennej b<br>";
}elseif($a==$b){
    echo "Zmienna a jest równa  zmiennej b<br>";
}else{
    echo "Zmienna a nie jest mniejsza od zmiennej b<br>";
}

if($a < $b):
    echo "Zmienna a jest mniejsza od zmiennej b<br>";
elseif($a ==$b):
    echo "Zmienna a jest równa  zmiennej b<br>";
else:
    echo "Zmienna a nie jest mniejsza od zmiennej b<br>";
endif;


// instrukcja switch

$a = 5;
switch($a){
    case 0:
        echo "zmienna a =0 <br/>";
        break;
    case 5:
        echo "zmienna a =5 <br/>";
        break;
    case 10:
        echo "zmienna a =10 <br/>";
        break;

}
$a = 10;
switch($a):
    case 0:
        echo "zmienna a =0 <br/>";
        break;
    case 5:
        echo "zmienna a =5 <br/>";
        break;
    case 10:
        echo "zmienna a =10 <br/>";
        break;

endswitch;

// pętla for

for($i =1; $i<=10; $i++){
    echo "$i ";
}
echo "<br>";

for($i =1; $i<=10; $i++):
    echo "$i ";
endfor;
echo "<br>";

// foreach

$tab = array(1,2,3,4,5);

foreach($tab as $klucz => $wartosc){
    echo "$tab[$klucz] = $wartosc ";
}
echo "<br>";

foreach($tab as $klucz => $wartosc):
    echo "$tab[$klucz] = $wartosc ";
endforeach;

// pętla while

$i = 3;
echo "<br>";
while($i <= 10){
    echo "$i ";
    $i++;
}

echo "<br>";
while($i <= 20):
    echo "$i ";
    $i++;
endwhile;
echo "<br>";

// break

for($i =1; ; $i++):
    echo "Zmienna i wynosi: $i <br>";
    if($i ==5):
        break;
    endif;
endfor;

// continue

for($i = 1; $i<10; $i++):
    if($i%2 != 0)
        continue;
    echo "$i ";
endfor;
































?>
