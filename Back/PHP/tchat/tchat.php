<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TCHAT!!</title>
</head>
<body>
        <div class="container">
    <h1 class="display text-center">SESSION PHP</h1><hr>

<!-- Exercise: espace de dialogue (tchat)
1.  Modélisation et création
    BDD : tchat
    Table : commentaire
            id_commentaire      //INT(3) PK - AI
            pseudo              // VARCHAR(20)
            dateEnregistrement  // DATETIME
            message             // TEXT
            

2. Connexion a la base de donnée
3. Creation d'un formulaire HTML (pour l'ajout de message)
4. Récupération et affichage des saisies en PHP ($_POST)
5. Requete SQL d'enregistrement (INSERT)
6. Affichage des messages -->


 <!-- 3 -->
<form  class="col-md-4 offset-md-4 text-center" method="post" action="">
  <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="pseudo">
          </div>
    <div class="form-group col-md-6">
      <label for="message">Votre message</label>
      <input type="text" class="form-control" name="message" id="message" rows:"3">
    </div>
    <button type="submit" name="form2" class="col-md-6 btn btn-primary">Sign in</button>
    </div>
    </form>
    <?php
    foreach($_POST as $key => $value)
    {
        $_POST[$key] = strip_tags(trim($value)); // on passe en revue le formulaire 
        // trim() est une fonction prédéfinie qui supprime les espaces eb début et fin de chaine
    }
    // 1

//     $sql = "CREATE DATABASE";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// $conn->close();



    // // 2
    // $pdo = new PDO('mysql:host=localhost;dbname=tchat', 'root', '',
    //     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // // 4
    //     echo '<pre>'; print_r($_POST); echo '</pre>';

    // // 5
    // extract($_POST);
    // if($_POST)
    // { 
    //     $resultat = $pdo->exec("INSERT INTO commentaire(id_commentaire, pseudo, dateEnregistrement, message) VALUES ('$_POST[pseudo]', NOW(), '$_POST[message]')");
    //     echo "Nombre d'enregistrement affecté(s) par l'INSERT : $resultat<br>";
    //     echo "Dernier ID généré : " . $pdo->lastInsertId() . '<hr>';
    // }   

    // $resultat = $pdo->query("SELECT pseudo, message, DATE_FORMAT
    //  (dateEnregistrement, '%d/%m/%Y') AS datefr, DATE_FORMAT;
    //  (dateEnregistrement, '%h:%i:%s') AS heurefr, FROM commentaire ORDER BY dateEnregistrement DESC");

    //  while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC))
    //  {
    //         echo '<pre>'; print_r($commentaire); echo '</pre>';
    //  }
    

    // 2.connexion a la BDD
$bdd = new PDO('mysql:host=localhost;dbname=tchat','root','',array(PDO::ATTR_ERRMODE => PDO :: ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));


//  4.Recuperation et affichage des saisien en PHP ($_POST)
extract($_POST); // permet de tranformer chaque indice du formulaire en variable



if($_POST){
       
    
    //    echo '<pre>' ; print_r($_POST); echo'</pre>';
    //    echo '<hr>'  ;
    //  $resultat = $bdd->exec("INSERT INTO commentaire (pseudo, dateEnregistrement,message)VALUES ('$pseudo',NOW(),'$message')");
    //    echo "nombre d'enregistrement :$resultat<br><hr>";

    //    }

       $resultat =$bdd->prepare("INSERT INTO commentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(), :message)");
       $resultat->bindValue(':pseudo',$pseudo,PDO::PARAM_STR);
       $resultat->bindValue(':message',$message,PDO::PARAM_STR);
       $resultat->execute();
    }

if (isset ($_POST['valider'])){
       echo "$pseudo <br>$message<hr>";
       }

$req = "INSERT INTO commentaire (pseudo, dateEnregistrement, message) VALUES (:pseudo, NOW(), :message)";

$resultat = $bdd ->query("SELECT pseudo , message , DATE_FORMAT(dateEnregistrement, '%d/%m/%Y')AS datefr, DATE_FORMAT(dateEnregistrement, '%h/%i/%s') AS heurefr FROM commentaire ORDER BY dateEnregistrement DESC");

// INJECTION SQL :
//  ok'); DELETE FROM commentaire;( 

    // FILES XSS: 
    // <script type="text/javascript">
    // var point = true;
    // while(point == true)
    // alert("J'ai planté ton site !!")
    // </script>

    // <style>
    // body {
    //     display: none;
    // } 
    
    // </style>

    // pour perer aux FAILLES XSS, il existe pluisieurs fonctions prédéfinies
    // strip_tags(): permet de supprimer les balises HTML
    // -htmlspecialchars() : permet de rendre innofensives des balises HTML 
    // - htmlentities() : permet de convertir les balises HTML en entités html

 

    // we put straight after if($_POST) and it removes a tag HTML
    
    


// 6
while($commentaire = $resultat ->fetch(PDO::FETCH_ASSOC)){
   echo '<pre>' ; print_r($commentaire); echo'</pre>';
   echo '<div class="col-md-8 offset-md-2 alert alert-secondary">';
    echo "<div><em>Par $commentaire[pseudo], le $commentaire[datefr] à$commentaire[heurefr]</em></div><hr>";
    echo "<div class='text-justify'>$commentaire[message]</div>";

       echo '</div>'  ;
}

echo "<div class='text-cente'>Nombre de commentaires : <strong class='badge badge-danger'>" . $resultat->rowCount() . "</strong></div>";
// rowCount() est une méthode PDOStatement qui retourne le nombre de ligne resultant de la requete SELECT



    ?>
</body>
</html>