/*function poleObjetosc(szerokosc, dlugosc, wysokosc)
{
    var pole = szerokosc * dlugosc;
    var objetosc = pole * wysokosc;
    var wynik = [pole, objetosc];
    return wynik;
}

var a = prompt("podaj szerokosc");
var b = prompt("podaj długość");
var c = prompt("podaj wysokość");

var x=prompt("podaj wartosc","0 pole, 1 objetosc");


var poleProstokata = poleObjetosc(a,b,c)[x];
//[] zwraca okreslony element tablicy
console.log(poleProstokata);*/

//napisać program, który oblicza obwód, pole koła oraz objętość stożka. dane uzytkownik podaje z klawy, wykorzystaj obiekt math. uzytkownik wybiera za pomocą pola radio button co chce obliczyc



function funkcja()
{
    if(document.getElementById("1").checked)
    {
        kolo();
    }
    else if(document.getElementById("2").checked)
    {
        stozek();
    }
    else
        document.write("gówno");
};

function kolo()
{

    var promien = document.form.promien.value;
    var pole = parseFloat(promien * promien * Math.PI).toFixed(2);
    var objetosc = parseFloat(2 * promien * Math.PI).toFixed(2);
    var wynik = document.getElementById("wynik");
    wynik.textContent = "pole = "+ pole+ " objetosc = "+ objetosc;
};

function stozek()
{
    console.log("no elo");
    var promien =document.form.promiens.value;
    var wysokosc = document.form.wysokoscs.value;
    var costam = parseFloat((1/3) * Math.PI * promien*promien * wysokosc).toFixed(2);
    var wynik = document.getElementById("wynik");
    wynik.textContent = "stozek : "+costam;
};

