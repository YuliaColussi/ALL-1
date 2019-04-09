// var nb1 = Number(prompt("Entrez nb1 :"));
// var nb2 = Number(prompt("Entrez nb2 :"));
// var nb3 = Number(prompt("Entrez nb3 :"));

// if (nb1 > nb2) {
// nb1 = nb3 * 2;
// } else {
// nb1++;
// if (nb2 > nb3) {
// nb1 = nb1 + nb3 * 3;
// } else {
// nb1 = 0;
// nb3 = nb3 * 2 + nb2;

// }

// alert(nb1);

// alert(nb2);

// alert(nb3);

// }



var nb1 = Number(prompt("Entrez nb1 :2"));
var nb2 = Number(prompt("Entrez nb2 :4"));
var nb3 = Number(prompt("Entrez nb3 :0"));

if (nb1 > nb2) {
    nb1 = nb3 * 2;
} else {
    nb1++;//nb1 = 3
    if (nb2 > nb3) {
        nb1 = nb1 + nb3 * 3;//nb1 = 3 + (0 * 3)
    } else {
        nb1 = 0;
        nb3 = nb3 * 2 + nb2;
    }
}
console.log(nb1);
document.write('le nombre 1 vaut au final :' + nb1);
console.log(nb2);
document.write('le nombre 2 vaut au final :' + nb2);
console.log(nb3);
document.write('le nombre 3 vaut au final :' + nb3);


