<?php

echo '<pre>'; print_r($_POST); echo '</pre>';

if(iconv_strlen($_POST['pseudo']) > 3 && iconv_strlen($_POST['pseudo']) < 10)
{
    echo '<div class="col-md-2 offset-md-5 alert alert-success text-center mx-auto">La pseudo est bon</div>';
}
else {
    echo '<div class="col-md-2 offset-md-5 alert alert-danger text-center mx-auto">La pseudo n\'est bon</div>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire membre PHP :: EXO</title>
</head>
<body>
    <div class="container">
<form method="post" action="">
  <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="pseudo">Pseudo</label>
        <input type="titre" class="form-control" id="pseudo" placeholder="Votre pseudo" name="pseudo">
      </div>
    <div class="col-md-4 mb-3">
      <label for="mdp">Mot de passe</label>
      <input type="text" class="form-control" id="mdp" placeholder="Votre mdp" name="mdp">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
    </div>
<br>
  <button class="btn btn-primary" type="submit">Envoi</button>
</form>
</div>

</body>
</html>