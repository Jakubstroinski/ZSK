function adres(_miasto, _ulica, _numer_budynku){
    this.miasto = _miasto;
    this.ulica = _ulica;
    this.numer_budynku = _numer_budynku;
};

function Osoba(_imie, _nazwisko){
    this.imie = _imie;
    this.nazwisko = _nazwisko;
};

function Urząd(_nazwa, _adres, _kierownik, ...lista_pracowników){
    this.nazwa = _nazwa;
    this.adres = _adres;
    this.kierownik = _kierownik;
    this.lista_pracowników = lista_pracowników;
};

function check(urzad_A, urzad_B){
        const kierownik_A = urzad_A.kierownik.nazwisko;
        const kierownik_B = urzad_B.kierownik.nazwisko;
    
        if(urzad_A > urzad_B){
            return 1;
        }
        else if(urzad_A < urzad_B){
            return -1;
        }
    
        return 0;
};

let tablica = new Array();

let a1 = new adres("poznan", "szyperska", 5);
let a2 = new adres("lubon", "pyrska", 5);
let a3 = new adres("wagrowiec", "brud", 5);

let k1 = new Osoba("Janusz", "Hejka");
let k2 = new Osoba("Janusz", "Bejka");
let k3 = new Osoba("Janusz", "Cejka");

let p1 = new Osoba("nie", "istotne");
let p2 = new Osoba("nie", "istotne");
let p3 = new Osoba("nie", "istotne");
let p4 = new Osoba("nie", "istotne");
let p5 = new Osoba("nie", "istotne");
let p6 = new Osoba("nie", "istotne");

let u1 = new Urząd("abc", a1, k1, [p1, p2]);
let u2 = new Urząd("bac", a2, k2, [p4, p5]);
let u3 = new Urząd("bca", a3, k3, [p3, p6]);

tablica.push(u1, u2, u3);

tablica.sort((a,b)=> check(a,b));