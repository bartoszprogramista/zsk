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
        elKomunikat.textContent = 'adresy poczty są różne';
        elPass1.disabled = false;
        elPass1.focus();
        elPass1.value = '';
        this.value = '';
        this.disabled = true;
    }else{
        this.disabled= true;
        elKomunikat.textContent = '';
    }
}
function blokuj2(){
    elPass2.disabled = false;
    elPass2.focus();
    this.disabled = true;

}

function sprawdzRegulamin(){
    if(elRegulamin.checked == true){
        elPrzycisk.disabled == false;
    }else{
        elPrzycisk.disabled ==true;
    }
}
function odblokuj(){
    var zablokowane = document.getElementsByTagName('input');
    if(zablokowane.length>0){
        for(var i =0; i< zablokowane.length; i++){
            if(zablokowane[i].disabled == true){
                zablokowane[i].disabled =false;
            }
        }
    }
}

function wyslij(){
    var puste =false;
    var input = document.querySelectorAll('input');
    for(var i=0; i<input.length;i++){
        if(input[i].value == ''){
            puste = true;
            break;
        }
    }
       if(puste){
           elKomunikat.textContent = 'Wypełnij pola';

       }else{
            document.write('<div>');
            document.write('imie: '+ elImie.value + '<br/>');
            document.write('nazwisko: '+ elNazwisko.value + '<br/>');
            document.write('login: '+ elLogin.value + '<br/>');
            document.write('mail: '+ elEmail1.value + '<br/>');
            document.write('data urodzenia : '+ elData.value + '<br/>');
            document.write('</div>');
       }

}

elImie.addEventListener('blur',sprawdz);
elNazwisko.addEventListener('blur',sprawdz);
elLogin.addEventListener('blur',sprawdz);

elEmail1.addEventListener('blur',blokuj);
elEmail2.addEventListener('blur',mail);

elPass1.addEventListener('blur',blokuj2);
elPass2.addEventListener('blur',haslo);

elRegulamin.addEventListener('change', sprawdzRegulamin);
elPopraw.addEventListener('click',odblokuj);
elPrzycisk.addEventListener('click', wyslij);



































