// Jakub Stroiński 4B gr.2

// zad 1 pdpkt 1
function kwadrat(x){
    console.log(x*x);
}

kwadrat(4);

// zad 1 pdpkt2
(function(x) {
    console.log(x*x);
})(5)

//zad 2
function lamana(...zmienne){
    let wynik = 0;
    if (zmienne.length%2 == 0){
        for(let i = 0; i<= zmienne.length-2; i+=2){
            wynik += Math.sqrt((zmienne[i]-zmienne[i+2])^2+(zmienne[i+1]-zmienne[i+3])^2);
        }
    }
    console.log(wynik);
}

lamana(3, 5, 9, 6, 7, 8);

//zad 3
// function pierwiastki(a, function(b){return b}, (c)=>{return c}){
//     let delta = b^2 - 4*a*c;
//     let pierw_delta = Math.sqrt(delta);
//     let pierw_1 = (-b-pierw_delta/2*a);
//     let pierw_2 = (-b+pierw_delta/2*a);
//     console.log(`Pierwszy pierwiastek: ${pierw_1}
//     Drugi pierwiastek: ${pierw_2} `);

// }