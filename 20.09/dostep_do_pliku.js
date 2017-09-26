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



























