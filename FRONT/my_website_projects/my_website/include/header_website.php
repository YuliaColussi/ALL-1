<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crossroads Slideshow | Codrops</title>
		<meta name="description" content="An experimental slideshow with an inclined look with three slide previews and a content view on click." />
		<meta name="keywords" content="slideshow, javascript, tweenmax, rotation, animation, css" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="include/css/base.css"/>
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	 <nav class="menu-wrap">
        <div class="logo">
            <img src="<?= URL ?>images/logo.png" alt="une image de logo">
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
                    <a href="test.php">Test</a>
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
            <!-- <a href=nscription.php">Inscription</a> -->
          </li>
                 <li>
            <a class="button-one">Connexion</a>
            <!-- <a href="connexion.php">Connexion</a> -->
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
              
<div class="pop-up-form">
<form  class="form1" id="ajax-inscription" method="post">
  <a href="?action=subscribe" class="close"><i class="fas fa-times"></i></a>
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


<?= $error ?>
<!-- <div class="pop-up-form-one">
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
     <div class="overlay"></div>  -->

         <!-- <a href="#" class="close">Close</a> -->
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
  