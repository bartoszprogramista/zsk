console.log("dupa");

//petla for *************************************************************************

for( var i = 0; i<10; i++)
    {
        document.write(i + "<br/>");
        if(i==5)
            break;
    }

//losuj 100 liczb z przedzialu 50,200 *********************************

for(var i=0; i<100; i++)
    {
        document.write(Math.floor(Math.random()*151+ 50) +"<br/>");

    }

// wyswietlic 1,10 ; 1-9 przecinek 10 kropka ***************************************
for(var i = 1; i<=10; i++)
    {
        if(i<=9)
            document.write(i+",");
        if(i==10)
            document.write(i+". <br/>");
    }

//while **********************************************************************

var i = 0;
while(i++ < 5)
    {
        document.write(i+"<br/>");
    }

//uzytkownik wykonuje dane z klawy, petla tak dlugo sie wykonuje aż x >= y


/*var x =0, y =0;
while(x >=y )
    {
        x = Number(prompt("podaj x"));
        y = prompt("podaj y");
    }
        document.write('x = '+ x + 'y = '+ y);
    console.log(typeof(x));
    console.log(typeof(y));*/


//DO WHILE ****************************************************
/*
var wiek;

    do
    {
        wiek = prompt('podaj wiek');
        if(wiek=='19')
            document.write('mozesz juz grac w lola');
    }while( wiek!=19)*/


//wykorzystaj petle for i do while: podaj 5 liczb podzielnych przez 2 z klawiatury, zapisz je do tablicy i wyswietl w konsoli tablice

/*
var tablica = [];
var x;
for(var i =0; i<=4; i++)
    {
        do{
            x = prompt('podaj liczbe ');
            x = parseInt(x);


        }while(x%2 !=0)
        tablica[i] = x;

    }
console.log(tablica);*/

//uzytkownik podaje z klawy liczbe, zabezpiecz przed podaniem litery, znaku specjalnego
/*

document.write('<input type="text" id="liczba">');
document.write('<button id="przycisk">Dawai</button>');

var elPrzycisk = document.getElementById('przycisk');
var elLiczba = document.getElementById('liczba');

elPrzycisk.onclick = function(){
    if(!isNaN(elLiczba.value))
        {
            console.log(elLiczba.value);
        }
}
*/


// FOREACH ********************************************************



var tab = ['Małysz', 'Jaca', 'Daniel', 'Gosia'];
/*
for(var i= 0; i<tab.length; i++)
    {
        document.write(tab[i]+' ');
    }
*/


/*
function p(a,b)
{
    document.write(a + b +'<br/>');
}
tab.forEach(p);


function xddd(wartosc, indeks)
{
    document.write(indeks + 1+ 'element tablicy wynosi');
    document.write(wartosc + '<br>');
}
tab.forEach(xddd);
*/


/*
var elPI = document.getElementById('pi');
var elNic  = document.getElementById('nic');
var elPrzycisk =document.getElementById('przycisk');
var elWynik = document.getElementById('wynik');

elPrzycisk.onclick = function (){
    if(elPI.checked){
        elWynik.innerHTML = Math.PI;
    }
    else if(elNic.checked)
        elWynik.innerHTML = 'nic';
    else
        elWynik.innerHTML= 'nic nie wybrales';
}


*/




//ZAD DOM
//uzytkownik podaje z klawiatury login i haslo  w formularzu, jesli login to filip, a hasło to Okoń@123 to na ekranie wyslwietli w kolorze czerwonym poprawne hasło, jeśli hasło będzie błędne to w kolorze zielonym. Uzytkownik ma 3 próby na 3.

/*
var elRezultat = document.getElementById('rezultat');
var elPrzycisk =document.getElementById('przycisk');
var i= 1;
function funkcja()
{
    var login = document.form.login.value;
    var haslo = document.form.haslo.value;


        if(i==3)
        {
            alert('brak mozliwosci dalszego logowania');

        }
        if(login =='filip' && haslo == 'Okoń@123')
            {
                elRezultat.innerHTML = '<font color="red">'+ haslo + '</font>';

            }
         else
            {

            for(; i <=3;i++)
                {
                    elRezultat.innerHTML = '<font color="green">'+ haslo + '</font>';
                    alert(i + 'proba nieprawidlowa');
                    console.log(i);
                    i++;
                    return i;
                    console.log(i);
                }

            }
}

*/



















































