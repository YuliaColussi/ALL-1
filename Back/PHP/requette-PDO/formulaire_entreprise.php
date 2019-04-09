<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire entreprise</title>
</head>
<body>
<div class="container">

<!-- 1. Réaliser un formulaire correspontant à la table 'employes' de la BDD 'entreprise' (sauf id_employes)
     2. Controler en PHP que l'on receptionne bien tout les champes du formulaire
     3. Connexion BDD
     4. Traitement PHP/SQL permettant l'insertion d'un employé à partir du formulaire -->

<h2 class="display-4 text-center">01. PDO : Connexion</h2><hr>

<form  class="col-md-4 offset-md-4 text-center" method="post" action="">
  <div class="form-row">
          <div class="form-group col-md-6">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="prenom">
          </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" id="nom" class="form-control" name="nom">
    </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sex" id="sex" value="f">
  <label class="form-check-label" for="inlineCheckbox1">F</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="sex" name="sex" value="m">
  <label class="form-check-label" for="inlineCheckbox2">H</label>
</div>
  <div class="form-group">
    <label for="service">Service</label>
    <input type="text" class="form-control" id="service" name="service">
  </div>
    <div class="form-group col-md-10">
      <label for="date_embauche">Date embauche</label>
      <input type="date" class="form-control" name="date_embauche" id="date_embauche">
    </div>
    <div class="form-group col-md-10">
      <label for="salaire">Salaire</label>
      <input type="number" class="form-control" name="salaire" id="salaire">
    </div>
    <button type="submit" name="form2" class="col-md-6 btn btn-primary">Sign in</button>
    </div>
    </form>
    <?php
    // 2
        echo '<pre>'; print_r($_POST); echo '</pre>';

    // 3

     $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


    //  4
    if($_POST)//si on valide le formulaaire, on rentre dans la condition
    {
        $resultat = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) 
        VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[sex]', '$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]');");
        echo '<div class="col-md-6">employe <strong>' . $_POST['nom']  .'</strong> a bien été enregistre</div>';

        // On utilise la superglobale $_POST pour alleer crocheter à chaque champs du formulaire afin de recuperer sa valeur
    }

        // $result->bindParam(:prenom, $prenom);
        // $result->bindParam(:nom, $nom);
        // $result->bindParam(:sexe, $sex);
        // $result->bindParam(:service, $service);
        // $result->bindParam(:date_embauche, $date_embauche);
        // $result->bindParam(:salaire, $salaire);


//         if ($result->exec()) {
//      echo "New record created successfully";
// } else {
//     echo "Unable to create record";
// }

    ?>
    </div>
</body>
</html>