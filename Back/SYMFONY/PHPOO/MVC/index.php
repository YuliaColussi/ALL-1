<?php

// <!-- En MVC 5Model View Controller -->

// www.maboutique.php/index.php?controller=produits&action=boutique

// $a = new produitsController;
// $a -> boutique();


// www.maboutique.php/index.php?controller=produits&action=affichage&id=165

// $a = new produitsController;
// $a -> affichage(165);


// // réécriture d'URL

// www.maboutique.php/produits/affichage/165

// $a = new produitsController;
// $a -> affichage(165);

// // like this we will not be already found in the search by 'id' to crack the website so its more protected


// // routing
// www.maboutique.php/product/show/165

// $a = new produitsController;
// $a -> affichage(165);

// routing is like a list where 'show' will be = 'affichage';

require('produitsController.php');
// localhost/Symphony/PHPOO/MVC/index.php

$a = new produitsController;
$a -> boutique();

// advice to use require_once in 80%

?>