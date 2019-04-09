<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire de contaact</title>
</head>
<body>
    <!-- 1. Réaliser un formulaire avec les champes suivantes : objet, email, message et un bouton submit
        2.  Controler en PHP que l'on receptionne bien toute les données du formulaire-->

        <?php
        echo '<pre>'; print_r($_POST); echo'</pre>';


        // on vérifie si on a bien cliqué sur le bouton submit qui a pour attribute name 'submit',
        // si nous avions plusieurs formulaires sur le meme page, la condition permet de différencier quel formulaire a été validé
        if(isset($_POST['submit'])){
            $destinataire = 'yuliabelova2307@gmail.com';

            //2eme argument
            $sujet = $_POST['objet'];

            //3eme argument
            $message = $_POST['message'];

            //4eme argument
            $entetes = "MIME-Version 1.0 \n";

            //entetes expéditeur : toujours 'From' et pas autre chose
            $entetes = 'From: $_POST[email]\n';

            //entetes d'address de retour :
            $entetes .="Reply-to: yuliabelova2307@gmail.com\n";

            //priorité urgente
            $entetes .= "X-priority: 1\n";

            //type de contenu HTML / we can write en html directly in the body of a message
            $entetes .="Content-type: text/html; charset=utf-8\n";

            mail($destinataire, $sujet, $message, $entetes);//fonction prédéfinie permettant l'envoi de mail / toujpurs 4 arguments : destinataire / message / expéditeur. 
            //L'ordre est crucial sinon le test de fonction pas
        }
        ?>

        <form  method="post" action="">
  <div class="form-row col-md-6 offset-md-4 text-center">
      <div class="form-group">
            <label for="prenom">Objet</label>
            <input type="text" id="objet" class="form-control" name="objet" placeholder="Objet">
          </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="id" id="email" placeholder="Email">
    </div>
     <div class="form-group">
    <label for="textarea">Example textarea</label>
    <textarea class="form-control" id="teaxtarea" name="message" placeholder="Votre message svp" rows="3"></textarea>
  </div>
      <button type="submit" name="submit" class="btn btn-primary mb-1">Submit</button>
    </div>
</form>
</body>
</html>