var auta = document.getElementById('auta');
var ulubioneAuto = document.getElementById('ulubioneauto');

function mojeAuto(){
    console.log('kxddd');
    ulubioneAuto.textContent = auta.value;

}
auta.addEventListener('change', mojeAuto);
