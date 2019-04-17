<?php
require_once('include/init.php');
require_once('include/header.php');
extract($_GET);

?>

    <div class="row">

   
    <!-- here we control if we have a good URL 'categorie' -->

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
            <?php

            // Exo : 1. Requete de selection des catégories distinctes en BDD 
                    // 2. Boucler sur chaque catégorie et créer un lien 
            

           $resultat = $bdd->query("SELECT DISTINCT categorie FROM produit"); // запрос на выборку
        //    echo '<pre>'; print_r($resultat); echo '</pre>';
           while($categorie = $resultat->fetch(PDO::FETCH_ASSOC)):
        //    echo '<pre>'; print_r($categorie); echo '</pre>';
            ?>
          <a href="?categorie=<?= $categorie['categorie']?>" class="list-group-item alert-link text-dark text-center"><?= $categorie['categorie']?></a>
           <?php endwhile; ?>
           </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
            </li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" <img src="<?= URL ?>photo/woman_10_1920.jpg" alt="picture of a woman">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= URL ?>photo/zara-2014-fall-winter-campaign-03.jpg" alt="picture of a woman">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= URL ?>photo/zara-2014-fall-winter-campaign-05.jpg" alt="picture of a woman">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

         <?php
        if(isset($_GET['categorie'])): 
            // si il ya une catégorie dans l'URL, on selectionne les produits associés
            $resultat = $bdd->prepare("SELECT * FROM produit WHERE categorie = :categorie");
            // categorie dans la BDD égale à la categorie dans la URL
            $resultat->bindValue(':categorie', $_GET['categorie'], PDO::PARAM_STR);
            $resultat->execute();

            else: // sinon, il n'y a pas de catégorie dans l'URL, on selectionne tout les produits

            $resultat = $bdd->prepare("SELECT * FROM produit");
            // categorie dans la BDD égale à la categorie dans la URL
            $resultat->execute();

            endif; 

            while($produits = $resultat->fetch(PDO::FETCH_ASSOC)):
                // concretely here we trun the object PDOStatement into some result инкапсуляуия
                // echo '<pre>'; print_r($produits); echo '</pre>';
        ?>

          <div class="card-change col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="fiche_produit.php?id_produit=<?= $produits['id_produit']?>"><img class="card-img-top" src="<?= $produits['photo']?>" alt="<?= $produits['titre']?>"></a>
                <!-- in all the products we choose the indices that interest us -->

              <div class="card-body">
                <h4 class="card-title">
                  <a href="fiche_produit.php?id_produit=<?= $produits['id_produit']?>"><?= $produits['titre']?></a>
                </h4>
                <h5><?= $produits['prix']?>€</h5>
                <p class="card-text"><?= $produits['description']?></p>
              </div>
              <div class="card-footer">
                <a href="fiche_produit.php?id_produit=<?= $produits['id_produit']?>" class="alert-link text-dark">Voir le détail<i class="fas fa-search"></i></a>
              </div>
            </div>
          </div>


           <?php endwhile; ?>

      </div>


<br>
<br>
<br>
<br>
<br>
    </div>

<?php
require_once('include/footer.php');

?>