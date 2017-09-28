console.log('elo');
//metoda getElementById()

var elPierwszy = document.getElementById('pierwszy');
elPierwszy.className = 'niebieski';

//Metoda getElementByTagName()

var elNaglowek = document.getElementsByTagName('h1');
if(elNaglowek.length >0){
//    console.log(elNaglowek.length);
    console.log(elNaglowek);
    elNaglowek[0].className = 'czerwony';

}

//Metoda getElementByClassName

var czerwony = document.getElementsByClassName('czerwony');
if(czerwony.length > 0){
    console.log(czerwony.length);
    console.log(czerwony);
    var ostatni = czerwony[czerwony.length - 1];
    ostatni.className = 'niebieski';

}

//Metoda querySelector ->> zwraca pierwsze dopasowanie

var elTv = document.querySelector('li.grey');
console.log(elTv.length);

var elTv1 = document.getElementById('tv1');
elTv1.className = 'niebieski';

//metoda querySelectorAll

var elTvAll = document.querySelectorAll('li.grey');
console.log(elTvAll.length);
elTvAll[2].className = 'niebieski';

//metoda getElementsByName
//dodać przycisk, ktory zmieni wszystkie elementy tv tablicy na niebieski


/*var elPrzycisk = document.getElementById('przycisk');

elPrzycisk.onclick = function(){
    var elchuj = document.getElementsByName('tv');
    for(var i = 0; i<elchuj.length;i++)
        {
            elchuj[i].className = 'niebieski';
        }
};*/

//wykonaj za pomoca foreach poprzednie zadanie
var elPrzycisk = document.getElementById('przycisk');
var elTvZmien = document.getElementsByName('tv');

/*
function zmien(element, index)
{
    elTvZmien[index]xddddddddddddddddddddddd;

}
*/



elPrzycisk.onclick = function(){


    elListTv.forEach
}

//cd. z 27.09

var poczatekElement = document.getElementById('s2');
var poprzedniElement= poczatekElement.previousElementSibling;
/*var poprzedniElement= poczatekElement.previousSibling; nie działa xd w chujj*/
var nastepnyElement = poczatekElement.nextElementSibling;

poczatekElement.className = 'niebieski';
poprzedniElement.className = 'niebieski';
nastepnyElement.className = 'niebieski';


//firstChild, LastChild

var lista = document.getElementsByTagName('ul')[1];
console.log(lista);

var pierwszy = lista.firstElementChild;
var ostatni = lista.lastElementChild;

pierwszy.setAttribute('class','grey');
ostatni.setAttribute('class','grey');

//zamień pierwszy element input na button i przypisz wartosć wyślij

var text = document.getElementsByTagName('input')[0];
console.log(text);

text.setAttribute('type','button');
text.setAttribute('value','Wyślij'); //lub text.value = 'Wyślij';


//tekst www łączy ze stroną szkoły zsk
var link = document.getElementById('link');
link.setAttribute('href', 'http://www.zsk.poznan.pl/');





















