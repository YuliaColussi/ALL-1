<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="description" content="A page background effect where SVG shapes morph and transform on scroll" />
    <meta name="keywords" content="background, svg, morph, animation, scroll, shape, web development, css, javascript" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <script src="js/lazy-line-painter-1.9.6.min.js"></script> 
        <!-- <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!-- <script src="https://kit.fontawesome.com/1456345ba9.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <script src="js/anime.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="../my_website/include/css/index.css">
    <link rel="stylesheet" href="../my_website/include/css/normalize.css">
  
    <title>C.Real digital agency</title>
    
  </head>


<?php
require_once("include/init.php");
extract($_POST);

// <!-- INSCRIPTION -->


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

        $data_insert = $bdd->prepare("INSERT INTO member_form(pseudo, mdp, nom, prenom, email) VALUES (:pseudo, :mdp, :nom, :prenom, :email)");
        
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



//  <!-- INSCRIPTION END -->

// CONNEXION

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

<?= $validate ?>

<?php //echo '<pre>'; echo print_r($_POST); echo '</pre>' 

if($_POST)

// On selectionne tout dans la table 'membre' à condition que la colonne
//pseudo ou email de la BDD soit bien égale au pseudo ou email saisie dans le formulaire 
{
    $verif_pseudo_email = $bdd->prepare("SELECT * FROM member_form WHERE pseudo = :pseudo OR email = :email");
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
                $_SESSION['member_form'][$key] = $value;
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

<!--  CONNEXION END -->


  






    <!-- <form class="form1" method="post" action="">
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
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="Votre nom">
    </div>
    <div>
      <label for="conf_mdp">Confirmer votre mot de passe</label>
      <input type="text" id="conf_mdp" name="conf_mdp">
    </div>
    <div>
      <label for="prenom">Prenom</label>
      <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
    </div>
      <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
  </div>
 
  <button id="send" type="submit" class="btn btn-primary button" name="form">Sign in</button>
</form> --> 
        <nav class="menu-wrap">
        <div class="logo">
            <img src="#" alt="une image de logo">
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="<?= URL ?>index.php">Home</a>
                </li>
                <li>
                    <a href="<?= URL ?>design.php">Design</a>
                </li>
                <li>
                    <a href="<?= URL ?>website.php">Website</a>
                </li>
                <li>
                    <a href="<?= URL ?>test.php">Test</a>
                </li>
                <li>
                    <a href="#contact">Work with us!</a>
                </li>
                
         <?php if(internauteEstConnecte()):// accés membre connecté NON ADMIN?>
          <li>
            <a href="<?= URL ?>profil.php">Profil</a>
          </li>
          <li>
            <a href="<?= URL ?>connexion.php?action=deconnexion">Deconnexion</a>
          </li>
         </ul>
                <?php else: ?>
                    <div class="container">
                    <div class="element">
                      <ul>
                 <li>
            <a class="button">Inscription</a>
          </li>
                 <li>
            <a class="button-one" >Connexion</a>
          </li>
          </ul>
                </div>
                </div>
                <!-- <div class="pop-up-form">
                    <form action="" class="form">
                        <input type="text" name="first-name" id="" placeholder="Имя">
                        <input type="text" name="second-name" id="" placeholder="Фамилия">
                        <input type="text" name="phone" id="" placeholder="Телефон">
                        <button type="submit">Sens us!</button>
                    </form>
                    <a href="#" class="close">Close</a>
                </div>
                <div class="overlay"></div> -->
   <!-- INSCRIPTIONS -->
                <?= $error ?>
<div class="pop-up-form">
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
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="Votre nom">
    </div>
    <div>
      <label for="conf_mdp">Confirmer votre mot de passe</label>
      <input type="text" id="conf_mdp" name="conf_mdp">
    </div>
    <div>
      <label for="prenom">Prenom</label>
      <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
    </div>
      <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="form">Sign in</button>
</form>
                    <a href="#" class="close">Close</a>
                </div>
                <div class="overlay"></div> 
<!-- INSCRIPTIONS END -->

<!-- CONNEXION  -->


<?= $error ?>
<div class="pop-up-form-one">
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
         </div>
</form>
    <a href="#" class="close">Close</a>
     </div>
     <div class="overlay"></div> 


<!-- CONNEXION  END-->
      <?php endif; ?>
      <?php if(internauteEstConnecteEtEstAdmin()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Back office</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_boutique.php">Gestion Boutique</a>
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_commande.php">Another Commande</a>
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_membre.php">Something Membre</a>
            </div>
          </li>
         </ul>
         <?php endif; ?>
         </div>
         
        </nav>
  
      
        <!-- <script src="../pop_up/js/jquery-1.7.1.min.js"></script> -->
        <!-- <script src="../pop_up/fancybox/jquery.fancybox.js"></script> -->
