// var today;
// var tomorrow;
// var n;

// today = (prompt('Quel jour sommes-nous aujourdhui?'));

// if (today=='Monday') {
//     var n = ('Tuesday');
//     alert('tomorrow is' + n);
// } else {
//     alert('une erreur');
// }

// if (today =='Tuesday') {
//     var nm=('Wednesday');
//     alert('tomorrow is' + nm);
// } else {
//     alert('une erreur');
// }


// if (today =='Wednesday') {
//    var nk=('Thursday');
//     alert('tomorrow is'  + nk);
// } else {
//     alert('une erreur');
// }


// if (today =='Thursday') {
//     var nl=('Friday');
//     alert('tomorrow is' + nl);
// } else {
//     alert('une erreur');
// }

// if (today =='Friday') {
//    var nw = ('Saturday');
//     alert('tomorrow is' + nw);
// } else {
//     alert('une erreur');
// }

// if (today =='Saturday') {
//     var tn = ('Sunday');
//     alert('tomorrow is' + tn);
// } else {
//     alert('une erreur');
// }

// if (today =='Sunday') {
//     var ns = ('Monday');
//     alert('tomorrow is' + ns);
// } else {
//     alert('une erreur');
// }



var jour = prompt('Quelle jour sommes nous?');

if(jour==='lundi'){
    alert('Demain nous serons mardi');

}else if(jour==='Mardi') {
        alert('Demain nous serons mercredi');
} else if(jour==='Mercredi') {
    alert('Demain nous serons jeudi');
} else if(jour==='Jeudi') {
    alert('Demain nous serons vendredi');
} else if(jour==='Vendredi') {
    alert('Demain nous serons samedi');
} else if(jour==='Samedi') {
    alert('Demain nous serons dimanche');
} else if(jour==='Dimanche') {
    alert('Demain nous serons lundi');
} else {
    // si la saisie de l'internaute ne correspond à rien
    alert('Ceci n\'est pas un jour valable');
} 



switch(jour){
    case 'lundi':
        alert('Demain nous serons mardi');
    break;
    case 'mardi':
        alert('Demain nous serons mercredi');
    break;
    case 'mercredi':
        alert('Demain nous serons jeudi');
    break;
    case 'jeudi':
        alert('Demain nous serons vendredi');
    break;
    case 'vendredi':
        alert('Demain nous serons samedi');
    break;
    case 'samedi':
        alert('Demain nous serons dimanche');
    break;
    case 'dimanche':
        alert('Demain nous serons lundi');
    break;
    default:
    break;
}

