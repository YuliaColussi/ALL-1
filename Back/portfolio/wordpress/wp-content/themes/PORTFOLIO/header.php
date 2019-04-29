<!DOCTYPE html>
<html <?php language_attributes(); //fonction dee wp qui retourn la langue du site?>>

<head>
    <meta <?php bloginfo('charset'); //retourn le bon codage - fonction wordpress?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
    <!-- fonction wordpress qui retourn URL du thème portfolio -->
    <title><?php bloginfo('name');?></title>
    <?php  wp_head();//ça permet de charge des fishiers indispensables à wordpress (fishier js, css ..) et permet de récupérer la sidebar en haut de la page ?>
</head>
<body>

<div class="container-fluid px-0">

<div class="d-flex">
    <div class="col-md-4 hauteur">
        <?php dynamic_sidebar('HAUT-gauche')?>
        <!-- dynamic_sidebar() est une fonction wordpress qui permet de faire appel aux régions que l'on a créer dans le fishier functions.php  -->
        
    </div>
    <div class="col-md-4 hauteur">
    <?php dynamic_sidebar('HAUT-center')?>
        
    </div>
    <div  class="col-md-4 hauteur">
    <?php dynamic_sidebar('HAUT-droit')?>
    
</div>

</div>
<!-- beginning of navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <a class="navbar-brand text-light" href="#"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!-- cette fonction permet d'importer le menu principal que l'on a créer dans le fishier fonctions.php
container_class' => 'menu_header : le menu aura comme un class 'menu_header'
'theme_location'  => 'primary'qui permet preciser qui c'est le menu principal-->
<?php wp_nav_menu(array('container_class' => 'menu_header', 'theme_location' => 'primary')) ?>
     
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<!-- end of navbar -->
<div class="col-md-12 px-0 h-entetes bg-danger">
<?php dynamic_sidebar('entetes')?>



</div>

</div>

<section class="ma-section">

</body>
</html>