console.log("dzzdz");

var elPierwszy = document.getElementById('pierwsza');
var elDrugi = document.getElementById('druga');

var elDodawanie = document.getElementById('dodawanie');
var elOdejmowanie = document.getElementById('odejmowanie');
var elMnozenie = document.getElementById('mnozenie');
var elDzielenie = document.getElementById('dzielenie');

var elWynik = document.getElementById('wynik');


elDodawanie.onclick = function(){
    elPierwszy = parseFloat(elPierwszy.value);
    elDrugi = parseFloat(elDrugi.value);
    console.log(elPierwszy);
    console.log(elDrugi);

    if (isNaN(elPierwszy) || isNaN(elDrugi)){

        elWynik.innerHTML = 'prosze wprowadzic cokolwiek';
    }

/*    else if(elPierwszy.value == 0 || elDrugi.value ==0 ){
            alert('nie dzielimy przez zero');
    }*/

    else{
        var wynik = parseFloat(elPierwszy+elDrugi);
        elWynik.innerHTML = wynik;
    }
}

elOdejmowanie.onclick = function(){
    elPierwszy = parseFloat(elPierwszy.value);
    elDrugi = parseFloat(elDrugi.value);
    console.log(elPierwszy);
    console.log(elDrugi);

    if (isNaN(elPierwszy) || isNaN(elDrugi)){

        elWynik.innerHTML = 'prosze wprowadzic cokolwiek';
    }

/*    else if(elPierwszy.value == 0 || elDrugi.value ==0 ){
            alert('nie dzielimy przez zero');
    }*/

    else{
        var wynik = parseFloat(elPierwszy - elDrugi);
        elWynik.innerHTML = wynik;
    }
}

elMnozenie.onclick = function(){
    elPierwszy = parseFloat(elPierwszy.value);
    elDrugi = parseFloat(elDrugi.value);
    console.log(elPierwszy);
    console.log(elDrugi);

    if (isNaN(elPierwszy) || isNaN(elDrugi)){

        elWynik.innerHTML = 'prosze wprowadzic cokolwiek';
    }

/*    else if(elPierwszy.value == 0 || elDrugi.value ==0 ){
            alert('nie dzielimy przez zero');
    }*/

    else{
        var wynik = parseFloat(elPierwszy * elDrugi);
        elWynik.innerHTML = wynik;
    }
}

elDzielenie.onclick = function(){
    elPierwszy = parseFloat(elPierwszy.value);
    elDrugi = parseFloat(elDrugi.value);
    console.log(elPierwszy);
    console.log(elDrugi);

    if (isNaN(elPierwszy) || isNaN(elDrugi)){

        elWynik.innerHTML = 'prosze wprowadzic cokolwiek';
    }

    else if(elPierwszy == 0 || elDrugi ==0 ){
            elWynik.innerHTML = 'nie dzielimy przez zero';

    }

    else{
        var wynik = parseFloat(elPierwszy / elDrugi);
        elWynik.innerHTML = wynik;
    }
}





