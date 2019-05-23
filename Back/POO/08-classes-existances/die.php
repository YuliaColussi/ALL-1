<?php

function recherche($tab, $elem)
{
    if(!is_array($tab))
    {
        die('Vous devez envoyer un ARRAY');// si die s'execute, tout les traitements suivants ne sortents pas
        // die() permet de gérer les erreurs et d'afficher des erreurs "propres" en français
    }
                             //mario       liste
    $position = array_search($elem, $tab); // array_search() est une fonction prédéfinie qui permet de trouver la position d'un élément dans un tableau ARRAY, la fonction retourne l'incdice auquel se trouve l'élément
    return $position;
}

//-----------------------------------

$liste = array('Mario', 'Yoshi', 'Toad', 'Bowser');

echo "Position de 'Mario' dans le tableau ARRAY : " . recherche($liste, 'Mario') . '</strong><hr>';

echo "Position de 'Bowser' dans le tableau ARRAY : " . recherche('dgdfhfgjggh', 'Toad') . '</strong><hr>'; // à ce moment la, die() s'execute, le script s'arrète et tout les traitements suivants ne sont pas executé

echo 'Traitements...'; // ne s'affiche pas puisque die() executée ci-dessus une erreur en engender une autre
?>