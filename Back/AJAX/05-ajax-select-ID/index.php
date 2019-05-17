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
        <script src="ajax5.js"></script>
        <!-- lien de JS -->
    <title>05 AJAX TABLEAU</title>
</head>
<body>
    <div class="container">
        <!-- 1. REALISER un selecteur en php qui regroupe tout les prénoms des employés, avec un bouton submit-->
        <!-- message -->
        <!-- 2.  REALISER le script PHP permettant d'afficher l'ensemble de la table employes-->
        <h1 class="display-4 text-center">Choisisez un employé</h1><hr>
        <form method="post" action="" class="col-md-6 offset-md-3 text-center">
        <div class="form-group" id="employes">
        <!-- cette div sert à remplace un selecteur initial par la selecteur mis à jour, c'est à dire sans l'employé supprimé et tout ça en instantané -->
            <div class="form-group">
            <select class="form-control form-control-lg" id="personne" name="personne">


    <?php
    require_once('init.php'); 
    $result = $bdd->query("SELECT * FROM employes");
?>
<?php
    while($employes = $result->fetch(PDO::FETCH_ASSOC)):?>
 
    <option value="<?= $employes['id_employes']?>"><?=$employes['prenom']?></option>;
        <?php endwhile ?>
        </select>
        </div>
        <button type="submit" value="supprimer" id="submit" class="col-md-6 offset-md-3 btn btn-dark">Rechercher</button>
        </form>

<div id="resultat">
<?php $result = $bdd->query("SELECT * FROM employes");?>


 <table class="table table-bordered"><tr>
 <?php
 for($i = 0; $i < $result->columnCount(); $i++):
    
    $colonne = $result->getColumnMeta($i);?>
    
     <th><?=$colonne['name']?></th>
<?php endfor; ?>
</tr>
<?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
<tr>
<?php foreach($employes as $value): ?>
<td><?= $value ?></td>
<?php endforeach ?>
</tr>
 <?php endwhile; ?>
</table>
</div>
</div>
</body>
</html>