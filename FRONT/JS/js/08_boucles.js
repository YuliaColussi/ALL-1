// alert ('coucou');m

/*Lés boucles  permettent de répéter des actions simplement et rapidement. Une boucle
peut etre vue comme une version informatique de "copier N lignes" ou de faire "X fois quelque chose".
Par example en JS on peut traduire "Faire 5 pas vers l'Est" avec cette boucle: */

// var pas;
// for (pas=0; pas < 5; pas++) {
//     // Ceci sera executé 5 fois
//     // A chaque éxécution, la variable "pas" augmentera de 1
//     // Lorsque elle sera arrivée à 5, la boucle se terminera.

//     console.log('Faire un pas vers lEst');

// }

/* Il y a différents types de boucles mais elles se ressemblent toutes au sens ou elles
répètent une action un certain nombre de fois (ce nombre peut-etre zéro). Les différents types
de boucles permettent d'utiliser differents façons de commencer et de terminer une boucle.
Chaque boucle pourra etre utilisée en fonction de la situation et du problème
que l'on cherche à résoudre. */

/* ------------------------LES BOUCLES-----------------------------------*/

// -------------LA BOUCLE FOR ------------------------------------------

// for (3arguments) (L'objet argument est un objet, semblable à un tableau, correspondant aux arguments passés à une function){
    /*-------------------------code-------------------*/
// }


/*L'objet "argument" est une variable local (intrasèque et inhérente aux fonctions)
disponible dans toutes les fonctions (qui ne sont pas des fonctions FLECHEES).

/*
1. Initialise un compteur à partir de combien je compte (par défaut le compteur
est la variable 'i')
2.La condition à vérifie qui doit donc etre vrai (TRUE)
3. Le 'pas dincrementation' (combien j'ajoute à chaque tour, généralement 1 donc ++)
*/

// for(var i=1; i<=10; i +=2) {
//     document.write("<p>Instruction exécutée : "+i+"</p>");

// }


// ----LA BOUCLE WHILE (tant que);
// trés utilisée quand on ne connait pas les nombre de tours de boucles à l'avance

// var j = 1;
// while( j <= 10 ) {
//     document.write('<hr/> <p>Instruction exécutée : ' + j +'</p>' );
//     /* 50 lignes de codes */
//     j++; 
//     // j = j + 1; ou j+=1;
// }


// /*-----------------EXERCISE-----------------------*/

// J'ai 1000€ sur mon compteur
// chaque mois j'ajoute 50€ 
// Combien de temps me faut il pour avoir 2000€ sur mon compte?


// var money = 1000;
// while (money <= 2000) {
//     money += 50;
//     alert(money);
//      }


var money = 1000;
var month = 0;
while(money < 2000) {
money +=50;
month++;
}

document.write ('<h3>Sous sur mon compte : ' + money + '</h3>');

document. write ('Jusqua 2000€, il me faut : ' + month + 'mois</h3>');

document.write ('Jusqua 2000€, il me faut : ' + (month / 12)+ 'années</h3>');


// -- Avec la boucle FOR

var temps = 0;
for (var mesSous = 1000; mesSous < 2000; mesSous +=50) {
    document.write('<h3>Le mois suivant jai :' + mesSous + '</h3>');
    temps++;
}
document.write('<h3> Il aura fallu' + temps + 'mois</h3>');

