<?php
    require_once('init.php');
    extract($_POST);
    $tab = array();
    // Requete test: 
    // $result = $bdd->query("INSERT INTO employes (prenom) VALUES ('Iuliia')");

    if(!empty($personne))
    { 
     $result = $bdd->query("INSERT INTO employes (prenom) VALUES ('$personne')");
     $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$personne</strong> a bien été enregistré</div>";
    }
    else
    {
     $tab['resultat'] = "<div class='col-md-6 offset-md-3 alert alert-danger text-center'>L'employé n'<strong>$personne</strong> a pas bien enregistré</div>";        
    }

    echo json_encode($tab);// pour pouvoir faire véhiculer des données en HTTP une requète AJAX, nous devons encoder les données en json, c'est un format léger. C'est la réponse de la requete 'retour' AJAX que l'on retrouve dans fonction(data) dans le fishier ajax2.js 
    ?>