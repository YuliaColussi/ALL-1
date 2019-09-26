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
  $supp_message = $bdd->prepare("DELETE FROM contact_form WHERE id_client = :id_client");
  $supp_message->bindValue(':id_client', $id_client, PDO::PARAM_STR);
  $supp_message->execute();

  $_GET['action'] = 'affichage';

  $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le message
  n <strong>$id_client</strong> a bien été supprimé !!</div>";


}



// ------------------ENREGISTREMENT PROJECT
 if($_POST)
 {


    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
        $data_insert = $bdd->prepare("INSERT INTO contact_form (nom, phone, email, message) VALUES 
        (:nom, :phone , :email, :message)");
    }
    elseif(isset($_GET['action']) && $_GET['action'] == 'modification') {
        $supp_client = $bdd->prepare("UPDATE contact_form SET nom = :nom AND phone = :phone AND email = :email AND message = :message WHERE id_client = :id_client");
        $supp_client->bindValue(':id_client', $_POST['id_client'], PDO::PARAM_INT);


        $_GET['action'] = 'affichage';

        $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le contact n <strong>$id_client</strong> a bien ete modifié!!</div>";
        
    }
        
        if($_POST)
        {
          $data_insert = $bdd->prepare("INSERT INTO `contact_form` (nom, phone, email, message) VALUES 
        (:nom, :phone, :email, :message)");
        }

}



require_once('../include/header_admin.php');
?>

<!-- LIENS PRODUIT -->

<ul class="col-md-4 offset-md-4 list-group mt-4 text-center">
  <li class="list-group-item bg-dark text-center text-white back_office"><h6>BACK OFFICE</h6></li>
  <li class="list-group-item"><a href="?action=affichage" class="alert-link text-dark">AFFICHAGE MESSAGES</a></li>
  <li class="list-group-item"><a href="?action=ajout" class="alert-link text-dark">AJOUT MESSAGES</a></li>

</ul>


<!-- FINS LIEN PROJECTS -->


<!-- AFFICHAGE PROJECTS -->
<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage'): ?>

<?php echo $validate; ?>
<hr>
<h1 class="display-4 text-center">LISTES DE MESSAGES</h1><hr>

<?php
$result= $bdd->query("SELECT * FROM contact_form");
$contact = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- TABLE -->

<table class="table table1 table-bordered text-center text-light"><tr>
<?php foreach($contact[0] as $key => $value):?>
<th><?=strtoupper($key)?></th>

<?php endforeach;?>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php foreach($contact as $key => $tab):?>
<tr>
<?php foreach($tab as $key2 => $value):?>
<?php
 if($key2 !== 'photo'):?>
  <td><?= $value ?></td>
<?php 
else: ?>
  <td><img height="100" src="<?= $value ?>" alt="<?= $tab['titre']?>"></td>
<?php 
endif; ?>
<?php endforeach;?>
<td><a href="?action=modification&id_client=<?= $tab['id_client'] ?>" class="text-info edit"><i class="fas fa-edit"></i></a></td>
<td><a href="?action=suppression&id_client=<?= $tab['id_client'] ?>"class="text-danger suppression" onclick="return(confirm('En etes vous certain?'))"><i class="fas fa-trash-alt"></i></a></td>
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

<!-- TABLE END  -->

<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): ?>



<hr>
<h1 class="display-4 text-center"><?=  strtoupper($action) ?> un message</h1><hr>


<?php
if(isset($_GET['id_client']))
{
  $resultat = $bdd->prepare("SELECT * FROM contact_form WHERE id_client = :id_client");
  $resultat->bindValue(':id_client', $id_client, PDO::PARAM_INT);
  $resultat->execute();
  
  $project_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
}


$nom = (isset($message_actuel['nom'])) ? $message_actuel['nom'] : '';
$phone = (isset($message_actuel['phone'])) ? $message_actuel['phone'] : '';
$email = (isset($message_actuel['email'])) ? $message_actuel['email'] : '';
$message = (isset($message_actuel['message'])) ? $message_actuel['message'] : '';

?>

<form  class="col-md-4 offset-md-4 text-center form1" method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entre voter nom" value="<?= $nom ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Entre votre phone" value="<?= $phone ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Entre votre email" value="<?= $email ?>">
    </div>
    <div class="form-group col-md-6">
    <label for="message">Message</label>
    <input type="text" class="form-control" id="message" name="message" placeholder="Entre votre email" value="<?= $email ?>">
    </div>


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