<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lecture fishier text</title>
</head>
<body>
    <!-- Puisque nous avons réussi à introduire des informations dans un fishier.txt, il serait intéressant de faire l inverse et de lire le contenu d'un fishier.txt -->
    $nom_fishier = "file.txt";
    $fishier = file($nom_fishier);

    echo '<pre>'; print_r($fishier); echo '</pre>';

    <!-- here we can see what we usually save in a text file on a normal page -->
</body>
</html>