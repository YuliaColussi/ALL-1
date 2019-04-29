<?php
require_once('include/init.php');
require_once('include/header.php');
extract($_GET);

// Exo: 
// 1. Réaliser le requete permettant de selectionner le produit par rapport à l'id_produit envoyé dans l'URL
// 2. Associer une méthode pour rendre le résultat exploitable 
// 3. Créer une fiche produit avec les informations du produit : photo / catégorie / titre / description / couleur / taille / prix / public / 
// un bouton d'ajout au panier
?>

    <?php
    if(isset($_GET['id_produit'])): 
    // si l'indice 'id_produit' est définit dans la URL

    //                     // si il ya une catégorie dans l'URL, on selectionne les produits associés
    $resultat = $bdd->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $resultat->bindValue(':id_produit', $_GET['id_produit'], PDO::PARAM_STR);    
    $resultat->execute();
    $produits = $resultat->fetch(PDO::FETCH_ASSOC);
    // echo '<pre>'; print_r($produits); echo '</pre>';
    ?>
    <div class="col-lg-5 text-center">
            <div class="card mt-4">
            <a href="fiche_produit.php?id_produit=<?= $produits['id_produit']?>"><img height="500px" class="card-img-top" src="<?= $produits['photo']?>" alt="<?= $produits['titre']?>"></a>
                    <!-- in all the products we choose the indices that interest us -->
            <div class="card-body">
            <h4 class="card-title">
        <a href="<?= $produits['id_produit']?>"><?= $produits['titre']?></a>
        </h4>
        <p class="card-text"><?= $produits['description']?></p>
        <p class="col-md-12"><?= $produits['taille']?></p>
        <h5><?= $produits['prix']?>€</h5>
        <div class="card-footer bg-dark">
        <a href=<?= $produits['id_produit']?> class="alert-link text-light">Ajouter au panier<i class="fas fa-shopping-basket"></i></a>
        </div>
        </div>

<?php

    else: 
      header("location: boutique.php");
    endif;  
      require_once('include/footer.php');

?>