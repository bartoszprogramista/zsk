//Tworzenie obiektu za pomocą literału obiektu

var janusz = {
    wzrost : 180,
    waga : 80,
    miejsceUrodzenia : 'Poznań',
    plec : 'mężczyzna',
};  //obiekt pusty

//console.log(janusz.wzrost);
var auto ={
    marka: 'BMW',
    model: 'Dobry',
    predkosc: 221,
    wyswietl(){
       //document.write('marka: '+ auto.marka);
       document.write('marka: '+ this.marka);
    }
};
//auto.wyswietl();
//document.write(auto.wyswietl());
//**********************************************

var ksiazka = {
    tytul: 'Pan Tadeusz',
    rokWydania: 1834,
    gatunek: 'poemat epicki',
    autor: {
        imie: 'Adam',
        nazwisko: 'Mickiewicz',
        wyswitlDane(){
            return 'Imię: ' + this.imie + '<br>Nazwisko: ' + this.nazwisko;
        }
    }
};
//console.log(ksiazka['autor']['imie']);
//console.log(ksiazka.autor.imie);
//console.log(ksiazka.autor['imie']);

var klucz = 'nazwisko';
//console.log(ksiazka.autor[klucz]);
//console.log(ksiazka.autor.wyswitlDane());
//document.write(ksiazka.autor.wyswitlDane());
//**********************************************
// Tworzenie pustego obiektu
var produkt= {};
//console.log(produkt.nazwa);//undefined
//console.log(typeof(produkt.nazwa));//undefined
produkt.nazwa = 'pralka';
produkt.model = 'WAK2024PI';
produkt.firma = 'Bosch';
produkt.waga = 8;
produkt.cena = 1500;
produkt.wyswietl = function () {
    return 'Nazwa: ' +this.nazwa + '<br>Model ' + this.model + '<br>Cena: ' + this.cena;
}

console.log(typeof(produkt.nazwa)); // string
console.log(typeof(produkt.waga)); // number
console.log(typeof(produkt.wyswietl)); // function
//************************************************
//************************************************

//konstruktor object

//var tab = new Array();
 var hotel= new Object();
hotel.nazwa = 'Hotel Poznań';
hotel.pokoje = 50;
hotel.zarezerwowanePokoje = 35;
hotel.silownia = true;
hotel.basen = true;
hotel.rodzajPokoju = ['pojedyncze', 'podwójne', 'apartament'];
hotel.wolnePokoje = function(){
    return this.pokoje - this.zarezerwowanePokoje;
}

console.log('Wolne pokoje: '+ hotel.wolnePokoje());

//**************************************************
function Hotel (nazwa, pokoje , zarezerwowanePokoje, silownia, basen, rodzajPokoju){
    this.nazwa = nazwa;
    this.pokoje = pokoje;
    this.zarezerwowanePokoje = zarezerwowanePokoje;
    this.silownia = silownia;
    this.basen = basen;
    this.rodzajPokoju = rodzajPokoju;
    this.wolnePokoje = function(){
        return this.pokoje - this.zarezerwowanePokoje;
    }
    this.wyswietl = function(){
        return 'Nazwa: '+ this.nazwa + '<br> Liczba pokoi: ' + this.pokoje + '<br> Pokoje zarezerwowane: '+ this.zarezerwowanePokoje + '<br>Siłownia: ' + this.silownia + '<br>Basen: '+ this.basen + '<br>Rodzaje pokojów: '+this.rodzajPokoju + '<br>Wolne pokoje: ' + this.wolnePokoje();
    }
}


//zad dom metodę wyświetl z konstruktora hotel, zastosuj tablice do wyświtlania wartości
function Hotel2 (nazwa, pokoje , zarezerwowanePokoje, silownia, basen, rodzajPokoju){
    this.tabela = [];
    this.tabela[0] = nazwa;
    this.tabela[1] = pokoje;
    this.tabela[2] = zarezerwowanePokoje;
    this.tabela[3] = silownia;
    this.tabela[4] = basen;
    this.tabela[5] = rodzajPokoju;
    this.tabela[6] = this.tabela[1] - this.tabela[2];
    this.wyswietl = function(){
        return this.tabela;
    }
}
var HotelLech = new Hotel2('Lech', 100, 30, true, false, ['jednoosobowy', 'apartament']);
//document.write(HotelLech.wyswietl());


function Osoba(imie, nazwisko, wiek,plec){
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;
    this.plec = plec;
    this.narodowosc = 'Polska';
}

var czarek = new Osoba('czarek', 'kowal',15,'m');
console.log(czarek.imie);


// utwórz konstruktor pies o parametrach imie rasa waga oraz ulubione zajęcia(wiele wartosci), utwórz 3 obiekty o nazwach azor edi saba

function Pies(imie, rasa, waga, uluZajecie =[]){
    this.imie = imie;
    this.rasa = rasa;
    this.waga = waga;
    this.uluZajecie = uluZajecie;
}

var azor = new Pies('azor', 'owczarek', 7, ['drapac sie','biegać']);
var edi = new Pies('edi', 'owczarek niemiecki', 10, ['drapac sie','uczyć sie']);
var saba = new Pies('saba', 'owczarek szwedzki', 30, ['robić zadania','biegać']);
/*console.log(azor);
console.log(edi);
console.log(saba);*/


var psy = [azor, edi, saba];
//console.log(psy);

edi['uluZajecie'].push('sssss');
//console.log(edi.uluZajecie);


for(var i = 0; i<psy.length;i++){

    if(psy[i].waga <=10)
        psy[i].rozmiar = 'maly pies';
    else
        psy[i].rozmiar = 'duzy pies';
    document.write('Pies: ' + '<span style="color:blue">' + psy[i].imie +  '</span>' + ' to ' + psy[i].rozmiar + '<br>');
}
console.log(psy);





var tab = ['jan', 'nowak','Poznań'];
for(var i in tab){
    document.write(i+ '-'+ tab[i]+'<br/>');
}
// wyswietla tylko imie i rase psa
/*for(var x in edi){
    if(x == 'imie' || x =='rasa'){
        document.write(edi[x]);
    }
}*/
// sprawdza ile parametrów ma pole
// *****************************************************
function Pole(a,b,c,d){
    return a*b;
}
console.log(Pole.length);
console.log(Pole.constructor);
console.log(Pole.prototype);

function Uczen(imie,nazwisko){
    this.imie = imie;
    this.nazwisko = nazwisko;
}
var janusz = new Uczen('Janusz','Nowak');
Uczen.prototype.narodowosc = 'polska';
Uczen.prototype.wyswietl = function(){
    return 'Imie: '+ this.imie + 'Nazwisko: '+this.nazwisko+ 'Narodowość '+ this.narodowosc;
}
document.write(janusz.wyswietl());
document.write('<br/>'+janusz.constructor);
document.write('<br/>'+janusz.constructor.prototype.narodowosc);

// ****************************************
//utwórz konstruktor rower, który ma 2 parametry nazwa oraz kolor, utwórz prototyp ilość kół który ma wartość 2
// utwórz metodę wyświetlającą wszystkie dane za pomocą for in

function Rower(nazwa, kolor){
    this.nazwa = nazwa;
    this.kolor = kolor;
}
var rower1 = new Rower('zajebisty','czerowny');
console.log(rower1);

Rower.prototype.kola = 2;
Rower.prototype.wypisz = function(){
    for(var i in this){
        if(this.i == 'nazwa' || this.i =='kolor'|| this.i =='kola'){
        document.write(this[i]);
    }
}
}
document.write(rower1.wypisz());

//************************
console.log(janusz.hasOwnProperty('imie')); // true
console.log(janusz.hasOwnProperty('narodowosc')); //false










