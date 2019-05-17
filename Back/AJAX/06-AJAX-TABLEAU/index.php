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
        <script src="ajax6.js"></script>
        <!-- lien de JS -->
    <title>05 AJAX TABLEAU</title>
</head>
<body>
    <div class="container">
        <!-- 1. REALISER un selecteur en php qui regroupe tout les prénoms des employés, avec un bouton submit-->
        <!-- message -->
        <!-- 2.  REALISER le script PHP permettant d'afficher l'ensemble de la table employes-->
        <h1 class="display-4 text-center">Choisisez un employé</h1><hr>
 <div id="message"></div>
<!---FORM -->

<div id="resultat">
<!-- Here we add the new workers -->
</div>
<form  class="form1"  id="form" method="post" action="" class="col-md-6 offset-md-3 text-center">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
    </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
    </div>
    <div class="form-group col-md-6">
      <label for="sexe">Sexe</label>
      <select id="sexe" class="form-control" name="sexe">
        <option selected>Choose...</option>
        <option value="m">m</option>
        <option value"f">f</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Service</label>
      <input type="text" class="form-control" id="service" name="service" placeholder="Votre service">
    </div>
      <div class="form-group col-md-6">
      <label for="email">Date embauche</label>
      <input type="date" class="form-control" id="date_embauche" name="date_embauche">
    </div>
  <div class="form-group col-md-6">
    <label for="ville">Salaire</label>
    <input type="text" class="form-control" id="salaire" name="salaire">
  </div>
  </div>
  <button type="submit" id="submit" class="btn btn-primary">Ajouter</button>
  <br>
  <br>
  <br>
</form>



<div id="resultat">
 <?php require_once('init.php'); ?>
<?php $result = $bdd->query("SELECT * FROM employes");?>

<div id="tableau">
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
</div>
</div>
</body>
</html>