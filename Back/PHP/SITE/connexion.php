<?php
require_once("include/init.php");//connexion a la bdd
extract($_POST);

if(internauteEstConnecte()){
    header("Location: profil.php");
}


if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{
    session_destroy();
}
// Si l'indice 'action' est définit dans l'URL et qu'il a comme valeur 'deconnexion', cela veut dire que l'on cliqué sur le lien 'deconnexion',
// du coup on supprime le fishier session

if(isset($_GET['action'])&& $_GET['action'] == 'validate')
{
   $validate .="<div class='col-md-6 offset-md-3 alert alert-success text-center text-dark'>Félicitations !! Vous etes inscrit sur le site . Vous pouvez dés a present vous connecter!!</div>";
}

require_once("include/header.php");
?>

<h1 class="display-4 text-center">CONNEXION</h1><hr>

<?= $validate ?>

<?php //echo '<pre>'; echo print_r($_POST); echo '</pre>' 

if($_POST)

// On selectionne tout dans la table 'membre' à condition que la colonne
//pseudo ou email de la BDD soit bien égale au pseudo ou email saisie dans le formulaire 
{
    $verif_pseudo_email = $bdd->prepare("SELECT * FROM membre WHERE pseudo = :pseudo OR email = :email");
    $verif_pseudo_email->bindValue(':pseudo', $email_pseudo,  PDO::PARAM_STR);
    $verif_pseudo_email->bindValue(':email', $email_pseudo,  PDO::PARAM_STR);
    $verif_pseudo_email->execute();

    // si le rersultat de la requete de selectionne est superieur à 0, cela veut dire que l'internaute a saisie le bon email
    // ou le bon pseudo donc on retnre dans le if

    if($verif_pseudo_email->rowCount() > 0)
    {

    $membre = $verif_pseudo_email->fetch(PDO::FETCH_ASSOC);
    echo '<pre>'; echo print_r($membre); echo '</pre>';

    // si le mot de passe de la BDD est égale au mot de passe que l'internaute a saisi dans le formulaire, on entre dans le IF
    // if(password_verify($mdp, $membre['mdp])) / si on hache de mdp a l'inscription (password_hash) / password_verify permet de comparer une clé de hashage à une chaine de caracteres
   
//    on entre dans le IF seulement dans le cas ou internaute a saisi le bon email:pseudo et le bon mdp
    if($membre['mdp'] == $mdp)
    {

        // on passe en revue les données de l'internaute qui a saisi le bon email / pseudo et mdp
        foreach($membre as $key => $value)
        {
            if($key != 'mdp')
            {
                $_SESSION['membre'][$key] = $value;
                // pour chaque tour de boucle foreach, on enregistre
                // les données de l'internaite dans son fishier session
            }
        }
            // echo '<pre>'; echo print_r($_SESSION); echo '</pre>';
            header("Location: profil.php"); // aprés enregistrement des données de l'internaute dans son fishier session, on le redirige vars sa page profil
    }
        else // on entre dans le ELSE dans le cas ou l'internaute n'a pas saisi le bon mot de passe
        {
            $error .= "<div class='col-md-6 offset-md-3 text-center alert alert-danger'>Verifer le mot de passe!!</div>";
        }
    }
    else 
    {
       $error .= "<div class='col-md-6 offset-md-3 text-center alert alert-danger'>Le pseudo ou email : <strong>" . $email_pseudo . "</strong> est inconnu en BDD</div>";
    }
}
?>
<!-- <! 

1. Réaliser un formulaire de connexion avec les champs suivants : email ou pseudo / mot de passe / bouton subit 
2. Controler en PHP que l'on receptionne bien toute les données du formulaire -->

<h1 class="display-4 text-center"></h1>
<?= $error ?>
<form  class="col-md-4 offset-md-4 text-center" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="email_pseudo">Email ou Pseudo</label>
      <input type="text" class="form-control" id="email_pseudo" name="email_pseudo" placeholder="Entre votre email ou pseudo">
    </div>
  <div class="form-group col-md-12">
    <label for="mdp">Mot de passe</label>
    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
  </div>
  
  <button type="submit" class="col-md-12 btn btn-dark" name="form">Sign in</button>


<?php
require_once("include/footer.php");
?>
