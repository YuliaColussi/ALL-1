

var a = prompt('Mettrez votre chiffre svp');

if(a < 10){
    alert('recale');
} else if (a == 10 || a == 11 || a == 12){ 
    alert('reçu');
} else if (a=>12){
    alert('recu ' + 'plus ou egale 12');
}