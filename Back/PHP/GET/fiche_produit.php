<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Fiche produit</title>
</head>
<body>
    <div class="container">
    <h1 class="display-4 text-center">
   Detail du produit n
   <strong class="text-info"><?= $_GET['id']?></strong>
    </h1>

<?php
echo '<pre>'; print_r($_GET); echo'</pre>';
// Le sinformation envoyés dans l'URL sont automatiquement stockées dans
//la superglobale $_GET, cela retourne un tableau ARRAY associatif

// EXO: afficher les données transmit dans l'URL avec un affichage conventionnel en excluant l'indice 'id'

if($_GET['id']){
       foreach($_GET as $value)
        {
            echo "$value<br>";
        }
}

echo'<div class="col-md-4 offset-md-4 mx-auto text-center alert alert-info">';
foreach($_GET as $key => $value)
{
    if($key != 'id') // si l'indice est différent de 'id', alors on affiche l'indice en fonction de la valeur de la superglobale $_GET (ARRAY)
    // c'est ce qui permet d'exclure l'indice 'id'
    echo "<strong>$key</strong>  : $value<br>";
}

echo '<div>';


'</div>';
?>

<a href="boutique.php">Retour à la boutique</a>
</div>
</body>
</html>