console.log('heha');
// Wyrażenia reguarne

var text = 'testtest';
//var regEx = /szkół/; false
//var regEx = /Szkół/; //true
//var regEx = /szkół/i; //true pomija wielkosc
//var regEx = /^szkół/i;  //false
//var regEx = /szkół$/i; //false
//var regEx = /^szkół$/i; //false
//var regEx = /[a-z]/; //true, kiedy duze false
//var regEx = /[A-z]/; //true
//var regEx = /[ąęćźżółńś][a-z]/; //true
//var regEx = /[ąęćźżółńś]|[a-z]/; //true
//var regEx = /^[ąęćźżółńś][a-z]/; //false
//var regEx = /[a-z]\s/; //true
//var regEx = /\s[a-z]/; //false
//ar regEx = /[a-z]+@/; //true
//var regEx = /@/; //true
//var regEx = /^mąk[a]?@/; //false
//var regEx = /[a]/; //true
//var regEx = /[a]{1}/; //true
//var regEx = /^[a]{1}/; //true
//var regEx = /^[a]{1}$/; //true jezeli bedzie wiecej liter to false
//var regEx = /^[a]{2,4}$/; //true sprawdza ile liter a moze byc min 2 i max 4)
//var regEx = /^[a]{2,}$/; //true min 2 litery a
//var regEx = /\//; //true sprawdza czy jest '/'
//var regEx = /\s/; //true sprawdza czy jest spacja
//var regEx = /\S/; //false negacja \s
//var regEx = /\./; //true
//var regEx = /\.pl/; //true
//var regEx = /\.[a-z]{2}/; //true
//var regEx = /\w/; //true \w dowolny w chuj
//var regEx = /\W/; //true \W negacja \w
//var regEx = /\d/; //true sprawdza czy sa liczby
//var regEx = /\D/; //false wszystko oprócz cyfr
//var regEx = /test/; //true
//var regEx = /(test)/; //true
//var regEx = /(test){1}/; //true
var regEx = /(test){2}/; //false, jezeli wpiszemy testtest true

// https://regex101.com/ strona z tym gównem
//https://regex101.com/r/w08oA7/1  -- wzorzec kodu pocztowego

// zad dom. użytkownik podaje z klawy kod pocztowy i nazwę miasta. Sprawdź czy kod jest prawidłowy, jeśli tak to na ekranie w bloku wyswietl: Kod pocztowy:... , Miasto:..... Formularz

































var sprawdz = regEx.test(text);
console.log(sprawdz);
