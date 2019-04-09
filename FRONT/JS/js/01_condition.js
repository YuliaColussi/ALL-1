// // alert('vivre js');

// /* L'instruction "if" exécute une introduction si une condition 
// donnée est vrai. Si la condition n'est par vérifiée, il est possible
// d'utiliser une autre instruction.*/

// // ---------STRUCTURE DE BASE IF--------------

// if (true) {
//     /*par defaut le condition à vérifie le "if" verifie si elle est vrai */
//     // ----------ici le code------------
// }

// var nb1 = 10;
// if (nb1 <50) {
//     console.log('nb1 est bien inferieur à 50');
// }

// if (true) {
//     /*...le code...............si c'est vrai..........*/
// }else{
//     /*...............le code si c'est faux...........*/
   
//     }

// if (nb1>50) {

//     console.log('nb1 est bien inferieur à 50');    
// } else {
//     console.log('nb1 nest pas unferieur à 50');
// }

/*------EXERCISE-----------*/

// On utilise le if pour vérifier l'age de l'internaute.
// => si el majeur je lui siuhaite la bienvenue
// => si il est mineur je:
// 1. Lui signale et 2. le renvoie vers un autre site

// je déclare la majorité légale
// demander l'age en s'assurant que nous avons un NUMBER
// je vérifie si mon internaute est majeur
// si il est mineur je le lui signale
// et ensuite je le redirige sur le site de mon choix

var Majorite = (prompt('How old are you?'));

if (Majorite>=18){
    alert('Bienvenue');
}else{
    alert('Vouz pouvez pas rester sur notre site');
    window.location.replace('https://www.google.com/');
}
