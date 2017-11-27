console.log('xdd');

var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elEmail1 = document.getElementById('mail1');
var elEmail2 = document.getElementById('mail2');
var elPass1 = document.getElementById('haslo1');
var elPass2 = document.getElementById('haslo2');
var elRegulamin = document.getElementById('regulamin');
var elData = document.getElementById('data');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elKomunikat = document.getElementById('komunikat');

elKomunikat.style.color = 'red';

//onload
/*window.onload = function(){
    alert('czwarta te e');


}*/

/*elImie.onblur = function(){
    if(elImie.value.length > 2  && elImie.value.length<10)
       elKomunikat.textContent = '';
    else
        elKomunikat.textContent = 'Błędne dane';
}*/

function sprawdz(){
        if(this.value.length > 2  && this.value.length<10)
       elKomunikat.textContent = '';
    else{
        elKomunikat.textContent = 'Błędne dane';
        this.focus();
    }
}
function mail(){
    if(elEmail1.value != elEmail2.value){
        elKomunikat.textContent = 'adresy poczty są różne';
        elEmail1.focus();
        elEmail1.value = '';
        this.value = '';
        this.disabled = true;
    }else{
        elEmail2.disabled= true;
        elKomunikat.textContent = '';
    }
}
function blokuj(){
    elEmail2.disabled = false;
    elEmail2.focus();
    this.disabled = true;

}
function haslo(){
    if(elPass1.value != elPass2.value){
        elKomunikat.innerHTML = 'hasla sa rozne';


    }else{
        elKomunikat.innerHTML = 'hasla takie same';
    }
}


elImie.addEventListener('blur',sprawdz);
elNazwisko.addEventListener('blur',sprawdz);
elLogin.addEventListener('blur',sprawdz);

elEmail1.addEventListener('blur',blokuj);
elEmail2.addEventListener('blur',mail);

elPass2.addEventListener('blur',haslo);



































