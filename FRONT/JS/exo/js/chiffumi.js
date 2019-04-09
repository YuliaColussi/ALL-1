// var userChoice = prompt("Do you choose rock, paper or scissors?");
// var computerChoice = Math.random();
// if (computerChoice < 0.34) {
//     computerChoice = "rock";
// } else if (computerChoice <= 0.67) {
//     computerChoice = "paper";
// } else {
//     computerChoice = "scissors";
// }
// var compare = function (choice1, choice2) {
//     if (choice1 === choice2) {
//         return "The result is a tie!";
//     }
//     if (choice1 === "rock") {
//         if (choice2 === "scissors") {
//             return "Rock wins!";
//         } else {
//             return "Paper wins!";
//         }
//     }
//     if (choice1 === "paper") {
//         if (choice2 === "rock") {
//             return "Paper wins!";
//         } else {
//             return "Scissors wins!";
//         }
//     }
//     if (choice1 === "scissors") {
//         if (choice2 === "rock") {
//             return "Rock wins!";
//         } else {
//             return "Scissors wins!";
//         }
//     }
// };
// compare(userChoice, computerChoice);

var choixUtilisateur = prompt("Choisissez-vous pierre, feuille, ou ciseaux ?");
var choix = function () {
    choixUtilisateur = prompt("Choisissez-vous pierre, feuille, ou ciseaux ?");
};
var nonValide = function () {
    while (choixUtilisateur !== 'pierre' && choixUtilisateur !== 'feuille' && choixUtilisateur !== 'ciseaux') {
        confirm(choixUtilisateur + " l'entrer n'est pas valide !");
        choix();
    }
};
nonValide();
var choixOrdi = Math.random();
if (choixOrdi <= 0.34) {
    choixOrdi = 'pierre';
} else if (choixOrdi <= 0.67) {
    choixOrdi = 'feuille';
} else {
    choixOrdi = 'ciseaux';
}
var ordiGagne = choixOrdi;
ordiGagne = "Victiore pour l'ordinnateur";
var userGagnent = choixUtilisateur;
userGagnent = "Victiore pour l'utilisateur";
console.log('L\'ordinnateur a choisi ' + choixOrdi);
var comparer = function (choix1, choix2) {
    if (choix1 === choix2) {
        return "Egalité " + choixUtilisateur;
    } else if (choix1 === 'pierre') {
        if (choix2 === 'ciseaux') {
            return 'La pierre gagne ! ' + userGagnent;
        } else {
            return 'La feuille gagne ! ' + ordiGagne + ' l\'utilisateur avait choisi la ' + choixUtilisateur;
        }
    } else if (choix1 === 'feuille') {
        if (choix2 === 'pierre') {
            return 'La feuille gagne ! ' + userGagnent;
        } else {
            return 'Le ciseaux gagnent ! ' + ordiGagne + ' l\'utilisateur avait choisi la ' + choixUtilisateur;
        }
    } else if (choix1 === 'ciseaux') {
        if (choix2 === 'feuille') {
            return 'Le ciseaux gagne ! ' + userGagnent;
        } else {
            return 'La pierre gagne ! ' + ordiGagne + ' l\'utilisateur avait choisi le ' + choixUtilisateur;
        }
    }
};
console.log(comparer(choixUtilisateur, choixOrdi));

// CORRECTION

// Le mode strict de ECMAScript 5 permet de choisir une variante restrictive de JavaScript.Le mode strict n'est pas seulement un sous-ensemble de JavaScript : il possède intentionnellement des sémantiques différentes du code normal. Les navigateurs ne supportant pas le mode strict exécuteront le code d'une façon légèrement différente de ceux le supportant, il ne faut donc pas compter sur le mode strict pour éviter des tests sur les navigateurs qui ne le supportent pas.Les codes en mode strict et en mode non - strict peuvent coexister, ce qui permet de réécrire les scripts en mode strict de façon incrémentale.

// Le mode strict apporte quelques changements à la sémantique « normale » de JavaScript:

// Le mode strict élimine quelques erreurs silencieuses de JavaScript en les changeant en erreurs explicites(une exception sera levée).
// Le mode strict corrige les erreurs qui font qu'autrement il est difficile pour les moteurs JavaScript d'effectuer des optimisations.Le code sera donc exécuté plus rapidement en mode strict, sans changer une seule ligne si cela n'est pas nécessaire.
// Le mode strict interdit les mot - clés susceptibles d'être définis dans les futures versions de ECMAScript.
// Voir la page Passer au mode strict pour plus de détails quant à la migration d'une base de code non-stricte vers une base de code compatible avec le mode strict.


'use strict';
// Mode strict du Javascript

// Declaration de trois variables

var computer;
var player;
var random;


// Recuperation du choix du joueur

player = window.prompt('Que choisissez-vois: pierre, feuille ou ciseau?')
random = Math.random();

// test du random
console.log(random);

if(random<=0.33)
{
    computer='pierre';
}
else if(random <= 0.66)
{
    computer = 'feuille';
}
else 
{
    computer = 'ciseau';
}

document.write('<p>Choix de lordinateur :' + computer +'</p>' );

if(computer == player)
{
    document.write('<p> Vous avez choisi la meme chose : égalité !</p>');
}
else{
    // le joueur et l'ordinateur n'ont pas choisi la meme chose, la bataille commence!

    switch (computer) {
        case 'ciseau':
            if (player == 'pierre') {
                document.write('<p>La pierre écrase le ciseau : vous gagnez !</p>');
            }
            else // player == 'feuille'
            {
                document.write('<p>La feuille est découpée par le ciseau : vous perdez !</p>');
            }
            break;

        case 'feuille':
            if (player == 'pierre') {
                document.write('<p>La pierre est enveloppée par la feuille : vous perdez !</p>');
            }
            else // player == 'ciseau'
            {
                document.write('<p>Le ciseau découpe la feuille : vous gagnez !</p>');
            }
            break;

        case 'pierre':
            if (player == 'feuille') {
                document.write('<p>La feuille enveloppe la pierre : vous gagnez !</p>');
            }
            else // player == 'ciseau'
            {
                document.write('<p>Le ciseau est écrasé par la pierre : vous perdez !</p>');
            }
            break;
    }
}

