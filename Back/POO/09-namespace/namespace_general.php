<?php

namespace General;

require_once('namespace_commerce.php');

USE Commerce1, Commerce2, Commerce3; // permet de preciser quel namespace je souhiate importer du fishier namespace_commerce.php;

echo __NAMESPACE__ . '<hr>'; //constante magique qui permet d'affichr dans quel namespace on se trouve 

$std = new \StdClass(); // sans le ainti-flash --> erreur !! L'interpreteur va chercher si la méthode StdClass() est déclarée dans le namespace 'General', donc pour revenir dans l'espace global de php le temps de ligne , nous devons mettre un anti-slash devant la classe 

var_dump($std);

$commande = new Commerce1\Commande;
var_dump($commande);
echo "<hr>Nombre de commande : " . $commande->nbCommande . '</hr>';

// Exo : créer un objet de toute les classes déclarées et faire les affichages des propriétés

$produit = new Commerce2\Produit;
// var_dump($produit);
echo "<hr>Nombre de produit : " . $produit->nbProduit . '</hr>';

$panier= new Commerce3\Panier;
// var_dump($panier);
echo "<hr>Nombre de panier : " . $panier->nbProduit . '</hr>';


$panier= new Commerce3\Produit;
// var_dump($panier);
echo "<hr>Nombre de produit : " . $panier->nbProduit . '</hr>';


?>