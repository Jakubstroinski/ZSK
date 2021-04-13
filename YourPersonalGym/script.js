// -------------------------------- tekst w kafelkach -------------------------------- 

const aboutHead = document.querySelector('#about-h');
const aboutPara = document.querySelector('#about-p');
const iconJeden = document.querySelector('.icon1');
const iconDwa = document.querySelector('.icon2');
const iconTrzy = document.querySelector('.icon3');
const iconCztery = document.querySelector('.icon4');

iconJeden.addEventListener('click', (e) => {
    aboutHead.innerHTML = 'Zweryfikowane sale';
    aboutPara.innerHTML = 'Każda sala z naszej oferty wyposażona jest w klimatyzację i ogrzewanie w każdym pomieszczeniu, w tym szatni, toaletach czy salach treningowych. Sprawia to, że nasza usługa idealnie sprawdza się w gorące i zimne dni! <h1 style="color: green; text-align: center;">Niezawodność<h1>';
});

iconDwa.addEventListener('click', (e) => {
    aboutHead.innerHTML = 'Świetne opinie użytkowników';
    aboutPara.innerHTML = 'Po wielu udoskonaleniach i poprawkach udało nam się wejść na poziom, na którym każdy klient wie, że obsłużymy go najlepiej jak się da. Wszystko to dzięki staraniom naszej kadry pracowniczej, jej otwartości i komunikatywności. Na każdym kroku walczymy o to, aby nasz klient nie miał powodów do rezygnacji ze współpracy co skutkuje licznymi pozytywnymi opiniami. Ale zdecydowanie na tym nie poprzestaniemy! <h1 style="color: green; text-align: center;">Zaufanie<h1>';
});

iconTrzy.addEventListener('click', (e) => {
    aboutHead.innerHTML = 'Bezpieczeństwo na pierwszym miejscu';
    aboutPara.innerHTML = '<h1 style="color: green; text-align: center;">Bezpieczeństwo<h1>';
});

iconCztery.addEventListener('click', (e) => {
    aboutHead.innerHTML = 'Ogromna sieć klientów';
    aboutPara.innerHTML = 'Dzięki naszej niezawodności udało się nawiązać współpracę z wieloma trenerami, zawodnikami czy po prostu ludźmi, którzy uprawiają sport dla rekreacji! <h1 style="color: green; text-align: center;">Współpraca<h1>';
});

// -------------------------------- slider --------------------------------

let index = 1;

const sliderLeft = document.querySelector('.left-slider-button');
sliderLeft.addEventListener("click", (e, n = index) => {
    console.log(n)
    if (n == 1){
        n = 4;
    }
    else {
        n--;
    }
    switch (n) {
        case 1: document.querySelector(".slider").style.background = "url('./graphics/sala2.png')";
        break;
        case 2: document.querySelector(".slider").style.background = "url('./graphics/sala3.png')";
        break;
        case 3: document.querySelector(".slider").style.background = "url('./graphics/sala4.png')";
        break;
        case 4: document.querySelector(".slider").style.background = "url('./graphics/sala5.png')";
        break;
        default: document.querySelector(".slider").style.background = "url('./graphics/sala2.png')";
        break;
    }
    index = n;
    return index;
})

const sliderRight = document.querySelector('.right-slider-button');
sliderRight.addEventListener("click", (e,n = index) => {
    if (n == 1){
        n = 4;
    }
    else {
        n--;
    }
    switch (n) {
        case 1: document.querySelector(".slider").style.background = "url('./graphics/sala2.png')";
        break;
        case 2: document.querySelector(".slider").style.background = "url('./graphics/sala3.png')";
        break;
        case 3: document.querySelector(".slider").style.background = "url('./graphics/sala4.png')";
        break;
        case 4: document.querySelector(".slider").style.background = "url('./graphics/sala5.png')";
        break;
        default: document.querySelector(".slider").style.background = "url('./graphics/sala2.png')";
        break;
    }
    index = n;
    return index=n;
});

// -------------------------------- register --------------------------------
