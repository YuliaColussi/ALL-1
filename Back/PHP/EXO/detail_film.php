<?php

// We show data for us (developpers)
echo '<pre>'; print_r($_GET); echo '</pre>';



// WE show data to the user

echo "<h1>Détail du film n <strong>$_GET[id_film]</strong></h1>";

   
        echo'<div class="col-md-4 offset-md-4 alert alert-success text-dark mx-auto text-center">';
        foreach($_GET as $key2 => $value)
        {
            echo "$key2 : $value<br>";
        }
        echo '</div>';
  
    

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Liste de films</title>
  </head>
  <body>

</body>
</html>