<!--EXO  1.2  -->
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
    <title>Formulaire produit PHP :: EXO</title>
</head>
<body>
    <div class="container">
<form method="post" action="">
  <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="titre">Titre</label>
        <input type="titre" class="form-control" id="titre" placeholder="Votre titre" name="titre">
      </div>
    <div class="col-md-4 mb-3">
      <label for="couleur">Couleur</label>
      <input type="text" class="form-control" id="couleur" placeholder="Votre couleur" name="couleur">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="taille">Taille</label>
      <input type="text" class="form-control" id="taille" placeholder="Votre taille"name="taille">
    </div>
    <div class="col-md-3 mb-3">
      <label for="poids">Poids</label>
      <input type="text" class="form-control" id="poids" name="poids">
    </div>
    <div class="col-md-3 mb-3">
      <label for="prix">Prix</label>
      <input type="text" class="form-control" id="prix" placeholder="prix" name="prix">
    </div>
</div>
<div class="description">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="stock">Stock</label>
      <input type="text" class="form-control" id="stock" placeholder="stock" name="stock">
    </div>
    <div class="col-md-3 mb-3 pl-0">
      <label for="fournisseur">Prix</label>
      <input type="text" class="form-control" id="fournisseur" placeholder="fournisseur" name="fournisseur">
    </div>
<br>
  <button class="btn btn-primary" type="submit">Envoi</button>
</form>
</div>

</body>
</html>