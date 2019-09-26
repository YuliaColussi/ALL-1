<?php

session_start();
if(isset($_GET['op']) && $_GET['op'] == 'conducteur')
{
    unset($_SESSION['vehicule']);
    unset($_SESSION['association']);
}

if(isset($_GET['action']) && $_GET['action'] == 'association' || isset($_SESSION['vehicule']))
{
    $_SESSION['conducteur'] = array(26, 27, 28);
    echo "Produit présent dans le panier : " . implode($_SESSION['conducteur'], '-') . '<hr>';
    echo '<a href="?action=vehicule">Form</a>';
}
else {
    echo '<a href="?action=conducteur">Conducteur</a>';
}


/*

    Jusqu'a present vous avez parfois eu du mal à organiser le code, ce n'est pas toujours evident de melanger html at php

    ARCHITECTURE MVC
    1. Modéle (échange avec la BDD)
    2.  View (affichaaage et présentation des données - HTML / CSS)
    3. Controler (traitement PHP)

    
    Le but d'une architecture MVC est de séparer les couches, c'est à dire de séparer les langages au maximum

    AVANTAGES

    -clarité de l'architecture
    Si le design doit changer, vous pouvez demander à l'integrateur de rpocéder aux mis à jour, il ne risquera pas de décapiter une accolade dans le code
    - favorise le travail d'equipee et les mises à jour


    INCONVENIENTS
    -Nombre de fishiers (trop complexe pour de petites applications)

    C'est comme ça que fonctionne les CMS (drupal, wordpress etc ...)



*/

?>