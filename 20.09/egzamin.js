console.log("dzzdz");

var elPierwszy = document.getElementById('pierwsza');
var elDrugi = document.getElementById('druga');

var elDodawanie = document.getElementById('dodawanie');
var elOdejmowanie = document.getElementById('odejmowanie');
var elMnozenie = document.getElementById('mnozenie');
var elDzielenie = document.getElementById('dzielenie');

var elWynik = document.getElementById('wynik');

var elPodstawa = document.getElementById('podstawa');
var elWykladnik = document.getElementById('wykladnik');
var elPoteznyPrzycisk = document.getElementById('potega');
var elWynikPotega = document.getElementById('wpotega');


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


elPoteznyPrzycisk.onclick = function(){
    elPodstawa = parseFloat(elPodstawa.value);
    elWykladnik = parseFloat(elWykladnik.value);
    console.log(elPodstawa);
    console.log(elWykladnik);

    if(isNaN(elPodstawa) || isNaN(elWykladnik)){
        elWynikPotega.innerHTML = 'prosze wprowadzic cokolwiek';

    }
    else if(elWykladnik < 0){

        elWynikPotega.innerHTML = 'wykladnik potegi musi byc dodatni';
    }
    else{
        var wynik = Math.pow(elPodstawa,elWykladnik);
        elWynikPotega.innerHTML = wynik;

    }
}




