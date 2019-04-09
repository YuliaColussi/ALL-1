// L'operateur ET : && ou AND 

--soi Je cumule 2 conditions :
=> prénom === prenomlogin
=> monAge === ageLogin

Pour que les 2 correspondent étre valiés il faut les associer
if((prenomLogin === prenom) && (ageLogin === monAge)) {
    // code 
    // code

// je ne rentre ici que si les 2 conditions vraies
}

// if ((A) && (B)) {....}
// l'operateur AND
=> si A est FAUX et D est VRAI => FAUX
=> si A est VRAI et D est FAUX => FAUX
=> si A est FAUX et D est FAUX => FAUX
=> si A est VRAI et D est VRAI => VRAI

// if ((C) || (D)) {....}
// l'operateur OR
=> si C est FAUX et D est FAUX =>FAUX
=> si C est FAUX et D est VRAI =>VRAI
=> si C est VRAI et D est FAUX =>VRAI
=> si C est VRAI et D est VRAI =>FAUX

/* L'operateur "!" signifie: le contraire de
var utilisateurLog = true;
if (!utilisateurLog) {
    //si l'utilisateur n'est pas loggé.
}
//  ce qui revient à écrire: 
if (utilisateurLog == false) {
    //si l'utilisateur n'est pas loggé.
}
*/

