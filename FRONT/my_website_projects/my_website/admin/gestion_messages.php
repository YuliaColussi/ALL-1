<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET);

// S    i l'internaute n'est pas connecté est ne pas ADMIN, il n'a rien à fair ici
//on le redirige vers le page connexion.php
if(!internauteEstConnecteEtEstAdmin())
{
    header("Location:" . URL . "index.php");
}

// -----------------SUPPRESSION PROJECT

// on entre dans le If seulement dans le cas ou l'on a cliqué  sur la bouton de suppression
if(isset($_GET['action']) && $_GET['action'] == 'suppression')
{
  // Exo: requete de suppression / requete préparé
  $supp_contact = $bdd->prepare("DELETE FROM contact_form WHERE id_client = :id_client");
  $supp_contact->bindValue(':id_client', $id_client, PDO::PARAM_STR);
  // if produit fait reference à $_GET['id_produit'] (extract)
  $supp_message->execute();

  $_GET['action'] = 'affichage';

  $validate .= "<div class='alert alert-success cold-md-6 offset-md-3 text-center'>Le message
  n <strong>$id_client</strong> a bien été supprimé !!</div>";

  // echo 'suppression produit';
}



// ------------------ENREGISTREMENT PROJECT

if($_POST)
{
//     $photo_bdd = '';
//     if(isset($_GET['action']) && $_GET['action'] == 'modification')

//     {
    
//     $photo_bdd = $photo_actuelle;

//       // we check that we will stock not the same photo
        

//    // si on souhaite conserver la meme photo en cas de modification, on affecte la valeur du champ photo 'hidden'

//    // c'est à dire l'URL de la photo selectionnée en BDD

// }




    //  if(!empty($_FILES['photo']['titre'])) // on vérifie que l'indice 'name' dans la superglobale $_FILE n'est
    // // // pas vide, cela veut direque l'on a bien uploader une photo
    //  {
    //      $nom_photo = $reference . '-' . $_FILES['photo']['titre'];
    // //     // on redéfinit le nom de la photo en concaténant le réference saisi dans lz formulaire avec le nom de la photo
    // //     echo $nom_photo . '<br>';

    //      $photo_bdd  = URL . "photo/$nom_photo";
    // //     // on définit l'URL de la photo, c'est ce que l'on conservera en BDD
    // //     echo $photo_bdd . '<br>';

    //      $photo_dossier = RACINE_SITE . "photo/$nom_photo";
    // //     // on définit le chemin physique de la photo sur le disque dur du serveur, c'est ce qui nous permettra du copier la ^photo dans le dossier photo
    // //     echo $photo_dossier . '<br>';

    //      copy($_FILES['photo']['tmp_name'] ,$photo_dossier);// copy() est une fonction prédéfinie qui permet de copier la photo dans le dossier photo.
    // //     // Arguments: copy(nom_temporaire_photo, chemin de destination)
    //  }




  //   // Exo: Réaliser la requete d'insertion permettant d'insérer un produit dans la table 'produit' (requete préparée)
  //    if (isset($_POST["Name"])) {
  //   //Вставляем данные, подставляя их в запрос
  //   $sql = mysqli_query($bdd, "INSERT INTO `produit` (`reference`, `categorie`, 'titre' ,'description', 'couleur', 'taille', 'public', 'photo', 'prix', 'stock') VALUES (`$reference`, `$categorie`, '$titre' ,'$description', '$couleur', '$taille', '$public', '$photo', '$prix', '$stock'");
  //   //Если вставка прошла успешно
  //   if ($sql) {
  //     echo '<p>Le produit est bien enregistée.</p>';
  //   } else {
  //     echo '<p>Il y a une erreur:' . mysqli_error($bdd) . '</p>';
  //   }
   }

    if(isset($_GET['action']) && $_GET['action'] == 'ajout')
    {
        $data_insert = $bdd->prepare("INSERT INTO `contact_form` (nom, phone, email, message) VALUES 
        (:nom, :phone , :email, :message)");
    }
    else {
        $data_insert = $bdd->prepare("UPDATE contact_form SET 
        nom = :nom AND phone = :phone AND email = :email AND message = :message WHERE id_contact = $id_contact");

        $_GET['action'] = 'affichage';

        $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le contact n <strong>$id_contact</strong> a bien ete modifié!!</div>";
    }


      if($_POST)//si on valide le formulaaire, on rentre dans la condition
    {
        $data_insert = $bdd->prepare("INSERT INTO `contact_form` (nom, phone, email, message) VALUES 
        (:nom, :phone, :email, :message)");
    //       foreach($_POST as $key => $value){
    //       if($key != 'photo_actuelle') // on ejecte le champs 'hidden' de la photo
    //         {
    //         $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
    //         }
    //       }
    //       $data_insert->bindValue(":photo", $photo_bdd, PDO::PARAM_STR);
    //       $data_insert->execute();


    //     // On utilise la superglobale $_POST pour alleer crocheter à chaque champs du formulaire afin de recuperer sa valeur
    // }

}


require_once('../include/header.php');

// echo '<pre>'; print_r($_POST); echo '</pre>';
// $_FILES est une superglobale qiui permet de véhiculer les informations d'un fishier uploader
// echo '<pre>'; print_r($_FILES); echo '</pre>';
?>

<!-- LIENS PRODUIT -->

<ul class="col-md-4 offset-md-4 list-group mt-4 text-center">
  <li class="list-group-item bg-dark text-center text-white"><h5>BACK OFFICE</h5></li>
  <li class="list-group-item"><a href="?action=affichage" class="alert-link text-dark">AFFICHAGE MESSAGES</a></li>
  <li class="list-group-item"><a href="?action=ajout" class="alert-link text-dark">AJOUT MESSAGES</a></li>

</ul>


<!-- FINS LIEN PROJECTS -->


<!-- AFFICHAGE PROJECTS -->
<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage'): ?>

<?php echo $validate; ?>
<hr>
<h1 class="display-4 text-center">LISTES DE MESSAGES</h1><hr>

<!-- Exo : réaliser le traitement permettant l'affichage des produits sous forme de tableau HTML -->


<!-- what we need to learn by heart -->

<?php
$result= $bdd->query("SELECT * FROM contact_form"); // запрос на выборку
$contact = $result->fetchAll(PDO::FETCH_ASSOC);// выводим данные
?>

<!-- what we need to learn by heart -->

<table class="table table1 table-bordered text-center"><tr>
<?php foreach($contact[0] as $key => $value):?>
<th><?=strtoupper($key)?></th>

<?php endforeach;?>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php foreach($membre as $key => $tab):?>
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
<td><a href="?action=modification&id_contact=<?= $tab['id_contact'] ?>" class="text-info"><i class="fas fa-edit"></i></a></td>
<td><a href="?action=suppression&id_contact=<?= $tab['id_contact'] ?>"class="text-danger" onclick="return(confirm('En etes vous certain?'))"><i class="fas fa-trash-alt"></i></a></td>
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




<!-- echo '<table class="table table-bordered text-center"><tr>';
echo '<th>Poids</th>';
foreach($tab_fruits as $fruits)
{
    echo "<th>$fruits</th>";
}
echo '</tr>';
foreach($tab_poids as $poids)
{
    echo '<tr>';
    echo "<th>$poids</th>";
    foreach($tab_fruits as $fruit)
    {
        echo '<td>' . calcul($fruit, $poids) . '</td>';
    }
    echo '</tr>';
}
echo '</table>'; -->

<!-- Realiser un formulaire permettent d'insérer un prosuit dans la table 'produit' (sauf le chambre "id_produit") -->

<?php if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification')): ?>



<hr>
<h1 class="display-4 text-center"><?=  strtoupper($action) ?> un produit</h1><hr>


<?php
if(isset($_GET['id_contact']))
{
  $resultat = $bdd->prepare("SELECT * FROM contact_form WHERE id_client = :id_client");
  $resultat->bindValue(':id_client', $id_client, PDO::PARAM_INT);
  $resultat->execute();

  $project_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
  echo '<pre>';print_r($produit_actuel); echo '</pre>';
}


$nom = (isset($message_actuel['nom'])) ? $message_actuel['nom'] : '';
$phone = (isset($message_actuel['phone'])) ? $message_actuel['phone'] : '';
$email = (isset($message_actuel['email'])) ? $message_actuel['email'] : '';
$message = (isset($message_actuel['message'])) ? $message_actuel['message'] : '';

?>

<form  class="col-md-4 offset-md-4 text-center form1" method="post" action="" enctype="multipart/form-data">
<!--  enctype : obligatoire en PHP pour recolter les informations d'1 fishier uploadé-->
  <div class="form-row">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entre categorie" value="<?= $nom ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Entre titre" value="<?= $phone ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Entre description" value="<?= $email ?>">
    </div>
    <div class="form-group col-md-12">
    <label for="message">Message</label>
    <input type="file" class="form-control" id="smessage" name="smessage">
    </div>
    <!-- if we have a 'file' than we cant give it a value so we do that stuff below-->
    <!-- allows to get a photo -->

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