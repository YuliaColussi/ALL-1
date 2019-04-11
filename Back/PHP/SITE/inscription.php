<?php
require_once("include/init.php");
extract($_POST);
// 4
// CONTROLE MDP
if(isset($_POST['form'])) {
echo '<pre>'; print_r($_POST); echo '</pre>';
    if ($_POST['mdp'] !== $_POST['conf_mdp']) 
    {
        $error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Le mots de passes sont pas pareils </div>';
    }


// CONTROLE PSEUDO
// $_POST['pseudo'] --> $pseudo
    $verif_pseudo = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");

    $verif_pseudo->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount() > 0)
    {
        $error .= "<div class='col-md-6 offset-md-6 text-center alert alert-danger'>Le pseudo  - <strong>" .
        $pseudo . '</strong>est déja existante en BDD.</div>';
    }

    


    
    // Exo: si l'internaute a bien rempli le formulaire, cela veut dire qu'il 
    // n'est passé dans aucune conditions IF donc la variable $error est vide
    // nous pouvons donc executer le traitement de l'insetion (requete préparée)
    
    
    if(empty($error)) {
        $data_insert = $bdd->prepare("INSERT INTO membre(pseudo, mdp, nom, prenom, civilite, email, ville, code_postal, adresse) VALUES (:pseudo, :mdp, :nom, :prenom, :civilite, :email, :ville, :code_postal, :adresse)");
        
      foreach($_POST as $key=>$value)
        { 
        if($key != 'conf_mdp' && $key != 'form')
            {
            $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            // $data_insert->binfValue(":pseudo, 'Iuliia', PDO::PARAM_STR);
            // $data_insert->binfValue(":email, 'yuliabelova2307@gmail.com', PDO::PARAM_STR);
            }
        }
      $data_insert->execute();
      header("Location: connexion.php?action=validate"); // header() fonction prédéfiniequi permet d'effectuer une redirection de page / URL
    }
    
}
    require_once("include/header.php");
?>
<!--
1. Créer un formulaire HTML correspondant à la table membre de la BDD 'site'
(sauf id_membre et statut), ajoute le champs 'confirmer mot de passe'
2. Controler en PHP que l'on receptionne bien toute les données du
formulaire ($_POST)

3. Controler la disponibilité du pseudo 
4. Faites en sorte d'informer l'internaute si le mot de passe ne sont pas indiques-->


<h1 class="display-4 text-center"></h1>
<?= $error ?>
<form  class="form1" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pseudo">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entre votre pseudo">
    </div>
  <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
  </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
    </div>
    <div class="form-group col-md-6">
      <label for="conf_mdp">Confirmer votre mot de passe</label>
      <input type="text" class="form-control" id="conf_mdp" name="conf_mdp">
    </div>
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
    </div>
      <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="civilite">Civilite</label>
      <select id="civilite" class="form-control" name="civilite">
        <option selected>Choose...</option>
        <option value="m" name="m">m</option>
        <option value"f" name="f">f</option>
      </select>
    </div>
  <div class="form-group col-md-6">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="adresse">Address</label>
      <input type="text" class="form-control" name="adresse" id="adresse">
    </div>
    <div class="form-group col-md-2">
      <label for="code_postal">code_postal</label>
      <input type="text" class="form-control" name="code_postal" id="code_postal">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="form">Sign in</button>
</form>


<?php
// 2





require_once("include/footer.php");

?>


