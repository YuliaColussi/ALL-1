<?php
                    //$liste2  //Mario
function recherche($tab, $elem)
{
    if(is_array($tab))
    throw new Exception('Vous devez envoyer un ARRAY !!');

    if(sizeof($tab) <= 0)
    throw new Exception('Vous devez envoyer un ARRAY avec un contenu');

    $position = array_search($elem, $tab);
    return $position;
}

//-----------------------------

$liste1 = array();

$liste2 = array('Mario', 'Yoshi', 'Toad', 'Bowser');

//-----------------------------

try{ //blick d'essay ,on va essayer d'executer les instructions suivantes dans le try
    echo "Position de 'Mario' dans le tableau ARRAY : " . recherche($liste2, 'Mario') . '</strong><hr>';
    echo "Position de 'Bowser' dans le tableau ARRAY : " . recherche($liste2, 'Toad') . '</strong><hr>'; 

    // echo "Traitements..." // ça n'a pas marché, il n'y a pas de raison de continuer des traitements si l'un d'etre eux dysfonctionne, car les prochaines traitements peuvent etre dépendant de celui qui ddysfonctionne
}
catch(Exception $e) //Block de capture, on tombe dans le bloc 'catch' si un traitement a dysfonctionné dans le bloc 'try'. Cela permet d'attarper les exceptionnes et de personnalisr les messages d'erreurs
{
    //  $e est un objet issu de la class 'Exception', il contient ses propres méthodes tel que getMessage() qui permet d'afficher le message d'erreur 
    echo '<pre>';print_r($e);echo'</pre>';
    echo '<pre>';print_r(get_class_methods($e));echo'</pre>';

    // EXO : afficher une phrase comportant le message d'erreur, le fishier dans lesquel est l'erreur et la ligne de l'erreur et la logne de l'erreur


echo "il y a une erreur : " .  $e->getMessage() . "a la ligne " . $e->getLine() . "dans la fishier " . $e->getFile(); //on pioche dans l'objet afin de personnaliser le message d'erreur
}

// Il est possible de mettre pluisieurs blocs try/catch à la suite. try/catch fonctionne ensemble

echo '<hr></hr>';
// Connexion BDD

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
    echo "Connexion réussie !!";
    //Lorsque le traitement dysfonctionne dans le 'try', on toombe dans le 'catch' et la classe PDOExcepion est instancié / $e représente un objet issu de la classe PDOExceptionn, cet objet contient des méthodes avec les détail de l'erreur (message, ligne, fishier, code_erreur etc ... )
}
catch(PDOException $e)
{
    //Exo: personnaliser le message d'erreur en cas de mauvais connexion à la BDD
    echo "il y a une erreur : " .  $e->getMessage(); //personnalise le message d'erreur
}




?>