<?php
require_once('../include/init.php');
extract($_POST);

// S    i l'internaute n'est pas connecté est ne pas ADMIN, il n'a rien à fair ici
//on le redirige vers le page connexion.php
if(!internauteEstConnecteEtEstAdmin())
{
    header("Location:" . URL . "connexion.php");
}


// ------------------ENREGISTREMENT PHOTO

if($_POST)
{
    $photo_bdd = '';
    if(!empty($_FILES['photo']['name']))
    {
        $nom_photo = $reference . '-' . $_FILES['photo']['name'];
        echo $nom_photo . '<br>';

        $photo_bdd  = URL . "photo/$nom_photo";
        echo $photo_bdd . '<br>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        echo $photo_dossier . '<br>';

        copy($_FILES['photo']['tmp_name'] ,$photo_dossier);
    }
}


require_once('../include/header.php');

echo '<pre>'; print_r($_POST); echo '</pre>';
// $_FILES est une superglobale qiui permet de véhiculer les informations d'un fishier uploader
echo '<pre>'; print_r($_FILES); echo '</pre>';
?>


<!-- Realiser un formulaire permettent d'insérer un prosuit dans la table 'produit' (sauf le chambre "id_produit") -->

<h1 class="display-4 text-center">AJOUT D'UN PRODUIT</h1><hr>



<form  class="col-md-4 offset-md-4 text-center form1" method="post" action="" enctype="multipart/form-data">
<!--  enctype : obligatoire en PHP pour recolter les informations d'1 fishier uploadé-->
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="reference">Référence</label>
      <input type="text" class="form-control" id="reference" name="reference" placeholder="Entre référence">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="categorie">Catégorie</label>
      <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Entre categorie">
    </div>
    <div class="form-group col-md-6">
      <label for="titre">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre" placeholder="Entre titre">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Entre description">
    </div>
    <div class="form-group col-md-6">
      <label for="couleur">Couleur</label>
      <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Entre couleur">
    </div>
    <div class="form-group col-md-6">
      <label for="taille">Taille</label>
      <select id="taille" class="form-control" name="taille">
        <option selected>Choose...</option>
        <option value="m" name="m">S</option>
        <option value"f" name="f">M</option>
        <option value"f" name="f">L</option>
        <option value"f" name="f">XL</option>
        <option value"f" name="f">XXL</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="public">Public</label>
      <select id="public" class="form-control" name="public">
        <option selected>Choose...</option>
        <option value="m" name="m">F</option>
        <option value"f" name="f">H</option>
        <option value"f" name="f">Mixte</option>
      </select>
    </div>
    <div class="form-group col-md-12">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo">
    </div>
    <div class="form-group col-md-6">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix" placeholder="Entre prix">
    </div>
    <div class="form-group col-md-6">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" placeholder="Entre nombre">
    </div>

  <button type="submit" class="col-md-12 btn btn-dark" name="form">Enregistre</button>


</div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
require_once('../include/footer.php');

?>