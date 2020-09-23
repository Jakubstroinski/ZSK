function Osoba(_imie, _n, _w){
    
    this.imie = _imie;
    this.nazwisko = _n;
    this.wiek = _w;

}

let o1 = new Osoba("Oskar", "Skoma", 19);
let o2 = new Osoba("Oskar", "Skoma", 19);
let o3 = new Osoba("Ossssssskar", "Skoma", 19);

let tablica = new Array;
tablica.push(o1,o2,o3);
console.log(tablica);

function szukaj(_imie, _dane){
    for (let i = 0 ; i<_dane.lenght ; i++){
        if (_imie == _dane[i].imie){
            console.log(_dane[i]);
        }
    }
};

function dodaj(_tab, _osoba){
    _osoba = new Osoba;
    _osoba.imie="Janusz";
    _osoba.nazwisko="Walczuk";
    _osoba.wiek=22;
    for (let i = 0 ; i<_tab.lenght ; i++){
        if (_osoba === _tab[i]){
            console.log('istnieje juz taka osoba w tej bazie danych');
        } else {
            _tab.push(_osoba);
            console.log(_tab);
        }
    }
};

let Jano;
dodaj(tablica, Jano);