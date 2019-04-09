<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tableau</title>
</head>
<body>

<div class="container">
<h1 class="display-4 text-ceneter">TABLEAUX FRUITS</h1><hr>
    <!-- 1- D�clarer un tableau ARRAY avec tout les fruits
	2- D�clarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000.
	3- Affichez les 2 tableaux
	4- Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettres � la fonction "calcul()" et obtenir le prix.
	5- Sortir tout les prix pour les cerises avec tout les poids (indice: boucle).
	6- Sortir tout les prix pour tout les fruits avec tout les poids (indice: boucle imbriqu�e).
	7- Faire un affichage dans une table HTML pour une pr�sentation plus sympa. -->

<?php

require_once("fonction.php");
// $fruits = array( array("title"=>"bananes"),
//                array("title"=>"pommes"),
//                array("title"=>"cerises"), 
//                array("title"=>"peches"), 
//              ); 
            
$tab_fruits = array('pommes', 'bananes', 'peches', 'cerises');

$tab_poids = array(100, 500, 1500, 2000, 3000, 5000, 10000);
             
// $poids = array( array("title"=>"100"),
//                array("title"=>"500"),
//                array("title"=>"1000"), 
//                array("title"=>"1500"), 
//                array("title"=>"2000"), 
//                array("title"=>"3000"), 
//                array("title"=>"5000"), 
//                array("title"=>"10000"), 
//              ); 


// 3
echo '<pre>'; print_r($tab_fruits); echo '</pre>';
echo '<pre>'; print_r($tab_poids); echo '</pre>';


//4
echo calcul($tab_fruits[3], $tab_poids[1]) . '<hr>';

//  we put 3 and 1 because we start counting from 0

// 5

// 

echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info text-center">';
foreach($tab_poids as $poids)
{               //cerises        //100
    echo calcul($tab_fruits[0], $poids) . '<hr>';
}
//         $resultat = round(($poids*$prix_kg/1000),2); // it allows us to round up to 2 numbers after a virgule ,
//     return "Les $fruit coutent $resultat Euros pour $poids<br>";
// }

//6

// echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-info text-center">';
// foreach($tab_poids as $poids)
// {               //cerises        //100
    //     echo calcul($tab_fruits[0] , $poids) . '<hr>';
    //     echo calcul($tab_fruits[1] , $poids) . '<hr>';
    //     echo calcul($tab_fruits[2] , $poids) . '<hr>';
    //     echo calcul($tab_fruits[3] , $poids) . '<hr>';
    // }
    // echo '<div>';
    echo '</div>';
                            //cerises
    foreach($tab_fruits as $fruit)
    {
        echo '<div class="col-md-6 offset-md-3 mx-auto alert alert-danger text-center">';
        foreach($tab_poids as $poids)
        {                       //100 after 500 after 1000 and we always stay in the same boucle (fruit)
            echo calcul($fruit, $poids) . '<hr>';
        }
        echo '</div><hr>';
    }



echo '<table class="table table-bordered text-center"><tr>';
echo '<th>Poids</th>';
foreach($tab_fruits as $fruits)
{
    echo "<th>$fruits</th>";
}
echo '</tr>';
foreach($tab_poids as $poids)
{
    echo '<tr>';
    echo "<th>$poids</th>";
    foreach($tab_fruits as $fruit)
    {
        echo '<td>' . calcul($fruit, $poids) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
    
    ?>
    </div>
</body>
</html>