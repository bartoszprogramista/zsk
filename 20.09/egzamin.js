console.log("dzzdz");

var elPierwszy = document.getElementById('pierwsza');
var elDrugi = document.getElementById('druga');

var elDodawanie = document.getElementById('dodawanie');
var elOdejmowanie = document.getElementById('odejmowanie');
var elMnozenie = document.getElementById('mnozenie');
var elDzielenie = document.getElementById('dzielenie');

var elWynik = document.getElementById('wynik');

elDodawanie.onclick = function(){
    if(elPierwszy.value == '' || elDrugi.value =='' ){
        elWynik.innerHTML = 'prosze wprowadzic cokolwiek';
    }
    else{
        var wynik = parseFloat(elPierwszy+elDrugi);
        elWynik.innerHTML = wynik;
    }
}
