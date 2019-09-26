<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET);


if(!internauteEstConnecteEtEstAdmin())
{
    header("Location:" . URL . "index.php");
}

// -----------------SUPPRESSION PROJECT

if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{

  $supp_proj = $bdd->prepare("DELETE FROM my_projects WHERE id_project = :id_project");
  $supp_proj->bindValue(':id_project', $id_project, PDO::PARAM_STR);
  $supp_proj->execute();

  $_GET['action'] = 'affichage';

  $validate .= "<div class='alert alert-success cold-md-6 offset-md-3 text-center'>Le project
  n <strong>$id_project</strong> a bien été supprimé !!</div>";

}



// ------------------ENREGISTREMENT PROJECT

if($_POST)
{
    $photo_bdd = '';
    if(isset($_GET['action']) && $_GET['action'] == 'modification')
      {
        $photo_bdd = $photo_actuelle;
      }




    if(!empty($_FILES['photo']['titre'])) 
    {
        $nom_photo = $reference . '-' . $_FILES['photo']['titre'];
        
        echo $nom_photo . '<br>';

        $photo_bdd  = URL . "photo/$nom_photo";
        
        echo $photo_bdd . '<br>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        // on définit le chemin physique de la photo sur le disque dur du serveur, c'est ce qui nous permettra du copier la ^photo dans le dossier photo
        echo $photo_dossier . '<br>';

        copy($_FILES['photo']['tmp_name'] ,$photo_dossier);// copy() est une fonction prédéfinie qui permet de copier la photo dans le dossier photo.
        // Arguments: copy(nom_temporaire_photo, chemin de destination)
    }


    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
        $data_insert = $bdd->prepare("INSERT INTO `my_projects` (categorie, titre , description, photo) VALUES 
        (:categorie, :titre , :description, :photo)");
    }
    else {
        $data_insert = $bdd->prepare("UPDATE my_projects SET 
        categorie = :categorie AND titre = :titre AND description = :description AND photo =:photo WHERE id_project = $id_project");

        $_GET['action'] = 'affichage';

        $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le project n <strong>$id_project</strong> a bien ete modifié!!</div>";
    }


      if($_POST)
    {
        $data_insert = $bdd->prepare("INSERT INTO `my_projects` (categorie, titre , description, photo) VALUES 
        (:categorie, :titre , :description, :photo)");
          foreach($_POST as $key => $value){
          if($key != 'photo_actuelle')
            {
            $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            }
          }
          $data_insert->bindValue(":photo", $photo_bdd, PDO::PARAM_STR);
          $data_insert->execute();
    }

}


require_once('../include/header_admin.php');

?>

<!-- LIENS PRODUIT -->

<ul class="col-md-4 offset-md-4 list-group mt-4 text-center back_office">
  <li class="list-group-item bg-dark text-center text-white"><h6>BACK OFFICE</h6></li>
  <li class="list-group-item"><a href="?action=affichage" class="alert-link text-dark">AFFICHAGE PROJECTS</a></li>
  <li class="list-group-item"><a href="?action=ajout" class="alert-link text-dark">AJOUT PROJECT</a></li>

</ul>


<!-- FINS LIEN PROJECTS -->


<!-- AFFICHAGE PROJECTS -->

<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage'): ?>

<?php echo $validate; ?>
<hr>
<h1 class="display-4 text-center">LISTES DE PROJECTS</h1><hr>


<?php
$result= $bdd->query("SELECT * FROM my_projects");
$projects = $result->fetchAll(PDO::FETCH_ASSOC);
?>


<table class="table table1 table-bordered text-center"><tr>
<?php foreach($projects[0] as $key => $value):?>
<th><?=strtoupper($key)?></th>

<?php endforeach;?>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php foreach($projects as $key => $tab):?>
<tr>
<?php foreach($tab as $key2 => $value):?>
<?php
 if($key2 !== 'photo'):?>
  <td><?= $value ?></td>
<?php 
else: ?>
  <td><img height="100" src="<?= $value ?>" alt="<?= $tab['titre']?>"</td>
<?php 
endif; ?>
<?php endforeach;?>
<td><a href="?action=modification&id_project=<?= $tab['id_project'] ?>" class="text-info"><i class="fas fa-edit"></i></a></td>
<td><a href="?action=suppression&id_project=<?= $tab['id_project'] ?>"class="text-danger" onclick="return(confirm('En etes vous certain?'))"><i class="fas fa-trash-alt"></i></a></td>
</tr>
<?php endforeach;?>
</table>

<?php endif; ?>

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


<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): ?>



<hr>
<h1 class="display-4 text-center"><?=  strtoupper($action) ?> un produit</h1><hr>


<?php
if(isset($_GET['id_produit']))
{
  $resultat = $bdd->prepare("SELECT * FROM my_projects WHERE id_project = :id_project");
  $resultat->bindValue(':id_project', $id_project, PDO::PARAM_INT);
  $resultat->execute();

  $project_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
  echo '<pre>';print_r($produit_actuel); echo '</pre>';
}


$categorie = (isset($produit_actuel['categorie'])) ? $produit_actuel['categorie'] : '';
$titre = (isset($produit_actuel['titre'])) ? $produit_actuel['titre'] : '';
$description = (isset($produit_actuel['description'])) ? $produit_actuel['description'] : '';
$photo = (isset($produit_actuel['photo'])) ? $produit_actuel['photo'] : '';

?>

<form  class="col-md-4 offset-md-4 text-center form1" method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="categorie">Catégorie</label>
      <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Entre categorie" value="<?= $categorie ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="titre">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre" placeholder="Entre titre" value="<?= $titre ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Entre description" value="<?= $description ?>">
    </div>
    <div class="form-group col-md-12">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo">
    </div>
    <?php if(!empty($photo)): ?>
    <em>Vous pouvez uploader une nouvelle photo si vous souhaitez la changer</em><br>
    <img height="400" src="<?= $photo ?>" alt="<?= $titre ?>" class="card-img-top">
    <?php endif; ?>
    <input type="hidden" id="photo_actuelle" name="photo_actuelle" value="<?= $photo ?>">

  <button type="submit" class="col-md-12 btn btn-dark"><?= strtoupper($action) ?></button>


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

<?php endif; ?>

<?php
require_once('../include/footer.php');

?>