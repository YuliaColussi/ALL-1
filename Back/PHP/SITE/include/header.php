<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>include/css/style.css">

    <title>Bienvenue dans ma boutique de OUFF!!</title>
  </head>
  <body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Ma boutique de OUFFF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">

         <?php if(internauteEstConnecte()):// accés membre connecté NON ADMIN?>
          <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>boutique.php">Boutique</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>profil.php">Profil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>panier.php">Panier</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>connexion.php?action=deconnexion">Deconnexion</a>
          </li>
          
      <?php else: ?>
             <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>boutique.php">Boutique</a>
          </li>
                 <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>inscription.php">Inscription</a>
          </li>
                 <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>connexion.php">Connexion</a>
          </li>
                 <li class="nav-item active">
            <a class="nav-link" href="<?= URL ?>panier.php">Panier</a>
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


        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    
    <section class="container mon-conteneur">