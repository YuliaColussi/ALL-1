

// function surfaceCercle() {
//     var rayon;
//     var pin=3.14;

//     rayon = prompt('Quelle est la rayon de la cercle?');

//     alert('La surface vaut' + (rayon*2) * pin);

// }


function surfaceCercle() {
    var rayon = parseFloat(prompt("Entrez le rayon du cercle : "));

    return 3.14 * rayon * rayon;
}
 