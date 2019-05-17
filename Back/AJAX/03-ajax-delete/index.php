<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <!-- lien de jquery -->
        <script src="ajax3.js"></script>
        <!-- lien de JS -->
    <title>03 AJAX INSERT</title>
</head>
<body>
    <div class="container">
        <div id="message"></div>
        <!-- cette div receptionne le message de validation après la suppression -->
        <h1 class="display-4 text-center">Supprimer un employé</h1><hr>
        <form method="post" action="" class="col-md-6 offset-md-3">
        <div class="form-group" id="employes">
        <!-- cette div sert à remplace un selecteur initial par la selecteur mis à jour, c'est à dire sans l'employé supprimé et tout ça en instantané -->
            <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>

             <?php require_once('init.php'); ?>

    <?php       
    $result = $bdd->query("SELECT * FROM employes");
    // $verif_pseudo_email->bindValue(':pseudo', $email_pseudo,  PDO::PARAM_STR);
    // $verif_pseudo_email->execute();

    
    echo '<select multiple class="form-control" id="personne" name="personne">';
    while($employes = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo '<pre>'; echo print_r($membre); echo '</pre>';
        echo "<option value='$employes[id_employes]'>$employes[nom]</option>";

    }  
        echo '</select>';
        echo '</div>';
        ?>
            <?php
            // Réaliser un selecteur en php avec tout les nomes des employés
            ?>
        </div>
        <button type="submit" value="supprimer" id="submit" class="col-md-6 offset-md-3 btn btn-dark">Supprimer</button>
        </form>
    </div>
</body>
</html>