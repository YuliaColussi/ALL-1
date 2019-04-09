// alert("js ok"); Pour verife que mon fishier js est bien relier à mon HTML

/* Syntaxe de base*/

// Deux slash pour faire un commentaire uniligne

/*
ici je peux faire un commentaire
sur pleuseurs ligne
*/ 

// -- 1 : Déclaration d'une variable en JS
var prenom;

// -- 2 : Affecher une valeur
var prenom ="Iuliia";

// -- 3 : Une instruction se termine TOUJOURS par un point-virgular, aussi is est possible d'écrire plusieurs instruction sur une seule ligne
var instruction_1;
var instruction_2, instruction_3;

// -- 4 : Afficher une boite de dialogue (2 facons)
alert("WOW! Tu est sur ma page");
window.alert("WOW! Tu est sur ma page");

// -- 5 : Afficher dans la console (ici, la valeur de ma variable Prenom)
console.log(prenom);

// -- 6 : Afficher du texte dans une page web 
document.write("Bonjour à tous!");

// -- 7 :v Demander à l'utilisateur un valeur (2 façons)
var retournerValeur = window.prompt("Question : on est quel jour ?", "Saisissez le jouir de la semain");
var retournerValeur = prompt("Question : on est quel jour ?", "Saisissez le jouir de la semain");

// -- 8 : Attention le JS est sensible à la casse (case sensitive)
// mavariable=/=mavariable

// -- 9 : Une variable ne peut pas commencer par un chiffre, ne doit contenir que des caractéres alphanumériques, et ne peut etre un mot réservé (var, for...des éléments natifs du language JS)

// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s

// -- 10 : Une variable peut etre déclarée de façon explicite :
var prenom="Iuliia";
// ou implicite :
prenom="Iuliia";


// -- 1. Chaine de caractère (string)
var vacances="2017";
var destination="Guadaljara";

// -- 2. Un nombre entier (integer)
var annee=2017;

// -- 3. Un nombre décimal (float)
var nombre_a_virgule=-5.32;

// -- 4. Un booléan (boolean = VRAI/FAUX = TRUE/FALSE)
var unBoolean=false; // --true

// --5. Les constante
/* La declaration const permet de créer une constante accessible uniquement en lecture.
Contrairement à une variable, sa valeur ne peut etre modifiée par réaffectation plus bas
dans le code.
Une constante ne peut pas etre déclarée à nouveau dans le meme scripte.*/


// Par convention les constantes sont en majuscules
const PAYS ="France";

console.log(typeof"2017");

/*=============================================================*/ 

// Intro JS & Algo

/*=============================================================
                       LA CONCATENATION
===============================================================*/ 

// 1er exemple
var annee=2017;
var mois=" 3";
var calcul=annee+mois;
console.log(calcul);
document.write(calcul+"<br>");


// Je réaffecte une valeur à ma variable mois
mois=" 7";
var calcul=annee + mois;
console.log(calcul);
document.write(calcul+"<br>");

// 2eme exemple
var DebutDePhrase="Aujourd'hui";
var NombreDeStagiaires=" 9";
var SuiteDePhrase=" stagiares";
var FinDePhrase=" sont présent.<br>";

// Nous souhzitons maintenet, grace à le concaténation; afficher sout ce petit monde, en un saul morceau
document.write(DebutDePhrase + NombreDeStagiaires + SuiteDePhrase + FinDePhrase)

/*---------------
EXERCISE :
Créez une concaténation à partir des éléments suivants:
---------------------------------*/ 

var phrase1=" Je m'appelle";
var phrase2=" Sandra et j'ai";
var age=" 375";
var phrase3=" ans!";
console.log(phrase1 + phrase2 + age + phrase3);
document.write(phrase1+phrase2+age+phrase3);


/*-----------------------------
LES OPERATIONS ARITHMETIQUE
------------------------------*/ 

// #################L'addition###########
// ----Declaration de plusieurs variable à la suite
var nb1, nb2, resultat;

nb1=10;
nb2=5;
// Addition de nb1+nb2 avec l'opérateur "+"
resultat=nb1+nb2;

// Affichage du resultat dans la console
console.log(resultat);


// ############# LA SOUSTRACTION ####################
// --- Soustraction de nb1-nb2 abec l'operateur "-"
resultat=nb1-nb2;
// Affichage du resultat dans la console
console.log(resultat);


// ############# LA MULTIPLICATION ####################
// --- Soustraction de nb1-nb2 abec l'operateur "-"
resultat = nb1*nb2;
// Affichage du resultat dans la console
console.log(resultat);



// ############# LA DIVISION ####################
// --- Division de nb1-nb2 abec l'operateur "-"
resultat = nb1 / nb2;
// Affichage du resultat dans la console
console.log(resultat);

// ############# LA MODULO ####################
// --- La modulo returne le reste d'une division
// --- La modulo de nb1% nb2 avec l'opérateur "%"
nb1=11;
resultat = nb1 % nb2;

// Affichage du resultat dans la console
console.log(resultat);

// ############# ES ECRITURES SIMPLIFIEES ####################
// --- La modulo returne le reste d'une division
// --- La modulo de nb1% nb2 avec l'opérateur "%"
nb1 = 15;
nb1=nb1+5;
console.log(nb1);

nb1+5;
// --Ce qui équivalent à ecrire nb1=nb1+5;
// --Ici, j'ai incrémenté et réaffecté
console.log(nb1);

// -- Je peux procédé de la meme maniere pour les autres pérateurs arithmetique:"+","-", "/", "*", "%"

/*-----------------------------
INCREMENTATION & DECREMENTATION
------------------------------*/

var nb1=1;
nb1=nb1+1;

// Affichage du resultat dans la console
console.log(nb1);

// Ecriture simplifié
nb1++
console.log(nb1);


// DECREMENTATION

nb1=nb1-1;

console.log(nb1);

// Ecriture simplifié
nb1--
console.log(nb1);



/*-----------------------------
        LES CONDITIONS
------------------------------*/

var MajoriteFR = 18;// si ma condition est vrai (boolean=TRUE)

if(MajoriteFR>=18){
    alert("Bienvenue");
} else {//sinon=>ma condition est fause (boolean=FALSE)  
    alert("Allez voir ailleurs!");
}

/*-------------------------
EXERCISE
Créer une fonction permettant de vérifier l'age d'un visiteur.
S'il a la majorité légale, alors Je lui souhaite de bienvenue, sinon, je fait une
redirection sur Google aprés lui
avoir signqlé le soucis
--------------------------*/ 

var Majorite=Number(prompt('How old are u ?'));

if(Majorite >=18 ){
    alert("Bienvenue");
}else {
    // alert("vous n'êtes pas assez vieux pour suivre les informations de ce site");

   window.location.replace("https://www.google.com/");
}