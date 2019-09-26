<?php
require_once('../include/init.php');

require_once('../include/header_admin.php');
extract($_POST);
extract($_GET);

// if(!internauteEstConnecteEtEstAdmin())
// {
//     header("Location:" . URL . "index.php");
// }

// -----------------SUPPRESSION PROJECT


if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{
  $supp_membre = $bdd->prepare("DELETE FROM member_form WHERE id_membre = :id_membre");
  $supp_membre->bindValue(':id_membre', $id_membre, PDO::PARAM_INT);
  $supp_membre->execute();

  $_GET['action'] = 'affichage';

  $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le membre
  n <strong>$id_membre</strong> a bien été supprimé !!</div>";

}



// ------------------ENREGISTREMENT MEMBRE


  
    if($_POST)//si on valide le formulaaire, on rentre dans la condition
    {

    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
        $data_insert = $bdd->prepare("INSERT INTO member_form (pseudo, mdp, email, statut) VALUES 
        (:pseudo, :mdp , :email, :statut)");
        
        $_GET['action'] = 'affichage';

       $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le member <strong>$id_membre</strong> a bien été ajouté !! </div>";

    }
    else{

        $data_insert = $bdd->prepare("UPDATE member_form SET 
        pseudo = :pseudo AND mdp = :mdp AND email = :email AND statut = :statut WHERE id_membre = $id_membre");
        // $data_insert->bindValue(':id_membre', $id_membre, PDO::PARAM_INT);
        $data_insert->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $data_insert->bindValue(":mdp", $mdp, PDO::PARAM_STR);
        $data_insert->bindValue(":email", $email, PDO::PARAM_STR);
        $data_insert->bindValue(":statut", $statut, PDO::PARAM_STR);
        $data_insert->execute();

        $_GET['action'] = 'affichage';

      }
      
      $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le membre n <strong>$id_membre</strong> a bien ete modifié!!</div>";
      


}
      



    
?>

<!-- LIENS MEMBERS -->

<ul class="col-md-4 offset-md-4 list-group mt-4 text-center">
  <li class="list-group-item bg-dark text-center text-white back_office"><h6>BACK OFFICE</h6></li>
  <li class="list-group-item"><a href="?action=affichage" class="alert-link text-dark">AFFICHAGE MEMBERS</a></li>
  <li class="list-group-item"><a href="?action=ajout" class="alert-link text-dark">AJOUT MEMBERS</a></li>
</ul>
<br>
<br>


<!-- FINS LIEN MEMBERS -->


<!-- AFFICHAGE MEMBERS -->
<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage'): ?>

<hr>
<h1 class="display-4 text-center">LISTES DE MEMBERS</h1><hr>
 <?= $validate; ?> 


<?php
$result= $bdd->query("SELECT * FROM member_form"); 
$membre = $result->fetchAll(PDO::FETCH_ASSOC);
?>


<table class="table table1 table-bordered text-center text-light"><tr>
<?php foreach($membre[0] as $key => $value):?>
<th><?=strtoupper($key)?></th>

<?php endforeach;?>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php foreach($membre as $key => $tab):?>
<tr>
<?php foreach($tab as $key2 => $value):?>

<?php if($key2):?>
  <td><?= $value ?></td>
<?php 
endif; ?>



<?php endforeach;?>
<td><a href="?action=modification&id_membre=<?= $tab['id_membre'] ?>"class="text-info edit"><i class="fas fa-edit"></i></a></td>
<td><a href="?action=suppression&id_membre=<?= $tab['id_membre'] ?>"class="text-danger suppression" onclick="return(confirm('En etes vous certain?'))"><i class="fas fa-trash-alt"></i></a></td>
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
<h1 class="display-4 text-center"><?=  strtoupper($action) ?> d'un membre</h1><hr>


<?php
if(isset($_GET['id_membre']))
{
  $resultat = $bdd->prepare("SELECT * FROM member_form WHERE id_membre = :id_membre");
  $resultat->bindValue(':id_membre', $id_membre, PDO::PARAM_INT);
  $resultat->execute();

  $membre_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
}


$pseudo = (isset($membre_actuel['pseudo'])) ? $membre_actuel['pseudo'] : '';
$mdp = (isset($membre_actuel['mdp'])) ? $membre_actuel['mdp'] : '';
$email = (isset($membre_actuel['email'])) ? $membre_actuel['email'] : '';
$statut = (isset($membre_actuel['statut'])) ? $membre_actuel['statut'] : '';

?>

<form  class="col-md-4 offset-md-4 text-center form1" method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="categorie">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entre pseudo" value="<?= $pseudo ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="titre">Mot de passe</label>
      <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Entre votre mot de passe" value="<?= $mdp ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Entre votre email" value="<?= $email ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="statut">Statut</label>
      <input type="text" class="form-control" id="statut" name="statut" placeholder="Entre le statut" value="<?= $statut ?>">
    </div>

  <button type="submit" class="col-md-12 btn btn-dark" name="formulaire"><?= $action ?></button>


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