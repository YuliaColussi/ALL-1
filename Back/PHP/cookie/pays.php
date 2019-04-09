<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cookie PHP</title>
</head>
<body>
    <div class="container text-center">
    <h1 class="display text-center">COOKIE PHP</h1><hr>


    <?php
    if(isset($_GET['pays'])) // on entre dans la condition dans le cas ou l'on clique sur un lien et donc envoye un pays dans l'URL
    {
        $pays = $_GET['pays'];
    }
    elseif(isset($_COOKIE['pays'])) // quand on quitte la page et apres on revient// it starts to work only when I come back to the website
    {
        $pays = $_COOKIE['pays'];
    }
    else // on entre dans le cas else lors de la première visite sur le site, lorsqu'aucun cookie n'est crée
    {
        $pays = 'fr';
    }
    $un_an = 365*24*3600; 
    // corersponde à une année ens secondes, se sera la durée de la vie de Cookie

    setcookie("pays", $pays, time()+$un_an);  // permet de créer un fishier cookie qui est conservé coté client, c'est à dire
    // sur l'ordinateur de l'internaute
    // arguments : nom de cookie / valeur de cookie / durée de vie

        echo '<pre>'; print_r($_COOKIE); echo '</pre>';

        // un COOKIE est un fishier qui est conservé cité cliebt, c'est à dire sur le pc du navigateur,
        // il contient des données non sensibles (derniers articles consultés,, laangue préférée du site etc..)

    switch($pays) 
    {
        case 'fr':
        echo 'Vous etes sur un site françaiss<br>';
        break;
        case 'es':
        echo 'Vous etes sur un site espagnole<br>';
        break;
        case 'an':
        echo 'Vous etes sur un site anglais<br>';
        break;
        case 'it':
        echo 'Vous etes sur un site italien<br>';
        break;
    }

    ?>
    <!-- ------------------------------------------------------------------ -->
    <!-- CREATION FISHIER COOKIE -->


    <h2>Votre langue: </h2>

    <ul>
    <li class="list-group-item"><a href="?pays=fr">France</a></li>
    <li class="list-group-item"><a href="?pays=es">Espagne</a></li>
    <li class="list-group-item"><a href="?pays=an">Angleterre</a></li>
    <li class="list-group-item"><a href="?pays=it">Italie</a></li>
    </ul>
    </div>
</body>
</html>