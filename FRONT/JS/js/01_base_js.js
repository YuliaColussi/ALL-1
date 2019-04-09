// Syntaxe de 01_bases
// commentaire sur une seule ligne
/*
Ici, je fais un commentaire
sur plusieurs lignes*/

// --1: déclarer une variable en JS
// var Prenom;
// --2: Affecter une valeur à une variable.
// Prenom ='Sandra';
// var Prenom='Sandra';
// --3: Une instruction se termine YOUJOURS par un point virgule,
// aussi il est possible d'écrire plusieurs instruction en une seule ligne.
// inst_1;
// inst_2; inst_3;
// --4: Afficher une boite de dialogue (2 façons)
// // alert('Super, tu est arrivé sur mon site!');
// window.alert('Super, tu encore arrivé sur mon site!!');
// // --5: Afficher dans la console(ici, la valeur de ma variable)
// // (Prenom)
// // console.log('Prenom');
// // --6: Afficher dans la page Web
// document.write('A la ause vous aurez des Haribos!');
// // --7: demander à l'utilisateur une valeur (2 façons)
// window.prompt('Question: quel jour sommes nous?','jour de la semaine');
// prompt('Question: Quel jour sommes nous?','jour de la semaine');
// // ---> et pour manipuler cette valeur, je n'oublie pas de la
// // stocker.
// var jour = prompt('Question: Quel jour sommes nous?', 'Jour de la semaine');
// console.log("jour");
// --8: Attention /|\ le JS est sensible à la casse 'case sensitive'
// maraviable=/=maRaviable
// --9: Une variable ne peut pas commencer par un chiffre;
// , elle ne doit contenir que des caractères ALPHANUMERIQUE, et ne peut pas etre un mot réservé (var)
// ,for....des éléments natifs du language JS)

// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s 

// --10: Une variable peut etre déclarée de façon explicite:
// var fruit;
// var fruit='fraise';
// // ou implicite: 
// var fruit_2='coco';
// var haribo='tagada';


/*---------------------------------------------------------------------
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~LES TYPES DE VARIABLES~~~~~
--------------------------------------------*/
// --1. Chaine de caractères (string)
// L'objet global 'string' est un constructeur de chaine de caractères.
// var vacances = '2017';
// var destination = 'Australie';
// --2. Un nombre entier (integer ou int)
// var annee = 2017;
// --3.Un nombre décimal (float);
// var nombre_a_virgule=-5.32;
// --4.Un Booléen (boolean=TRUE/FALSE)
// L'objet BOOLEAN est un objet permettant de représenter
// une valeur Booléenne.
// var unBooleen = false;//--TRUE
// --5.Les Constantes
/*Le declaration de const permet de créer une constante
accessible uniquement en lecture. Contrairement à une variable
sa valeur ne peut plus etre modifiée par réaffectation plus bas dans la code.
Une constante ne peut pas atre déclarée à nouveau dans le meme script*/
/*par CONVENTION les constantes sont en MAJUSCULES.
const PAYS = 'France'; (string)
const AN = '2020'; (string)
const BIRTH = 2020; (nombre)
*/
// --6. TYPEOF permet de connaitre le type de ma VARIABLE
// console.log('vacances');
// console.log(typeof 'vacances');
// console.log('annee');
// console.log(typeof 2019);

// en JS les variables sont auto-typées
// on peut convertir une variable de type NUMBER en STRING
// et aussi STRING en NUMBER avec les fonctions natives
// de JS
// -- la fonction parseInt () renvoie un entier à partir d'une chaine de caractères.(La fonction analyse
// une chaine de caractères fournie en argument et renvoie un entier dans une base de données)
var unChiffre ='12';
console.log(unChiffre);
console.log(typeof unChiffre);
// STRING => NUMBER
unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);
//Je ré-affecte une valeur
unChiffre='12.22';
console.log(unChiffre);
console.log(typeof unChiffre);
// STRING => FLOAT
// *la fonction parseInt permet de transformer une chaine de caractères en un nombre flottant après avoit=r analysé celle-ci (parcing).*/
// Un nombre flottant obtenu à partir de l'analyse de la chaine de caractères. Si le premier caractère ne permet pas
// d'obtenir un nombre, ce sera la valeur NAN qui sera renvoyée.
unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);
//NUMBER =>STRING
var nb_en_lettres=258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);
/* Le méthod toString() en JS permet de donner un aperçu d'un objet instancié. C'est à dire que cette méthode va te retourner une chaine de caractères
représentant ton objet: affichage de la valeur des propriétés par example.*/
