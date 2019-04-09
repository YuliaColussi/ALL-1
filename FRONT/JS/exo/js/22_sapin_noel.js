// var ask = 1;

// var red = 'red';

// var start = 1;


// // while (ask<=10) {
// //     document.write(red + '<br/>' * start);
// //     start++;
// // }


// while (ask<=1) {
//     document.write(red * start);
//     start++;
// }



// var c = prompt("combien fois?");

// var name = 5;
// var chiffre = 1;

// while (c <= 10) {
//     document.write((chiffre * name) + "<br/>");
//     chiffre++;
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




// var c = prompt("cest la quelle nombre alors?");

// var chiffre = 1;
// while (chiffre <= 10) {
//     document.write(chiffre + " multiplie " + c + " egale " + (c * chiffre) + "<br/>");
//     chiffre++;
// }


// var c = prompt("combien fois?");

// var sign = 5;
// var chiffre = 1;

// while (c <= 10) {
//     document.write((chiffre * sign) + "<br/>");
//     chiffre++;
// }


// MY SOLUTION

// function fn(a) {
//     for (var k = 1; k <= a; k++) {
//         for (var b = 1, j = k; j; b++) {
//             if (b % 2) 
//             {
//                 --j;
//                 document.write("*".repeat(b) + "<br>")
//             };
//         }
//     }
// }
// fn(4)



// for (var etoules = 1; etoiles <=a; etoiles++ ) {

// }



// var hor = 0, vert = 0;
// // Желаемое количество строк
// var max = 6;
// var space = "",
//     star = "";

// while (branche < max) {
//     space = "";
//     star = "";
//     for (vert = 0; vert < max - branche; vert++) space += " ";
//     for (vert = 0; vert < 2 * branche + 1; vert++) star += "#";
//     console.log(space + star);
//     branche++;
// // }

// CORRECTION SAPIN


var branche = prompt ("choix du nombre detages du sapin");
// on itère le nombre d'etages de sapin
for (var etage=1; etage<=branche; etage++) {
    // 1. Pour chaque etage e, nous avons i=e+3 lignes
    for(var i=0; i<etage+3; i++){
        // 2. Pour chaque ligne i, nous avons ((etage+i)*2)-1 étoiles
        for(var nb_etoile=1; nb_etoile<=((etage+i)*2)-1; nb_etoile++) {
            document.getElementById('sapin').innerHTML+='*';
            sapin.style.c
            olor ='green';
        }
        document.getElementById('sapin').innerHTML+='<br/>';
    }     // fin lignes
}    // fin étage

// La proptiété Element.innerHTML de élément recupere ou definit la syntaxe
// HTML decrivant les descedants de l'element.





// TRIANGLE IN A CONSOLE


// var branche = 0, vert = 0;
// // Желаемое количество строк
// var max = 6;
// var space = "",
//     star = "";


// while (vert < max) {
//     space = "";
//     star = "";
// for (branche = 0; branche < max - vert; branche++) space = space + " ";
//     for (branche = 0; branche < vert + 1; branche++) star = star + "*";
//     console.log(space + star);
//     vert++;
// }


