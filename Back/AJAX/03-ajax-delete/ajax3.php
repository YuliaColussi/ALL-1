<?php
    require_once('init.php');
    extract($_POST);
    $tab = array();

    // --------------------------------------------REQUETE DE SUPPRESSION-------------------------------------------------------
 
    // requete test: 
        $result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$id'");
        
        $tab['message'] = "<div class='col-md-6 offset-md-3 alert alert-success text-center'>L'employé <strong>$id</strong> a bien été supprimé</div>";
        //  on crée un nouvel indice dans la tableau ARRAY pour stocker un message de validation
        
        //--------------------------------------DECLARATION DU SELECTEUR A JOUR------------------------
        $result = $bdd->query("SELECT * FROM employes");
        $tab['resultat'] = '<select multiple class="form-control" id="personne" name="personne">'; 
        $tab['resultat'] .= '</div>'; 
        while($employes = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab['resultat'] .= "<option value='$employes[id_employes]'>$employes[nom]</option>";   
        }
        $tab['resultat'] .= '</select>';
        $tab['resultat'] .= '</div>';
        
       

echo json_encode($tab);

?>