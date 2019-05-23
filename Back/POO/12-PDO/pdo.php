<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php

// Exo : réaliser le traitement PHP pour connecter à la BDD 'entreprise'


if ($bdd = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)))
        {
            echo "vous etes connectée";
        }

echo '<pre>';print_r($bdd);echo'</pre>';
echo '<pre>';print_r(get_class_methods($bdd));echo'</pre>';

echo "<h2 class='display-4 text-center'>exemple n 1 SELECT + QUERY + FETCH</h2><hr>";

$resultat = $bdd->query("fgbdfhd"); // erreur de requete volontaire
echo '<pre>';print_r($bdd->errorInfo());echo'</pre>'; // en cas d'erreur de requete SQL, errorInfo() contient le message d'erreur et les codes erreurs

//  EXO : afficher les données de l'employé id 415

$employer = $bdd->query('SELECT * FROM employes WHERE id_employes = 592');
$resulta =  $employer->fetch(PDO::FETCH_ASSOC);

echo '<pre>';print_r($resulta);echo'</pre>';

foreach($resulta as $key => $value)
{
    echo "$key - $value<hr>";
}


// Exo : afficher successivement les données de chaque employé en utilisant la méthode FETCHALL()


$employer = $bdd->query('SELECT * FROM employes');
$resulta =  $employer->FETCHALL(PDO::FETCH_ASSOC);

echo '<pre>';print_r($resulta);echo'</pre>';

echo '<div class="alert alert-info col-md-4 offset-md-4 text-center text-dark">';

foreach($resulta as $key => $tab)
{
foreach($tab as $key2 => $value)
{
    echo "$key2 - $value<hr>";
}
echo '</div>';
}

echo "<h2 class='display-4 text-center'>exemple n 2 SELECT + QUERY + FETCH_ASSOC</h2><hr>";
$resultat3 = $bdd->query('SELECT * FROM employes', PDO::FETCH_ASSOC);// on demande d'indexer avec le nom des champs quand c'est toujours au stade d'objet
echo '<pre>';var_dump($resultat3);echo'</pre>';

// EXO : afficher l'ensemble des employés sous forme de tableau HTML via l'objet '$resultat'



echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $resultat3->columnCount(); $i++)
{
    $colonne = $resultat3->getColumnMeta($i);
    echo"<th>$colonne[name]</th>";
}
echo '<tr>';
foreach($resultat3 as $employe) 
{
    // echo '<pre>';print_r($employe);echo'</pre>';
    echo "<tr>";
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';


//Exo : inserez vous dans la BDD à l'aide d'une requete INSERT 

$data_insert = $bdd->prepare("INSERT INTO employes VALUES (DEFAULT, 'Iuliia', 'Colussi', 'f', 'student', '2018-12-12', '5500')");
        
$data_insert->execute();

echo "Nombre de résultat affecte par l'INSERT : <strong>$resultat</strong>";

echo "<h2 class='display-4 text-center'>exemple n 5 PREPARE + '?' + FETCH</h2><hr>";

$resultat = $bdd->prepare("SELECT * FROM employes WHERE nom = ?"); // On va dans un premier temps "preparer" la requete sans la partie variable, que l'on représentera avec marqueur sous forme de point d'interrogation

$resultat->execute(array("Gallet")); // Gallet va remplacer le point d'interrogation juste au dessus

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo implode($donnees, ' - ');// permet d'extraire les valeurs d'un tableau en chaine de caractère avec un séparateur

echo "<h2 class='display-4 text-center'>exemple n 6 PREPARE + ':' + FETCH</h2><hr>";

$resultat = $bdd->prepare("SELECT * FROM employes WHERE nom = :nom");
$resultat->execute(array("nom" => "BELOVA")); // il est possible d'envoyer directement à l'execution la valeur des marqueurs nominatif

$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo implode($donnees, ' - ');

echo "<h2 class='display-4 text-center'>exemple n 6 PREPARE + ':' + FETCH</h2><hr>";

// EXO : selectionne à l'aide d'une requete préparée les information de l'employée 'Thoyer' et afficher ses données à l'aide de la mthode FETCH_OBJ

$resultat = $bdd->prepare("SELECT * FROM employes WHERE nom = :nom");
$resultat->execute(array("nom" => "Laborde")); 

$employe = $resultat->fetch(PDO::FETCH_OBJ); // retourne un objet issu de la classe StdClass avec chaque indice comme proptiété public
echo '<pre>';print_r($employe);echo '</pre>';

echo "Prenom : " . $employe->prenom . '<hr>';
// La boucle foreach() permet de passer en revue l'objet '$employe'
foreach($employe as $key => $value)
{
    echo "$key - $value<br>";
}
echo '<hr>';

echo "<h2 class='display-4 text-center'>exemple n 8 transaction + requete et annulation de celle ci</h2><hr>";

$bdd->beginTransaction();

$result = $bdd->exec("UPDATE employes SET salaire = 1000");
echo "Nombre d'enregistrement affecté par l'UPDATE : $result<hr>";

$resultat = $bdd->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo "<span>Avec les changements</span>";



echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++)
{
    $colonne = $resultat->getColumnMeta($i);
    echo"<th>$colonne[name]</th>";
}
echo '<tr>';
foreach($resultat as $employe) 
{
    // echo '<pre>';print_r($employe);echo'</pre>';
    echo "<tr>";
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

// Si on avait voulu valider la transaction, nous aurions du pointer sur la méthode 'commit' ---> $bdd->commit();

$bdd->rollBack();// permet d'annuler la transaction et de revenir à l'état initial

$resultat = $bdd->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo "<span>On annule les changements</span>";



echo '<table class="table table-bordered text-center"><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++)
{
    $colonne = $resultat->getColumnMeta($i);
    echo"<th>$colonne[name]</th>";
}
echo '<tr>';
foreach($resultat as $employe) 
{
    // echo '<pre>';print_r($employe);echo'</pre>';
    echo "<tr>";
    foreach($employe as $value)
    {
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</table>';

echo "<h2 class='display-4 text-center'>exemple n 9 : FETCH_CLASS</h2><hr>";

class employes
{
    public $id_employes;
    public $prenom;
    public $nom;
    public $sexe;
    public $service;
    public $date_embauche;
    public $salaire;
}

$result = $bdd->query("SELECT * FROM employes");
$objet = $result->fetchAll(PDO::FETCH_CLASS, "Employes"); // permet de prendre les resultats de la requete et d'afficher les propriorités de l'objet. Chaque valeur va etre ré-associe aux différentes propriétés de la classe (il faut pour cela que l'orthographe des nom des colonnes /champs SQL correspondent aux propriorites de objet)

echo '<pre>'; print_r($objet);echo'</pre>';

foreach($objet as $value)
{
    echo $value->prenom . '<hr>';
}

?>

