
    <?php
    require_once("init.php");
    extract($_POST);

    
        // <!-- INSCRIPTION -->

    // variable msg erreur :
    $errorPseudo = "";
    $errorMdp = "";
    $errorMdpVerif = "";
    $errorEmail = "";
    $donnees = "";
    // echo '<pre style="color:white;z-index:auto;">';
    // print_r($_POST);
    // echo '</pre>';
    // <!-- INSCRIPTION -->
    if ($_POST) {
        if (empty($pseudo) || iconv_strlen($pseudo) < 1  || iconv_strlen($pseudo) > 20) {
            $errorPseudo .= '<span class="text-danger">problème de pseudo 20 cractères max </span>';
        }
        // if (empty($mdp) || !preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp)) {
        //     $errorMdp .= '<span class="text-danger">saisissez un mot de passe </span>';
        // }
        if (empty($mdp)) {
            $errorMdp .= '<span class="text-danger">saisissez un mot de passe </span>';
        }
        if (empty($conf_mdp) || $conf_mdp != $mdp) {
            $errorMdpVerif .= '<span class="text-danger">non reconnu </span>';
        }
        if (empty($email) ||  !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmail .= '<span class="text-danger">saisissez un email valide </span>';
        }
        // insertion data base
        if (empty($errorPseudo) && empty($errorMdp) && empty($errorMdpVerif) && empty($errorEmail)) {
            //protection contre les injections
            foreach ($_POST as $indice => $valeur) {
                $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
            }
            $pdo = $bdd;
            $data_insert = $pdo->prepare("INSERT INTO member_form (pseudo, mdp, email) VALUES (:pseudo, :mdp, :email)");
            $data_insert->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
            $data_insert->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $data_insert->bindValue(':email', $email, PDO::PARAM_STR);
            $data_insert->execute();
        } // END if(empty($errorPseudo) && empty($errorMdp) && 
    } //END  if ($_POST)

    
    //  <!-- INSCRIPTION END -->
    
    // CONNEXION

  $resultat = $bdd -> query('SELECT * FROM member_form');
  $connexion = $resultat->fetch(PDO::FETCH_ASSOC);
    
    
     if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
     {
         session_destroy();
     }
     // Si l'indice 'action' est définit dans l'URL et qu'il a comme valeur 'deconnexion', cela veut dire que l'on cliqué sur le lien 'deconnexion',
     // du coup on supprime le fishier session
    
     if(isset($_GET['action'])&& $_GET['action'] == 'validate')
     {
        $validate .="<div id='result_form' class='col-md-6 offset-md-3 alert alert-success text-center text-dark'>Félicitations !! Vous etes inscrit sur le site . Vous pouvez dés a present vous connecter!!</div>";
     }

if($_POST['form'] )
     {
         $verif_pseudo_email = $bdd->prepare("SELECT * FROM member_form WHERE pseudo = :pseudo OR email = :email");
         $verif_pseudo_email->bindValue(':pseudo', $email_pseudo,  PDO::PARAM_STR);
         $verif_pseudo_email->bindValue(':email', $email_pseudo,  PDO::PARAM_STR);
         $verif_pseudo_email->execute();

if($verif_pseudo_email->rowCount() > 0)
         {
    
         $membre = $verif_pseudo_email->fetch(PDO::FETCH_ASSOC);

if($membre['mdp'] == $mdp)
         {
    
    //    // on passe en revue les données de l'internaute qui a saisi le bon email / pseudo et mdp
foreach($membre as $key => $value)
            {
            if($key != 'mdp')
            {
                     $_SESSION['member_form'][$key] = $value;
                 }
             }
                 header("Location: profil.php"); 
         }
            else 
            {
                 $error .= "<div id='result_form' class='col-md-6 offset-md-3 text-center alert alert-danger'>Verifer le mot de passe!!</div>";
             }
         }
         else 
        {
            $error .= "<div id='result_form' class='col-md-6 offset-md-3 text-center alert alert-danger'>Le pseudo ou email : <strong>" . $email_pseudo . "</strong> est inconnu en BDD</div>";
         }
     }
    
    
    ?>
    
    <!--  CONNEXION END -->
    
    
    <!-- AJAX -->
    
  <?php 
    
    // if (isset($_POST["name"]) && isset($_POST["phonenumber"]) ) { 
    
    //   // Формируем массив для JSON ответа
    //     $result = array(
    //       'name' => $_POST["name"],
    //       'phonenumber' => $_POST["phonenumber"]
    //     ); 
    
    //     // Переводим массив в JSON
    //     echo json_encode($result); 
    // }
    
    ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- <script src="../js/ajax.js"></script> -->
  <script href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../include/css/base.css">
    <link rel="stylesheet" href="../include/css/normalize.css">

    	
    <title>C.Real digital agency</title>
    
  </head>


<!-- AJAX END  -->


        <nav class="menu-wrap">
        <div class="logo">
            <img src="<?= URL ?>images/logo.png" alt="une image de logo">
        </div>
        <div class="menu">
            <ul>
              <?php if(internauteEstConnecte()):// accés membre connecté NON ADMIN?>
                <li>
                    <a href="<?= URL ?>index.php">Home</a>
                </li>
                <li>
                    <a href="<?= URL ?>design.php">Design</a>
                </li>
                <li>
                    <a href="<?= URL ?>test.php">Website</a>
                </li>
            <li>
            <a href="<?= URL ?>profil.php">Profil</a>
          </li>
          <li>
            <a href="<?= URL ?>?action=deconnexion">Deconnexion</a>
          </li>

                <?php else: ?>
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
            <a class="button">Inscription</a>
            <!-- <a href=nscription.php">Inscription</a> -->
          </li>
                 <li>
            <a class="button-one"  name="connect">Connexion</a>
            <!-- <a href="connexion.php">Connexion</a> -->
          </li>
          </ul>

   <!-- INSCRIPTIONS -->
              
<div class="pop-up-form">
<form  class="form1" id="ajax-inscription" method="post">
  <a href="#" class="close"><i class="fas fa-times"></i></a>
  <img class="logo" alt="dribble-logo" src="<?= URL ?>images/logo.png"/>
  <p class="signin">Subscribe!</p>
  <p class="signin-text">Login with Twitter, Facebook,<br/> Google or:</p>
  <div class="signin-row">
    <i class="ic1 fab fa-twitter"></i>
    <i class="ic2 fab fa-facebook"></i>
    <i class="ic3 fab fa-google"></i>
  </div>
  <div>
    <div>
      <label for="pseudo">Pseudo</label>
        <?= $errorPseudo; ?>
      <input type="text" id="pseudo" name="pseudo" placeholder="Entre votre pseudo">
    </div>
  <div>
    <label for="mdp">Mot de passe</label>
      <?= $errorMdp; ?>
    <input type="text" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
  </div>
    <div>
      <label for="conf_mdp">Confirmer votre mot de passe</label>
        <?= $errorMdpVerif; ?>
      <input type="text" id="conf_mdp" name="conf_mdp" placeholder="Confirme votre mot de passe">
    </div>
      <div>
      <label for="email">Email</label>
       <?= $errorEmail; ?>
      <input type="text" id="email" name="email" placeholder="Email">
    </div>
  </div>
 
  <button type="submit" id="btn" class="btn btn-primary">Sign in</button>
</form>

                </div>
                <div class="overlay"></div> 
<!-- INSCRIPTIONS END -->

<!-- CONNEXION  -->

<?= $validate ?>
<?= $error ?>
 <div class="pop-up-form-one">
<form  class="form" method="post" action="">
  <a href="#" class="close"><i class="fas fa-times"></i></a>
    <img class="logo" alt="dribble-logo" src="<?= URL ?>images/logo.png"/>
  <p class="signin">Subscribe!</p>
  <p class="signin-text">Login with Twitter, Facebook,<br/> Google or:</p>
  <div class="signin-row">
    <i class="ic1 fab fa-twitter"></i>
    <i class="ic2 fab fa-facebook"></i>
    <i class="ic3 fab fa-google"></i>
  </div>
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
     </div>
     <div class="overlay"></div>  

<!-- CONNEXION  END-->
      <?php endif; ?>
      <?php if(internauteEstConnecteEtEstAdmin()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Back office</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_projects.php">Gestion de Projects</a>
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_membre.php">Gestion de Membre</a>
              <a class="dropdown-item" href="<?= URL ?>admin/gestion_messages.php">Gestion de Messages</a>
            </div>
          </li>
         </ul>
         <?php endif; ?>
         </div>
         
        </nav>
