<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire 1</title>
</head>
<body>
    <!-- Exo : réaliser un formulaire HTML avec les champs suivants :email, mot de passe et un bouton submit -->
<?php 
echo '<pre>'; print_r($_POST); echo '</pre>';
?>
<!-- permet d'observer les données saisie dans le formulaire  qui vont se stocker directemebnt dans la superglobale $_POST
, les indices correspondent aux attributes 'name' du formulaire HTML -->

 <!-- afficher les données saisie dans le formulaire en passant par la superglobale $_POST  avec un affichage conventionnelle (sans print_r ou var_ dump-->

<?php
if(isset($_POST['form1']))
{
   foreach($_POST as $value)
        {
            echo "$value<br>";
        }
}
      
?>

<!-- // on extrait les valeurs une par une en passant pa le supreglobale $_POST en crochetant aux differentes indices -->

 <?php

// if($_POST)
// { 
// echo "Email : $_POST[email]<br>";
// echo "Mot de passe : . $_POST['mdp']<br>";
// } 

// sans la condition IF, au premier chargement la page, nous avons deux erreurs 'undefined', c'est du au fait que le formulaire n'a pas été validé et donc les indices 'email'
//  et mot de passe ne sont pas reconnu

// Si la condition IF est vérifiée, si elle renvoi 'true', cela veut dire que l'on a soumit le formulaire et les indices 'email'
// et 'mdp' sont bien détéctées

// echo '<hr>';
?> -->


    <div class="col-md-4 offset-md-3">
        <h1 class="display-4 text-center">Formulaire 1</h1><hr>
    <form class="col-md-4 offset-md-4" method="post" action="">
      <!-- method : comment vont circuler les données / action : url de destination -->
      <!-- we dont need to use method="get" at all -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
    <!-- Il ne faut surtout pas oublier les attributes name sur le formulaire html, sinon aucune données saisie ne
    <! sera récupérée en PHP --> 
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="mdp">Password</label>
    <input type="text" class="form-control" id="mdp1" placeholder="Password" name="mdp">
  </div>
  <button type="submit" name="form1" class="btn btn-primary">Submit</button>
</form>
</div>

 <!-- EXO 2 -->

<!-- 
  1.Realiser un formulaire HTML avec les champes suivantes : pseudo, mdp, confirmer mdp, nom, pénom, email, sexe, adresse, telephone, ville, code postal et la bouton 'submit'

  2. Controler en PHP que l'on receptionne bien toute les données du formulaire

  3.Faite en sorte d'informer l'internaute si le pseudo n'est pas compris entre 2 et 20 caractères

  4. Faite en sorte d'informer l'internaute si les mots de passe nes sont pas identiques

  5. Faite en sorte d'informer l'internaute si l'email n'est pas au bon format (indice: fonction prédéfinie filter_var)
  
  6. Faites en sorte d'informer l'internaute si le code postale ne pas type umérique (fonction prédéfinie : is_numeric) et si il est différente de 5 caractere
  
  7. Faites en sorte d'informer l'internaute si le champs nom est laissée vide.
  
  8. Faites en sorte d'informer l'internaute si le champ telephone ne pas valide ((indice : expression régulière -> fonction prédéfinie preg_match))
  
  
  9. Faites en sorte d'informer l'internaute si il a correctement rempli le formulaire -->


  <h1 class="display-4 text-center">Formulaire 2</h1><hr>

  <?php

// exo 2
echo '<pre>'; print_r($_POST); echo '</pre>';


// exo 3
$error = '';
if($_POST) {
  echo $error;
    // si on valide le formulaire, on entre le IF

  if(iconv_strlen($_POST['pseudo']) <2 || iconv_strlen($_POST['pseudo']) > 20)
  {
    $error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Le pseudo doit contenir entre 2 et caractères !! </div>';
  }

 

// EXO 4

if(isset($_POST['form2'])) {
if ($_POST['mdp'] !== $_POST['passwordtwo']) 
            {
           $error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Le mots de passes sont pas pareils </div>';
            }
          }


// EXO 5

$email = "MyEmail@mysite.ru";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Email correcte</div>';
}


//EXO 6

// si la taille du champ 'pseudo' est difféfrente de 5 caractère ou si le 
// champ n'est pas de type numérique, alors on entre dans le accolades du IF

// if (!is_numeric($_POST['zip']) || iconv_strlen($_POST['zip']) !== 5) {
// echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Zip correcte</div>';
// }else{
// echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Zip pas correcte</div>';
// }

// EXO 7

if (empty($_POST['nom'])){
$error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Il faut mettre votre nom</div>';
}

// EXO 8


// if(preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $telephone)) {
//   echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Votre numero de telephone est valide</div>';
// }
// else {
//     echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Votre numero de telephone est ne pas valide</div>';
// }


    // $_POST['userPhone'] - номер телефона получаемый из формы
    // Данная проверка принимает только 10 значные номера (9031234567) состоящие только из цифр,
    // без скобок, дефисов и пробелов
    // {10,10} - показывает диапазон допустимой длинны номера, если нужно проверять номер на 11 знаков,
    // то нужно изменить на {10,11}
     
    if(!preg_match("/^[0-9]{10}+$/", $_POST['telephone'])) { 
      // preg_match( est une expression regulaire (regex) est toujours entouré de diee afin de préciser les options
      // ^ indique le debut de la chaine
      // $ indique la fin de la chaine
      // + est la pour dire que les caractères pouvent etre utiliser pluisier fois)
    echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Numero est ps bonne</div>';
     
    // Добавляем семерку к номеру телефону, если мы рассылаем по России.
     
      $_POST['telephone'] = "0".$_POST['telephone'];
     
}

 

// EXO 9

// if((iconv_strlen($_POST['pseudo']) <2 && iconv_strlen($_POST['pseudo']) > 20) && (preg_match("/^[0-9]{10}+$/", $_POST['telephone'])) && (!empty($_POST['nom'])) 
// && (filter_var($email, FILTER_VALIDATE_EMAIL)) && ($_POST['mdp'] != $_POST['passwordtwo'])) {
//     echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">La formulaire est rempli bien</div>';
// }else {
//    $error .= '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">La formulaire est pas rempli bien</div>';
// }



if(empty($error)) {
  echo '<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">Inscription validée!!</div>';
}
  }

// on stock tout les messages d'erreurs dans la variable $error, si cette variable est vide, cela veut dire que nous sommes entrer dans aucune des conditions IF ,
// donc que l'internaute a bien rempli les champes controles, on affiche donc un message de validation

  ?>
  <form  method="post" action="">
  <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="pseudo">
          </div>
    </div>
  </div> 
    <div class="form-group col-md-6">
      <label for="mdp">Password</label>
      <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="passwordtwo">Repetér votre mot de passe</label>
      <input type="password" class="form-control" name="passwordtwo" id="passwordtwo" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom">
    </div>
      <div class="form-group col-md-6">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prenom">
          </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="id" id="email" placeholder="Email">
    </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">F</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">H</label>
</div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="telephone">Telephone</label>
    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Votre numero de telephone">
  </div>
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" name="city" id="city">
    </div>
    <div class="form-group col-md-2">
      <label for="zip">Code postale</label>
      <input type="number" class="form-control" name="zip" id="zip">
    </div>
    <button type="submit" name="form2" class="col-md-2 btn btn-primary ">Sign in</button>
    <br>
    <br>
    <br>
    </div>
</form>
</body>
</html>