console.log("cokolwiek");

let log_level = "debugowanie";
let log_message = "meltdown";
console.log(`Log level: ${log_level} - komunikat: ${log_message}`);

let a = 10;
let b = 20;
console.log(`Suma = ${a+b}`);

function f(x){
    return x*x;
};
console.log(`Wynik = ${f(20)}`);

// TYPY DANYCH W JS TO : NUMBER, STRING, BOOLEAN, NULL, UNDEFINED, OBJECT, FUNCTION

let c;
c = 10;

console.log(typeof a);
console.log(typeof log_level);
console.log(typeof f);

var d = 0b1011; // każda liczba zaczynająca się sekwencją 0b jest czytana jako binarna
var d = 0377; // każda liczba zaczynająca się sekwencją 0b jest czytana jako ósemkowa
var d = 0xFF // każda liczba zaczynająca się sekwencją 0b jest czytana jako szesnastkowa

let kwadrat = function(x){
    return x*x;
};

let res = kwadrat(100);
let inny_kwadrat = kwadrat;
let inny_res = inny_kwadrat(110);
console.log(res);
console.log(inny_res);

let distance2 = function(p1, p2, norm2){
    return norm2(p1.x - p2.x, p1.y-p2.y);
};

P1 = { "x":100, "y":100};
P2 = { "x":200, "y":200};

// odległość Euklidesowa z blokiem funkcji
dist_e = distance2(P1, P2, function(x, y) {
    return Math.sqrt(Math.abs(x) ** 2 + Math.abs(y) ** 2);
});

// odległość Manhattan w wersji funkcji strzałkowej
dist_m = distance2(P1, P2, (x, y) => Math.abs(x) + Math.abs(y) );

// funkcja natychmiastowa
let instant = (function(x) { return x*x; })(100);

function p(){
    return arguments.length;
};
console.log(p(1, 2, 3, "Jan", null));

// Operator reszty
function r(x, y, ...reszta){
    console.log(Array.isArray(reszta));
    console.log(`Pierwszy: ${x}, drugi: ${y}, reszta: ${reszta}`);
};
r(10, 20, 30, 40, 50, 60);

// operator rozwijania
function sumAll(a, b, c){
    return a+b+c;
}
let numbers = [6,7,8];
console.log(sumAll(...numbers));

// tablice asocjacyjne (klucz -> wartość)
let osoba = {
    imię: "Jan",
    nazwisko: "Kowalski",
    wiek: 20,
    getImie(){return this.imię;}
};
console.log(osoba.imię);

osoba.wzrost = 180; // dodanie składowej "wzrost"
console.log(osoba.wzrost);
delete osoba.nazwisko; // usunięcie składowej "nazwisko"
console.log(osoba.nazwisko);

