<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Requet PDO</title>
</head>
<body>
<div class="container">
<h2 class="display-4 text-center">01. PDO : Connexion</h2><hr>
    <?php
        // class PDO {
        //     // methodes (fonctions)
        //     // propriétés (varaiaibles)
        // public function query(){
            // traitement

        // }
        // }
        $pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // PDO est un classe prédéfinie en PHP qui permet de se connecter à une base de donnée. Cette classe possède ses propres méthodes (fonctions)
        // qui nous permettrons par exemple de formuler et d'executer une requete SQL
        //$pdo est l'objet qui permet d'intééragir, d'interroger la BDD

        // arguments : 1 (server = BDD) / 2 (identifiant) / 3 (mdp) / 4 (options PDO);

        echo '<pre>'; var_dump($pdo); echo '</pre>'; //affiche l'objet PDO
        echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>'; // affiche les méthodes issu de la classe prédéfinie PDO

        
        echo '<hr><h2 class="display-4 text-center">02. PDO : EXEC - INSERT / UPDATE / DELETE </h2><hr>';


        // EXO : formulaire le requete permettent de vous inserer dans la BDD entreprise donc dans la table employes



        $resultat = $pdo->exec("INSERT INTO employes(prenom, nom, sexe,service, date_embauche, salaire) VALUES ('Iuliia','COLUSSI', 'f', 'PDG', 2018-01-01, 15000)");
        echo "Nombre d'enregistrement affecté(s) par l'INSERT : $resultat<br>";
        echo "Dernier ID généré : " . $pdo->lastInsertId() . '<hr>';
        
        // EXEC() est une méthode issue de la classe prédéfinie PDO, elle permet de formuler et executer des réquètes SQL, c'est en argument (entre les parenthèses de la méthode)*
        // qui l'on envoi la requete complète
        // EXEC() est prévu pour des requetes ne retournant pas de jeu de résultats (INSERT / UPDATE / DELETE);
        
        // UPDATE
        // Exo: réaliser le traitement permettant de modifier le salaire de l'employé n 350 par 1200
        if(isset($true))//permet de ne plus avoir l'insert a chaque rechargement de la page
        {
        $resultat = $pdo->exec('UPDATE employes SET salaire = "1200" WHERE id_employes = "350";');
        echo "Nombre d'enregistrement affecté(s) par UPDATE : $resultat<br>";
        }

        //DELETE
        // Exo: réaliser le traitement permettant de supprimer l'imploye n 350

        $resultat = $pdo->exec("DELETE FROM employes WHERE id_employes = 350");
        echo "Nombre d'enregistrement affecté(s) par DELETE : $resultat<br>";

        
        echo '<hr><h2 class="display-4 text-center">03. PDO : SELECT + FETCH_ASSOC (1 seul résultat) </h2><hr>';

        $result = $pdo->query("SELECT * FROM employes WHERE id_employes = 415");
        echo '<pre>'; var_dump($result); echo '</pre>';
        echo '<pre>'; var_dump(get_class_methods($result)); echo '</pre>';

        $employe = $result->fetch(PDO::FETCH_ASSOC);// retourne un tableau ARRAY indexé avec le nom des champs

        $employe = $result->fetch(PDO::FETCH_NUM);// retourne un tableau ARRAY indexé numériquement

        $employe = $result->fetch(PDO::FETCH_BOTH);// retourne un tableau ARRAY indexé à la fois numeriquement et avec le nom des chaamps

        $employe = $result->fetch(PDO::FETCH_BOTH);// il ne pas possible d'associer 2 fois la meme méthode sur le meme resultat
        echo '<pre>'; print_r($result); echo '</pre>';

        //  Exo: afficher les informations a l'aide d'un affichage conventionnel en excluant id_employes


foreach($employe as $key => $value)
{
    if($key != 'id') 
    {// si l'indice est différent de 'id', alors on affiche l'indice en fonction de la valeur de la superglobale $_GET (ARRAY)
    // c'est ce qui permet d'exclure l'indice 'id'
    echo "$key : $value <hr>";
    }
}

//  QUERY() est une méthode issue de la classe PDO qui permet de formulaire et d'executer des requetes SQL.
// Elle est prévue pour des requetes retournant un jeu de résultat (SELECT). Lorsqu'on execute une requete de selection, on obtient toujours en retourun autre objet, issu d'un autre classe : PDOStatement.
// Cette classe possède ses propriétés et méthode
// La méthode fetch() permet de rendre le résultat exploidable sous formee de tableau de données ARRAY.


echo '<hr><h2 class="display-4 text-center">04. PDO : QUERY + SELECT + WHILE (pluisiers resultats)</h2><hr>';

$resultat = $pdo->query("SELECT * FROM employes");

echo "<pre>"; var_dump($resultat); echo "</pre>";

// En executant une requete de selection, on obtient en retour un objet PDOStatement, cet objet est inexploitable en l'etait, on lui associe donc la méthode
// FETCH qui retourne un tableau
// Pour récupérer l'ensemble des employés, dans ce cas précis , nous sommes obligé de boucler
// la boucle while permet de dire: tant qu'il y a des employes, on boucle!!
// $employes receptionne un tableau ARRAY d'un employé parr tout de boucle
// PDO::FETCH_ASSOC --> le "::" permettant de faire appel à une constante de la classe PDO sans devoir l'instancier
while($employes = $resultat->fetch(PDO::FETCH_ASSOC))
{

echo "<pre>"; print_r($employes); echo "</pre>"; 
echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-info text-center">';
echo $employes['nom'] . '<hr>'; // pour chaque tour de boucle,, donc pour chaque tableau ARRAY, on va crocheter aux differentes indices
echo $employes['prenom'] . '<hr>';
echo $employes['service'] . '<hr>';
echo $employes['salaire'];
echo '</div>';
 }

 echo '<hr><h2 class="display-4 text-center">04. PDO : QUERY + FETCHALL + FETCH_ASSOC (pluisiers resultats)</h2><hr>';

 $resultat = $pdo->query("SELECT * FROM employes");

 $donnes = $resultat->fetchALL(PDO::FETCH_ASSOC);// fetchAll() retourne un tableau multidimensionnel
 //avec chaque tableau (de chaque employé) indexé numériquement

 echo '<pre>';  print_r($donnes); echo '</pre>';

//  EXO: afficher successivement les données de chaque employé à l'aide de boucle foreach (indice : boucle imbriquée);


    for($i = 0; $i < count($donnes); $i++)
    { 
     echo'<div class="col-md-4 offset-md-4 alert alert-info text-dark mx-auto text-center">';
                          //0
        foreach($donnes[$i] as $key => $value)
        //on se sert le variable $i de la boucle pour aller
        //crocher à chaque indice du tableau multi et parcourir les données.
        {
            echo "$key => $value<br>";
        }
        echo '</div>';
    }

    foreach($donnes as $key => $tab)
    {
        echo'<div class="col-md-4 offset-md-4 alert alert-warning text-dark mx-auto text-center">';
        foreach($tab as $key2 =>  $value)
        {
            echo "$key2 : $value <hr>";
        }
        echo '</div>';
    }


    
    echo '<hr><h2 class="display-4 text-center">04. PDO : QUERY + FETCH + BDD (pluisiers resultats)</h2><hr>';

    // Exo: afficher la liste des bases des données, puis les mettre dans une liste ul li


 $resultat = $pdo->query("SHOW DATABASES");

 $donnes = $resultat->fetchALL(PDO::FETCH_ASSOC);

 echo '<pre>';  print_r($donnes); echo '</pre>';

    ?>
    </div>
</body>
</html>