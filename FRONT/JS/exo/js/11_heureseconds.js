// alert('coucou');

// var heure = prompt("Quelle heure est-il maintenant?");
// var minutes = prompt("Combien minutes?");
// var seconds = prompt("Combien seconds?");

// if (seconds<=58) {
//     document.write(heure+minutes+(seconds++));
// }else if (seconds>=59){
//     document.write(heure+(minutes++) + "0");
// } else if (minutes >= 59 && seconds >= 59){
//     document.write((heure++) +" 0"+" 0");
// } else {
//     alert('Vous n\'avez pas saisi de chiffre');
//  }


var heure = prompt("Quelle heure est-il maintenant?");
var minutes = prompt("Combien minutes?");
var seconds = prompt("Combien seconds?");

if((heure >=0)&&(heure<=23)&&(minutes>=0)&&(minutes<=59)&&(seconds>=0)&&(seconds<=59)) {
    seconds++;
    // on increment les seconds(seconds++)
    if(seconds===60) {
        // on met les seconds à 0 et on passe à l'heure suivantes
        seconds=0;
        minutes++;
        if (minutes===60) {
            // on met les minutes à zero et passe à l'heure suivante
            minutes=0;
            heure++;
            if(heure===24) {
                // l'heure suivante est minuit
                heure=0;
            }
        }

    }
    // affichage de l'heure
    document.write('<h3> Dans une secont il sera' + heure + 'h' + minutes + 'm' + seconds + 's</h3');
} else {
    // heure incorrecte
    document.write ('Heure incorrect!');
}

