<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire fruit PHP</title>
</head>
<body>
    <!-- 
        1. Réaliser un formulaire HTML permettant de selectionner un fruit (liste déroulante) et de saisir un poids (champ input)
        2. Traitement permettant d'afficher le prix en passant par le fonction déclarée 'calcul'
        3.  Faire en sorte de garder le dernier fruit selectionné et le dernier poids saisie dans le formulaire lorsque
    // celui ci est validé-->

<form method="post" action"" class="col-md-4 offset-md-4">
  <div class="form-group">
    <label for="fruit">Example select</label>
    <select class="form-control" name="fruit" id="fruit">

    <!-- si un fruit a bien été selectionné et que ce fruit est égal à 'carises', alors on affiche selected dans la balise option -->
      <option value="bananes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == "bananes") echo 'selected' ?>>bananes</option>

      <option value="pommes" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == "pommes") echo 'selected' ?>>pommes</option>

      <option value="peches" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == "peches") echo 'selected' ?>>peches</option>

      <option value="cerises" <?php if(isset($_POST['fruit']) && $_POST['fruit'] == "cerises") echo 'selected' ?>>cerices</option>
    </select>
  </div>
  <div class="form-group">
    <label for="poids">Poids</label>
    <input type="text" class="form-control" name="poids" id="poids" value="<?php if(isset($_POST['poids'])) echo $_POST['poids'] ?>"> 
    <!-- this stuff works exactly like a value, but better - it remebers the number that you have put into -->
  </div>
    <button type="submit" class="col-md-12 btn btn-dark mb-4">Calcul</button>
</form>

<?php

echo '<pre>'; print_r($_POST); echo '</pre>';

require_once('fonction.php');
// echo calcul ($_POST['fruit'],['poids']);

if($_POST){
    echo calcul($_POST['fruit'], $_POST['poids']);
    // on transmet les données saisies dans le formilaire à la fonction calcul grace à la method $_POST
}

?>

</body>
</html>