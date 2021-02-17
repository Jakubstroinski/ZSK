let len = Math.round(Math.random() * (10-1) + 1);
const tab = new Array(len);

for (let i = 0; i < tab.length; i++) {
    tab[i] = Math.round(Math.random() * (10-1) + 1);
}

tab.sort();

let curr = tab[0], currCount = 1;
for (let i = 1; i < tab.length; i++){
    if(tab[i] == curr){
        currCount++;
    }
    else{
        console.log(`${curr} pojawiła się ${currCount} razy!`);
        curr = tab[i];
        currCount = 1;
    }
}
