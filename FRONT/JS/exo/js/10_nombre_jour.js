// alert('cou');

var month = (prompt('ecrivez nombre du mois'));

if(month=1){
    document.write(31);
}else if(month=2){
    document.write(28);
} else if (month = 3) {
    document.write(31);
} else if (month = 4) {
    document.write(30);
} else if (month = 5) {
    document.write(31);
} else if (month = 6) {
    document.write(30);
} else if (month = 7) {
    document.write(31);
} else if (month = 8) {
    document.write(31);
} else if (month = 9) {
    document.write(30);
} else if (month = 10) {
    document.write(31);
} else if (month = 11) {
    document.write(30);
} else if (month = 12) {
    document.write(31);
}

alert('test');

var mois = parseInt(prompt("Quel mois choisissez-vous", "<saisir un chiffre entre 1 et 12>"));

if (mois === 2) { // si on a choisi février => chiffre 2
    document.write("Le mois numéro " + mois + " fait 28 jours.");
} else if ((mois === 4) || (mois === 6) || (mois === 9) || (mois === 11)) { // si on a choisi un mois qui fait 30 jours
    document.write("Le mois numéro " + mois + " fait 30 jours.");
} else if ((mois === 1) || (mois === 3) || (mois === 5) || (mois === 7) || (mois === : lunettes_de_soleil: || (mois === 10) || (mois === 12)) { // si on a choisi un mois qui fait 31 jours
    document.write("Le mois numéro " + mois + " fait 31 jours.");
} else {
    document.write("Votre choix " + mois + " n'est pas dans le calendrier.");
}
