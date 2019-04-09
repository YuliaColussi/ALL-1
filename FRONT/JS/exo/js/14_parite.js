
var c = prompt("cest la quelle nombre alors?");

var chiffre = 1;
while (chiffre<=10) {
    document.write(chiffre + " multiplie " + c + " egale " + (c * chiffre) + "<br/>");
    chiffre++;
}



// CORRECTION

// var choix = prompt('Choisis un nombre : ');
// if ((choix >=2) && (choix <=9)) {
//     for( i = 1; i <=10; i++) {
//         var res = choix * 1;
//         document.write(choix + 'x' + i + '=' + res + '<br/>');
//     }
// } else {
//     document.write ("<h4> Le chiffre doit etre entre 2 et 9!</h4>")
// }







// while (var c = prompt("cest la quelle nombre alors?"); (c >= 2) && (c <= 9)

// var temps = 0;
// for (var mesSous = 1000; mesSous < 2000; mesSous += 50) {
//     document.write('<h3>Le mois suivant jai :' + mesSous + '</h3>');
//     temps++;
// }
// document.write('<h3> Il aura fallu' + temps + 'mois</h3>');



// var j = 1;
// var c = prompt('Combien des tours de manege vous voulez?');
// while (j <= c) {
//     alert('Cest le tour de manège n°' + j);
//     j++;
// }