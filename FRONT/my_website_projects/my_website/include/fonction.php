<?php

// -------------------FONCTION MEMBRE ------------
function internauteEstConnecte()// cette fonction indique si le membre est connecté, il n'a rien à faire sur la page connection, on le redirige vars sa page profil
{
    if(!isset($_SESSION['member_form']))//si l'indice membre n\'est pas définit dans la session, cela veut dire que
    // l\'internaute n\'est pas passé par la page connexion, donc  n'est pas connecté
    {
        return false;
    }
    else // sinon l'indice 'membre' est definit, on retourne true
    {
        return true;
    }
}

// FONCTION ADMIN

function internauteEstConnecteEtEstAdmin()
{
    // si la session du membre est définit et que son statut est à 1, cela veut dire qu'il est bien ADMIN et qu'il est bien connecté
    if(internauteEstConnecte() && $_SESSION['member_form']['statut'] == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}


?>