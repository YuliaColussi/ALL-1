

<?php

// I control if I filleda ll the champs


echo '<pre>'; print_r($_POST); echo '</pre>';



// I connect to BDD

    $bdd = new PDO('mysql:host=localhost;dbname=eleve', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


    
    $nomErreur = "";
    $prenomErreur = "";
    $classeErreur = "";
    $parentsErreur = "";
    $telephoneErreur = "";
    if($_POST)// If I valide a formulaire, I enter the condition
    {
        
        
        if(empty($_POST['prenom']) || iconv_strlen($_POST['prenom']) < 2 || iconv_strlen($_POST['prenom']) > 50)
        {
            $prenomErreur .= '<small class="text-danger">**Saissisez un prenom entre 2 et 50</small>';
        }
        if(empty($_POST['nom']) || iconv_strlen($_POST['nom']) < 5 || iconv_strlen($_POST['nom']) > 10)
        {
            $nomErreur .= '<small class="text-danger">**Saissisez un nom entre 5 et 10</small>';
        }
        if(!preg_match("#^[0-9]{10}+$#", '$_POST[telephone]'))
        {
            $nomErreur .= '<small class="text-danger">**Saissisez un nom entre 5 et 10</small>';
        }
        // I put it into a BDD if I dont have an erreur message
        if(empty($nomErreur) && ($prenomErreur) && ($telephone))
        { 
            $resultat = $bdd->prepare("INSERT INTO eleve(nom, prenom, classe, parents, telephone)VALUES('$_POST[nom]', '$_POST[prenom]','$_POST[classe]', '$_POST[parents]', '$_POST[telephone]')");
            // $eleve = $resultat->fetch(PDO::FETCH_ASSOC);
            echo '<div class="col-md-6 bd-info">Eleve <strong>' . $_POST['nom']  .'</strong> a bien ete enregistré </div>';


            // we can also unsert into BDD this way
            // $resultat = $bdd->prepare("INSERT INTO eleve(nom, prenom, classe, parents, telephone)VALUES(:nom, ':prenom,:classe, :parents, :telephone)");
            // foreach($_POST as =key => $value)
            // {
            //     $nexELEVE->bindValue('$key'; :value, PDO::PARAM_STR);
            // }
            // $newEleve->execute();
            // $msgSuccess = '<div class="alert alert-success">Bien enregistreé</div>';
    }

}// fin if($_POST)


// SHOW ALL THE BDD ON THE PAGE

$show = $bdd->query("SELECT * FROM eleve");

while($eleve = $show->fetch(PDO::FETCH_ASSOC))
{

echo "<pre>"; print_r($eleve); echo "</pre>"; 
echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-info text-center">';
echo $eleve['nom'] . '<hr>'; // pour chaque tour de boucle,, donc pour chaque tableau ARRAY, on va crocheter aux differentes indices
echo $eleve['prenom'] . '<hr>';
echo $eleve['classe'] . '<hr>';
echo $eleve['parents']. '<hr>';
echo $eleve['telephone'];
echo '</div>';
 }

 echo '<hr><h2 class="display-4 text-center">FORM</h2><hr>';

 

?>


<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Formulaire parents</title>
  </head>
  <body>

<div class="container">
<h1 class="display-4 text-center"></h1>
<form method="post" action="">
<?php echo $msgSuccess ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <?php echo $nomErreur ?>
      <label for="nom">nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entre votre nom">
    </div>
  <div class="form-group">
  <?php echo $prenomErreur ?>
    <label for="mdp">prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prenom">
  </div>
    <div class="form-group col-md-6">
      <?php echo $classeErreur ?>
      <label for="classe">classe</label>
      <input type="text" class="form-control" name="classe" id="classe" placeholder="Votre classe">
    </div>
    <div class="form-group col-md-6">
      <?php echo $parentsErreur ?>
      <label for="parents">parents</label>
      <input type="text" class="form-control" id="parents" name="parents">
    </div>
    <div class="form-group col-md-6">
      <?php echo $telephoneErreur ?>
      <label for="telephone">telephone</label>
      <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Votre telephone">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="form">Enregistre</button>
</form>
</div>



