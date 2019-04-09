

var j = prompt('Mettrez votre nombre svp');

if ((j >= 50) && (j <= 100)){ 
    document.write("Merci");
}else {
    location.reload();
}


// var j = prompt('mettrez la mot svp');

// if ((j = 'oui') && (j= 'non')) {
//     document.write("Cool");
// } else {
//     location.reload();
// }


// CORRECTION

var nombre = 0;
while ((nombre < 50) || (nombre >100)) {
    nombre = Number(prompt("Entrez un nombre entre 50 et 100 : "));
}