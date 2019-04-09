var nombre1 = 5;
var nombre2 = 3;

nombre1 = (nombre2*1);
nombre2 = (nombre1+2);
console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5


// 2 - solution :

var vide = nb1;
nb1 = nb2;
nb2 = vide;