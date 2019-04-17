<!--EXO  1.2  -->
<?php
if(isset($_GET['action'])&& $_GET['action'] == 'exo4form.php')
{
   echo '<pre>'; print_r($_POST); echo '</pre>';
//    execute($_validate);
}
else{
    echo "<div class='col-md-6 offset-md-3 alert alert-danger text-center text-dark'>Il y a une erreur</div>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire voiture PHP :: EXO</title>
</head>
<body>
    <div class="container">
<form method="post" action="exo4form.php">
  <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="marque">Marque</label>
        <input type="titre" class="form-control" id="marque" placeholder="Votre marque" name="marque">
      </div>
    <div class="col-md-4 mb-3">
      <label for="modele">Modele</label>
      <input type="text" class="form-control" id="modele" placeholder="Votre modele" name="modele">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="couleur">Couleur</label>
      <input type="text" class="form-control" id="couleur" placeholder="Votre couleur"name="couleur">
    </div>
    <div class="col-md-3 mb-3">
      <label for="km">KM</label>
      <input type="text" class="form-control" id="km" name="km">
    </div>
    <div class="col-md-3 mb-3">
      <label for="carburant">Carburant</label>
      <input type="text" class="form-control" id="carburant" placeholder="Votre carburant" name="carburant">
    </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="annes">Annes</label>
      <input type="text" class="form-control" id="annes" placeholder="annes" name="annes">
    </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="fournisseur">Prix</label>
      <input type="text" class="form-control" id="fournisseur" placeholder="fournisseur" name="fournisseur">
    </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="puissance">Puissance</label>
      <input type="text" class="form-control" id="puissance" placeholder="puissance" name="fournisseur">
    </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="options">Options</label>
      <input type="text" class="form-control" id="options" placeholder="options" name="options">
    </div>
<br>
  <button class="btn btn-primary" type="submit">Envoi</button>
</form>
</div>

</body>
</html>