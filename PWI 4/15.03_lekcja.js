let guziki = document.querySelectorAll('button');
guziki[0].addEventListener("click", zmiana_menu);

function zmiana_menu(){
    let menu = document.querySelector("ul");
    menu.classList.toggle("zmiana");
}

guziki[1].onclick = () => {
    let elementy = document.querySelectorAll("ul li");
    elementy[1].style.backgroundColor='yellow';
    elementy[4].style['backgroundColor']='yellow';
}

guziki[2].addEventListener("click", () => {
    let zmiana_czcionki = document.querySelectorAll("li");

    for (zmiana of zmiana_czcionki){
        zmiana.classList.toggle("czcionka");
    }
})