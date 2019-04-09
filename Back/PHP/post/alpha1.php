<!-- EXERCICE 1 : 

a- Créer un formulaire d'inscription (methode "POST") avec les champs :
=> Prenom
=> Nom
=> email
=> Adresse
=> cade postal
=> Genre (f/h)

b- Afficher dans un tableau PHP les valeurs saisies dans le formulaire.

c- Effectuer tous les contrôles des champs
-->

<?php

// exo b
echo '<pre>'; print_r($_POST); echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="">
  <div class="form-row">
      <div class="form-group col-md-6">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prenom">
          </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="id" id="email" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
  </div>
    <div class="form-group col-md-2">
      <label for="zip">Code postale</label>
      <input type="number" class="form-control" name="zip" id="zip">
    </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">F</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">H</label>
</div>
    <button type="submit" name="form2" class="col-md-2 btn btn-primary ">Sign in</button>
    <br>
    <br>
    <br>
    </div>
</form>
</body>
</html>