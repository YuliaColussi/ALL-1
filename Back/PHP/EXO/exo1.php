<!--EXO  1.1  -->
<?php
echo '<pre>'; print_r($_POST); echo '</pre>';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Entrainement PHP</title>
</head>
<body>
    <div class="container">
<form method="post" action="">
  <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="nom">Nom</label>
        <input type="nom" class="form-control" id="nom" placeholder="Votre nom" name="nom">
      </div>
    <div class="col-md-4 mb-3">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" id="prenom" placeholder="Votre prenom" name="prenom">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Votre address"name="address">
    </div>
    <div class="col-md-3 mb-3">
      <label for="ville">Ville</label>
      <input type="text" class="form-control" id="ville" placeholder="Votre ville" name="ville">
    </div>
    <div class="col-md-3 mb-3">
      <label for="code_post">Code postal</label>
      <input type="text" class="form-control" id="code_post" placeholder="75015" name="code_post">
    </div>
</div>
    <div class="form-group pl-0 col-md-6 mb-3">
      <label for="sexe" name="sexe">Sexe</label>
      <select id="sexe" class="form-control">
        <option selected>Choose...</option>
        <option>Homme</option>
        <option>Femme</option>
      </select>
    </div>
<div class="description">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
<br>
  <button class="btn btn-primary" type="submit">Envoi</button>
</form>
</div>

</body>
</html>