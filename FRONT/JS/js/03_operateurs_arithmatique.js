alert('coucou');
/*--1: Addition
--INFO-- je peux déclarer plusieurs variables à la suite*/
var nb1, nb2, resultat;
nb1 = 10;
nb2 = 5;
/*--Addition de nb1 + nb2 avec l'opérateur '+' */
resultat = nb1 + nb2;
// affichage dans la console
console.log(resultat);

// --2: Soustraction
// -- soustraction de nb1 - 

console.log(resultat);

// --3: multiplication
//--Multiprication de nb1 * nb2 avec l'operateur '*'
resultat = nb1 * nb2;
console.log(resultat);

// --4: division
//--Division de nb1 / nb2 avec l'operateur '/'
resultat = nb1 / nb2;
console.log(resultat);


// --5:le Modulo
//--Le modulo retourne le reste d'une division
// Modulo: terme employé dans la domaine des mathématiques pour qualifier une fonction qui permet de déterminer le reste
// de la division d'une variable par un nombre préalablement défini.
// --modulo de nb1 % nb2 avec l'operateur modulo "%".
resultat = nb1 % nb2;
console.log(resultat);
// -- et maintenant  je ré-affecte une valeur à nb1
nb1 = 11;
resultat = nb1 % nb2;
console.log(resultat);
console.log('le reste de la division de ' + nb1 + 'par' + nb2 + 'est égale à : ' + resultat);

/*
LES ECRITURES SIMPLIFIEES
*/

nb1 = 15;
nb1 = nb1 + 5;
console.log(nb1);

nb1 +=10;
// nb1 lui meme + quelque chose
console.log(nb1);

// Le raccourci est le meme pour les autres opérateurs ( +, -, /, *, %)


