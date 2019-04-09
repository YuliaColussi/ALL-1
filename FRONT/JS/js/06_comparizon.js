/*javaScript fournit trois opérations permettant fr comparerdes valeurs:
=> l'égalite strict (ou identité ou <<triple égal>>) utilisant "===",
=>l'égalite faible (ou <<double égal>>) utilisant == ,
=>Objet.js() (ajoute avec ECMAScript 2015)*/
// l'opérateur de comparaison == signifie 'egale à'
// // il permet de vérifier que les valeurs de 2 variables sont identiques.

// var nb1 = 123;
// var nb2 = 123;
// console.log(nb1 == nb2);
// // afficher "true"
// // L'opérateur de comparison === signifie 'dtrictement égal à'
// // il permet  de vérifer la VALEUR et le type
// console.log(nb1 === nb2); 
// // retourne true
// // --L'operateur ! = signifie 'different de ..... en VALEUR'
// console.log(nb1 != nb2);
// // retorne FALSE

// // L'opérateur !== signifie strictement 'strictement différent de .....
// // en VALEUR et en TYPE
// console.log(nb1 !== nb2);
// // retourne FALSE

// /*-----------------------EXERCISE---------------------------
// /*J'arrive sur un espace sécurisé au moyen du prénom et de l'age 
// Je dois saisir mon prénom et mon age pour etre authentifié sue le site
// (les infos sont en BDD, ici dans mes variables prénom et ages)
// En cas d'echecs une alert m'informe du probleme.
// Si tout se passe bien, un message de bienvenue m'accueille.

var name;
var age;
var password;


name = prompt('Quelle est votre nom?');
age = prompt('Quelle est votre age?');
password = prompt('Quelle est votre mot de passe?');

if(name == 'Iuliia' && age == 24 && password === 'bonjour') {
    document.write('Bienvenue');
} else {
    document.write('Essayez encore');
}



var prenom, monAge;
prenom = "Iuliia";
monAge = 24;

// 1. Demander son prenom à l'utilisateur avec un prompt
var prenomLogin = prompt('Quelle est votre prénom?');
// 2. Je verifie si le prénom saisi (prenomLogin) correspond à celui de la base de données (prenom)

if(prenomLogin === prenom) {
    // alert('test')
    // 2a. Si tout est ok, je continue la vérification avec l'age.
    //2a1. Je demande à mon utilisateur de rentrer son age (prompt)
    var ageLogin = parceInt (prompt('Votre age?'));
    if(ageLogin === monAge) {
        alert('Bienvenue' + prenomLogin);
    }else {
        // 2a2. Si les ages ne correspondent pas, je lance une ALERT.
        alert("Erreur d'age");
    }
}else {
    // 2b. Sinon, les prenoms ne correspondent pas, je lance une alerte.
    alert("Attention, prénom non reconnu");
}

var prenom, monAge;
prenom = "Iuliia";
monAge = 24;
mdp = 'herisson';
var prenomLogin = prompt('Quelle est votre prénom?');
if(prenomLogin === prenom) {
    var ageLogin = parseInt(prompt('Votre age?'));
    if(ageLogin === monAge) {
        var mdpLogin = prompt('Quelle est votre mot de passe?');
        if(mdpLogin === mdp){
            alert('bienvenue' + prenomLogin);
        }else{
            alert('Problème avec votre mot de passe!');
        }
    }else{
        alert('Erreur dage');
    }
}else{
    alert('Attention, prénom est pas reconnue');
}



