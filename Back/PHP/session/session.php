<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SESSION PHP</title>
</head>
<body>
        <div class="container">
    <h1 class="display text-center">SESSION PHP</h1><hr>

    <?php
        // Une session est un moyen simple de garder des varaiables accessibles quelque soit la page ou l'on se trouve

        //Par example, sans une session active, nous ne popurrions pas naviguer sur un site tout en restent connecté
        //Les sessions sont conservés coté serveurs puisqu'elles contiennet des données sensibles tel que votre email, nom, prénom etc...
        session_start();//permet de créer un fishier session se trouvant dans le dossier c:/xampp/tmp

        // on stock des données dans la session en créant des indices au tableau ARRAY
        $_SESSION['pseudo'] = 'yulia';
        $_SESSION['nom'] = 'COLUSSI';
        $_SESSION['prenom'] = 'Iuliia';

        
        // vider une partie de la session
        unset($_SESSION['prenom']);// allows us to remove some session parts
        
        echo '<pre>'; print_r($_SESSION); echo '</pre>';

        // we can also destroy a session
        // session_destroy();



    ?>
</body>
</html>