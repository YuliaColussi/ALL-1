<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liens fruits</title>
</head>
<body>
    <!-- 1. Effectuer 4 liens HTML pointent sur le meme page avec le nom des fruits.

         2. Faites un sorte d'envoyer 'cerises' dans l'URL si on clic sur le lien 'cerises'. (faire la meme chose avec tout les fruits)

         3. Tenter d'afficher "cerises" sur la page web si l'on clique dessus (si cerises est passé
         dans l'URL par conséquent / meme chose avec tout les fruits)

         4. Envoyer l'information à la fonction calcul() afin d'afficher le prix pour 1kg de cerises
         pareil pour tout les fruits)-->


    <a href="liens_fruit.php?id=1&type=banana">Banana</a><br>
    <a href="liens_fruit.php?id=2&type=cerises">Cerises</a><br>
    <a href="liens_fruit.php?id=3&type=pommes">Pommes</a><br>
    <a href="liens_fruit.php?id=4&type=peches">Peches</a><br>



<?php

// $resultat = [$_GET] ; // it allows us to round up to 2 numbers after a virgule ,
// return "Les $fruit coutent $resultat Euros pour $poids<br>";

foreach($_GET as $key => $value)
{
    if($key != 'id') // si l'indice est différent de 'id', alors on affiche l'indice en fonction de la valeur de la superglobale $_GET (ARRAY)
    // c'est ce qui permet d'exclure l'indice 'id'
    echo "Votre choix est <strong>$value</strong><br><br><hr>";
}




require_once('fonction.php');

echo calcul ($_GET['type'], 1000);

// if(isset($_GET['choix']))
// {

//     echo calcul ($_GET['type'], 1000); on va crocheter dans l'URL 
// }
// This is how the prof made it



// (isset($_GET['choix'])) ? $_GET['choix'] : "Aucune fruit selectionné !";


 // if we write it this way it replaces 

// si l'indice choix est definit dans l'URL , c'est à dire que l'on a cliqué sur le lien, on affiche
//le fruit sinon on affiche un message d'erreur


// ----------------------------------------- CORRECTION--------------------------------
// <?=(isset($_GET['type'])) ? $_GET['type'] : "Aucun fruits selectionner";


// include_once "fonction.php";

// //la condition permet de verifier si l'indice 'type est bien definit dans l'url, donc par consequent que l'on a cliqué sur un lien

// if(isset($_GET['type']))
// {
// echo calcul($_GET['type'],1000); // on va crocheter dans l'url pour recupere le bon fruit sur lequel on a cliqué
// }

//  




?>

</body>
</html>