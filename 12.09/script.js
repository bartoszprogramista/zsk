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
    var promien = document.form.promien.value;
    var pole = promien * promien * Math.PI;
    var objetosc = 2 * promien * Math.PI;
    var wynik = document.getElementById("wynik");
    wynik.textContent = "pole = "+ pole+ " objetosc = "+ objetosc;
}
