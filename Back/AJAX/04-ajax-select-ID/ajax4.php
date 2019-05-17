<?php
    require_once('init.php');
    extract($_POST);
    $tab = array();


        $result = $bdd->query("SELECT * FROM employes WHERE prenom = '$prenom'");
      
        
        
        
        
        // $tab['resultat'] = '<table class="table">';    

        $tab['resultat'] = '<table class="table table-bordered"><tr>';
        for($i = 0; $i < $result->columnCount(); $i++)
        {
            $colonne = $result->getColumnMeta($i);
            //echo '<pre>'; print_r($colonne); echo '</pre>';
            $tab['resultat'] .="<th>$colonne[name]</th>"; 
        }

        $tab['resultat'] .= '</tr><tr>';
        $employe = $result->fetch(PDO::FETCH_ASSOC);
        // echo '<pre>'; print_r($employe); echo'</pre>';


        foreach($employe as $value)
        {
            $tab['resultat'] .= "<td>$value</td>";
        }
        $tab['resultat'] .= '</tr></table>';

        
        
        
        echo json_encode($tab);
        
?>




