<?php
                //bananes, 500
function calcul($fruit, $poids)
{
    switch($fruit)
    {                   
        case 'cerises' : $prix_kg = 5.76; break;
        case 'bananes' : $prix_kg = 1.06; break;// on tombe ici
        case 'pommes' : $prix_kg = 1.61; break;
        case 'peches' : $prix_kg = 3.23; break;
        default: return "fruit inexistant"; break;
    }    //               500*1.06 / 1000
    $resultat = round(($poids*$prix_kg/1000),2); // it allows us to round up to 2 numbers after a virgule ,
    return "Les $fruit coutent $resultat Euros pour $poids<br>";
}

// echo calcul('bananes', 500); c'est juste pour tester

?>