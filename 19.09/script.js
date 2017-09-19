var pi = Math.PI;
console.log(pi);


/*var x = prompt("odaj wartosc");
console.log(Math.sqrt(x));*/

var a = 13.2;
var b = -28.5;
var c = 1;

var minimalna = Math.min(a,b,c);
console.log(minimalna);

var maksymalna = Math.max(a,b,c);
console.log(maksymalna);

var zaokroglenie = Math.round(b);

console.log(zaokroglenie);

//abs, round, floor

var x = -56;
var y = -13.1;
var z = 14.9;

document.write("<br/>"+ Math.abs(x) + "<br/>");
document.write("<br/>"+ Math.abs(y)+ "<br/>");
document.write("<br/>"+ Math.abs(z)+ "<br/>");

document.write("<br/>"+ Math.round(x) + "<br/>");
document.write("<br/>"+ Math.round(y)+ "<br/>");
document.write("<br/>"+ Math.round(z)+ "<br/>");

document.write("<br/>"+ Math.floor(x) + "<br/>");
document.write("<br/>"+ Math.floor(y)+ "<br/>");
document.write("<br/>"+ Math.floor(z)+ "<br/>");




//potęgowanie


var p = Math.pow(2,10);
console.log(p);


//losowanie

var losuj = Math.random();
console.log(losuj);

var k = 3.343553523454;
k = k.toFixed(2);
document.write(k + "<br/>");
console.log(typeof(k));



var j = 3.343553523454;
console.log(typeof(j));
j = j.toPrecision(2);
document.write(j);
console.log(typeof(j));


//losowanie
//losuj z przedzialu 0,10

var l = Math.floor(Math.random()*11);
console.log(l);

//losuj liczbe z przedzialu od 90 do 100

var l = Math.floor(Math.random()*11 + 90);
console.log(l);














































































