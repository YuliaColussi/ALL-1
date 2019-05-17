<?php
    require_once('init.php');
    extract($_POST);
    $tab = array();

        
        //--------------------------------------DECLARATION DU SELECTEUR A JOUR------------------------
        $result = $bdd->query("SELECT * FROM employes WHERE service = '$service'");
        $tab['resultat'] = '<table class="table table-bordered"><tr>';
        for($i = 0; $i < $result->columnCount(); $i++)
        {
            $colonne = $result->getColumnMeta($i);
            //echo '<pre>'; print_r($colonne); echo '</pre>';
            $tab['resultat'] .="<th>$colonne[name]</th>"; 
        }

        $tab['resultat'] .= '</tr><tr>';
        // echo '<pre>'; print_r($employe); echo'</pre>';
        
        while($employe = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab['resultat'] .= '<tr>';
            foreach($employe as $value)
            {
                $tab['resultat'] .= "<td>$value</td>";
            }
            $tab['resultat'] .= '</tr>';
        }
        $tab['resultat'] .= '</tr></table>';

        

echo json_encode($tab);

?>