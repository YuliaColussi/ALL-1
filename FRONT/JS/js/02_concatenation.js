alert('Coucou');
// ---------------------LA CONCATENATION----------------------------------------------------

// concatenation signifie mettre bout à bout deux chaines de caractères afin d'en former une troisième, nouvelle.
// Concaténer c'est donc additionner des chaines de caractères. 
// En JS, on va pouvoir concaténer grace à l'operateur << + >>
var annee=2017;
var futur=3;
var calcul=annee+futur;
console.log(calcul);
document.write(calcul+"<br>");

var mois='7';
var calcul2=annee + " " + mois;
console.log(calcul2);
document.write(calcul2 + "<br>");

var DebutPhrase = "Aujourd'hui";
var NbStagiaires = 9;
var SuitePhrase = "stagiaire";
var FinPhrase = "sont présent";
document.write(DebutPhrase + " " + NbStagiaires + " " + SuitePhrase + " " + FinPhrase);
console.log(DebutPhrase + " " + NbStagiaires + " " + SuitePhrase + " " + FinPhrase);
