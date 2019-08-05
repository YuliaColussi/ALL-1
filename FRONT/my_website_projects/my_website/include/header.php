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
    <!-- <script src="https://kit.fontawesome.com/1456345ba9.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <script src="js/anime.min.js"></script> -->
    <link rel="stylesheet" href="../my_website/include/css/index.css">
    <link rel="stylesheet" href="../my_website/include/css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>C.Real digital agency</title>
  </head>




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
                    <a href="<?= URL ?>index.php">Main</a>
                </li>
                <li>
                    <a href="<?= URL ?>design.php">Design</a>
                </li>
                <li>
                    <a href="<?= URL ?>website.php">Website</a>
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
                <?php else: ?>
                 <li>
            <a href="#inline" class="modalbox">Inscription</a>
          </li>
                 <li>
            <a href="<?= URL ?>connexion.php">Connexion</a>
          </li>
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
         <?php endif; ?>
         </div>
        </nav>
        <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
      
        <!-- <script src="../pop_up/js/jquery-1.7.1.min.js"></script> -->
        <!-- <script src="../pop_up/fancybox/jquery.fancybox.js"></script> -->
