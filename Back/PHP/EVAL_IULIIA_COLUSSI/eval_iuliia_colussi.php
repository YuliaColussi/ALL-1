<?php

echo '<pre>'; print_r($_POST); echo '</pre>';
echo '<pre>'; print_r($_FILES); echo '</pre>';

// connection a la bdd

$bdd = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// ---------- SESSION

session_start();

// ---------CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/ALL/Back/PHP/SITE/');

define("URL", "http://localhost/ALL/Back/PHP/EVAL_IULIIA_COLUSSI/");

// cette constante servira entre autre à enregistreer
// l'URL d'une photo / image de la BDD, on ne conserve jamais le photo elle meme, ce serait trop lourd pour la BDD

// ------------VARIABLES
$error = "";//message d'erreur
$validate = "";// message de validation
$content = "";//permettra de placer du contenu ou l'on souhaite 


// -----------------FAILLES XSS

foreach($_GET as $key => $value)
{
    $_GET[$key] = strip_tags(trim($value));
}

?>





<!-- ---------------------EXO 3 ---------------------- -->

<!-- // Créez un formulaire pour pouvoir ajouter des logements à la table nommée « logement ». -done
 --> 




<?php
if(isset($_GET['id_logement']))
{
  $resultat = $bdd->prepare("SELECT * FROM logement WHERE id_logement = :id_logement");
  $resultat->bindValue(':id_logement', $id_logement, PDO::PARAM_INT);
  $resultat->execute();

  $logement_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
//   echo '<pre>';print_r($logement_actuel); echo '</pre>';
}

$titre = (isset($logement_actuel['titre'])) ? $logement_actuel['titre'] : '';
$adresse = (isset($logement_actuel['adresse'])) ? $logement_actuel['adresse'] : '';
$ville = (isset($logement_actuel['ville'])) ? $logement_actuel['ville'] : '';
$cp = (isset($logement_actuel['cp'])) ? $logement_actuel['cp'] : '';
$surface = (isset($logement_actuel['surface'])) ? $logement_actuel['surface'] : '';
$prix = (isset($logement_actuel['prix'])) ? $logement_actuel['prix'] : '';
$photo = (isset($logement_actuel['photo'])) ? $logement_actuel['photo'] : '';
$type = (isset($logement_actuel['type'])) ? $logement_actuel['type'] : '';
$description = (isset($logement_actuel['description'])) ? $logement_actuel['description'] : '';

// Plusieurs contrôles de saisies sont à prévoir :

//  Les champs obligatoires sont : titre, adresse, ville, cp, surface, prix, type  -done

//  Le format du code postal doit être vérifié et être correct. -done


// $field = $_POST["cp"];

// if(!ctype_digit($cp)){
//   echo "C'est pas une chiffre";
// }

if (!is_numeric('$_POST[cp]') || iconv_strlen('$_POST[cp]') !== 5) {
echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Zip est pas correcte</div>';
}else{
echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Zip correcte</div>';
}


//  Les champs prix et surface doivent contenir exclusivement des nombres entiers.

if (!is_int('$_POST[prix]') && (!is_int('$_POST[surface]'))) {
}echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Entrez les chiffres entiers, svp</div>';


//  Le champ photo doit permettre un upload de fichier image, les vérifications sont multiples : extension et type de fichier, poids du fichier, etc.



if (isset($_GET['submit'])) 
{
    $blacklist = ['.php', 'css', 'html', 'mp3', 'mp4', 'jpeg'];
    foreach($blacklist as $item) {
        if(preg_match("/$item", $_FILES['photo']['name']))
        exit ('Le format ne pas bon');
    }
}


//  Le champ type doit être gérer via un input type radio ou un select option. -done
 
//  Enregistrer les données dans la table correspondante de la base. 

    // if($_POST)
    // {
    //     $resultat = $bdd->exec("INSERT INTO logement(titre, adresse, ville, cp, surface, prix, photo, type, description) 
    //     VALUES ('$_POST[titre]', '$_POST[adresse]', '$_POST[ville]', '$_POST[cp]', '$_POST[surface]', '$_POST[prix]', '$_POST[photo]', '$_POST[type]', '$_POST[description]');");
    //     echo '<div class="col-md-6 text-info">employe <strong>' . $_POST['titre']  .'</strong> a bien été enregistre</div>';

    //     // On utilise la superglobale $_POST pour alleer crocheter à chaque champs du formulaire afin de recuperer sa valeur
    // }



// -----------------------EXO 4-------------------------------

// Créez une page permettant l’affichage des données saisies, nous devrons y retrouver l’ensemble des logements avec leurs informations respectives.
?>


<h1 class="display-4 text-center">LISTES DE PRODUITS</h1><hr>

<?php


$result= $bdd->query("SELECT * FROM logement");
$logement = $result->fetchAll(PDO::FETCH_ASSOC);
?>



<table class="table table1 table-bordered text-center"><tr>
<?php foreach($logement[0] as $key => $value):?>
<th><?=strtoupper($key)?></th>
<?php endforeach;?>
</tr>
<?php foreach($logement as $key => $tab):?>
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
</tr>
<?php endforeach;?>
</table>


<!-- // Cet affichage se fera de préférence sous forme de tableau, et il faudra prévoir de couper le texte en ajoutant « ... » si la description ou une autre information textuelle est trop longue.

// Concernant la photo, nous n’afficherons pas le chemin, mais bien la photo en elle-même, toutefois, cela ne doit pas venir perturber la lisibilité de l’internaute. 


//----------------------------------EXO 5---------------------

// Les fichiers uploadés via le champ photo doivent être renommés et générer des miniatures.

<?php


if($_POST)
{
    $photo_bdd = '';
    if(isset($_GET['action']))
      {
        $photo_bdd = $photo_actuelle;
        // we check that we will stock not the same photo
        
        // si on souhaite conserver la meme photo en cas de modification, on affecte la valeur du champ photo 'hidden'
        // c'est à dire l'URL de la photo selectionnée en BDD
      }



 if(!empty($_FILES['photo']['name'])) // on vérifie que l'indice 'name' dans la superglobale $_FILE n'est
    // pas vide, cela veut direque l'on a bien uploader une photo
    {
        $nom_photo = $titre . '-' . $_FILES['photo']['name'];
        // on redéfinit le nom de la photo en concaténant le réference saisi dans lz formulaire avec le nom de la photo
        echo $nom_photo . '<br>';

        $photo_bdd  = URL . "photo/$nom_photo";
        // on définit l'URL de la photo, c'est ce que l'on conservera en BDD
        echo $photo_bdd . '<br>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        // on définit le chemin physique de la photo sur le disque dur du serveur, c'est ce qui nous permettra du copier la ^photo dans le dossier photo
        echo $photo_dossier . '<br>';

    }
    echo "<div class='alert alert-success cold-md-6 offset-md-3 text-center'>L'image
   est bien telechargée !!</div>";
  
    
   
   if($_POST)//si on valide le formulaaire, on rentre dans la condition
   {
       
       $data_insert = $bdd->exec("INSERT INTO logement(titre, adresse, ville, cp, surface, prix, photo, type, description) 
        VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description);");
        echo '<div class="col-md-6 text-info">employe <strong>' . $_POST['titre']  .'</strong> a bien été enregistre</div>';
        
        foreach($_POST as $key => $value){
            if($key != 'photo') // on ejecte le champs 'hidden' de la photo
            {
                $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            }
        }
        $data_insert->bindValue(":photo", $photo_bdd, PDO::PARAM_STR);
        $data_insert->execute();
    }

    
    
}
    ?>

// C’est-à-dire qu’un fichier nommé : « mon-appart.jpg » sera automatiquement renommé « logement_38.jpg »(le numéro 38 dépend de l’id du logement).

// Nous garderons le fichier « logement_38.jpg » en taille original et nous le générerons, en plus, en format 300x300 sous le nom « logement_38_300x300.jpg ».
 -->



<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Eval_Iuliia_Colussi</title>
  </head>
  <body>
  <div class="container">
  <h1 class="display-4 text-center">Enregistré votre logement</h1>
  <?= $error ?>
<form  method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="titre">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre" placeholder="Entre votre titre" value="<?= $titre ?>" required>
    </div>
  <div class="form-group col-md-6">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer votre adresse" value="<?= $adresse ?>" required>
  </div>
  <div class="form-group col-md-6">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville" value="<?= $ville ?>" required>
  </div>
    <div class="form-group col-md-6">
      <label for="cp">Code postal</label>
      <input type="text" class="form-control" name="cp" id="cp" placeholder="Votre code postal" value="<?= $cp ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="surface">Surface</label>
      <input type="text" class="form-control" name="surface" id="surface" placeholder="Votre chiffre de surface" value="<?= $surface ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="prix">Prix</label>
      <input type="text" class="form-control" id="prix" name="prix" placeholder="Votre prix" value="<?= $prix ?>"required>
    </div>
    <!-- debut de photo -->
   <div class="form-group col-md-6">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo" value="<?= $photo ?>">
    </div>
<!-- php photo -->
    <?php if(!empty($photo)): ?>
    <em>Vous pouvez uploader une photo</em><br>
    <img height="100" src="<?= $photo ?>" alt="<?= $titre ?>" class="card-img-top">
    <?php endif; ?>
    <!-- allows to get a photo -->
    <input type="hidden" id="photo" name="photo" value="<?= $photo ?>">
    <!-- fin de photo -->
    <div class="form-group col-md-6">
      <label for="type">Type</label>
      <select id="type" class="form-control" name="type" required>
        <option selected>Choose...</option>
        <option value="location"<?php if($type == 'location') echo 'selected'; ?>>location</option>
        <option value"vente" <?php if($type == 'vente') echo 'selected'; ?>>vente</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Votre description">
    </div>
    </div>
  <button type="submit" class="btn btn-primary col-md-4 offset-md-4">Enregistrée</button>

</form>
</div>


</body>
</html>