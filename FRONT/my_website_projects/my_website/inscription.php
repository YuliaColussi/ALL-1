<?php
require_once("include/init.php");
extract($_POST);


if(internauteEstConnecte()){
    header("Location: profil.php");
}


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

      // $_POST['mdp']  = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // $2y$10$SV3bb8OkXQr9JLYeDsMQ/.RARkJudv6KP8wYoaxk.pK1TtqVwkG8u thats what it gives
      // on se conserve jamais en cliar les mots de passe dans la BDD, password_hash permet de créer une clé de hashage

        $data_insert = $bdd->prepare("INSERT INTO member_form(pseudo, mdp, email) VALUES (:pseudo, :mdp, :email)");
        
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


<h1></h1>
<?= $error ?>
<form  class="form1" method="post" action="">
  <div>
    <div>
      <label for="pseudo">Pseudo</label>
      <input type="text" id="pseudo" name="pseudo" placeholder="Entre votre pseudo">
    </div>
  <div>
    <label for="mdp">Mot de passe</label>
    <input type="text" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
  </div>
    <div>
      <label for="conf_mdp">Confirmer votre mot de passe</label>
      <input type="text" id="conf_mdp" name="conf_mdp">
    </div>
      <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="form">Sign in</button>
</form>


<?php


require_once("include/footer.php");

?>


