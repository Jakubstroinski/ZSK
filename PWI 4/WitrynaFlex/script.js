let btn = document.querySelector("#oblicz");

btn.addEventListener("click", function()
{
    let distance = parseInt(dystans.value);
    let usage = parseFloat(zuzycie.value);
    let needed = distance/100 * usage;
    if (isNaN(needed))
    {
        outputP.innerText = "Błąd danych.";
    }
    else
    {
        outputP.innerText = "Potrzebujesz: " + needed + " litrów paliwa.";
    }
    if(needed<0){
        outputP.innerText = "Błąd danych.";
    }
    else{
        outputP.innerText = "Potrzebujesz: " + needed + " litrów paliwa.";
    }
})