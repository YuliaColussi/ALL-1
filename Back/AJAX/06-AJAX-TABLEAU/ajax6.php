<?php
    require_once('init.php');
    extract($_POST);
    $tab = array();





    if(!empty($prenom)  && !empty($nom)  && !empty($nom) && !empty($service) && !empty($salaire))
    { 
        $resultat = $bdd->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('$prenom', '$nom', '$sexe', '$service', '$date_embauche', '$salaire')");

        $tab['message'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$prenom</strong> a bien été enregistré</div>";

    }
    else
    {
        $tab['message'] = "<div class='col-md-6 offset-md-3 alert alert-danger text-center'>L'employé n'<strong>$prenom</strong> a pas bien enregistré</div>";        
    }

    echo json_encode($tab);

?>