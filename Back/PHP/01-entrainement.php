<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Entrainement PHP</title>
</head>
<body>
<div class="container">
    <h2 class="diplay-4 text-center">Ecriture et affichage</h2><hr>
    <!-- Nous pouvons écrire du html dans un fishier ayant l'extension PHP, l'inverse n'est pas possible -->
    <?php // ouverture de la balise PHP
    // Il est possible d'ouvrir la balise PHP autant de fois que l'on souhaite sur un fishier PHP
    echo 'Bonjour';
    // echo c'est une instruction d'affichage pour la PHP qui peut etre traduire par 'affiche moi'
    echo '<br>';// Nous pouvons également y mettre du HTML
    print 'Bonjour'; // print est une autre instruction d'affichage, pas de difference avec 'echo'

    echo '<hr><h2 class="display-4 text-center">Commentaires</h2><hr>';

    // fermeture de la balise PHP
    ?>
    <?= "Allo" ?><!-- le = remplace le 'echo' -->
    <strong>Bonjour</strong>
    <!-- nous voyons qu'il est également possible de fermer et ré-ouvrir PHP pour mélanger du code HTML&PHP -->

    <?php

    echo '<br>Texte<br>';//ceci est un commentaire sur une seule ligne 
    echo 'Texte'; /*ceci est un commentaire
    sur plusieurs lignes
    */
    echo 'Texte'; # ceci est un commentaire sur une seule ligne

    echo '<hr><h2 class="display-4 text-center">Variables : Types /Declaration / Affectation</h2><hr>';
    // <!-- Une variable est un espace nommé permettant de conserve une valeur -->

    //$2a ->erreur !! / $a2 -> OK
    // XCaractère autorisés : A à Z / a à z / de 0 à9
    // Pas d'accents, pas d'espaces

    $a = 127;//affection de 127 dans la variable nommé "a";
    // gettype() est une fonction prédéfinie qui retourne  le type d'une variable
    echo gettype($a);// Il s'agit d'une entier : INTEGER
    echo '<br>';

    $b = 1.5;
    echo gettype($b);//un nombre à virgule : DOUBLE
    echo '<br>';

    $c = 'une chaine';
    echo gettype($c);//un nombre à virgule : STRING
    echo '<br>';


    // Entre quotes c'est une chaine de caracteres
    $d = '127';
    echo gettype($d);//un nombre à virgule : STRING
    echo '<br>';

    $e = true;
    echo gettype($e);//un nombre à virgule : BOOLEAN
    echo '<br>';


    echo '<hr><h2 class="display-4 text-center">Concatenation</h2><hr>';

    $x = "Bonjour";
    $y = "Tout le monde !!";
    echo $x . $y . '<br>'; // point de concatenation que l'on peut traduire par 'suivi de'
    echo "$x $y <br>";//entre quillement, les variables sont évaluées
    echo '$x $y <br>'; //entre simple quote, les cariables ne sont pas évaluées, c'est une chaine de caractère
    echo 'aujourd\'hui<br>'; // si il y a une apostrophe dans la chaine de caractère, nous plaçons un antislash pour dire vque c'est bien une apostrophe
    echo 'aujourd\'hui<br>';
    echo 'Hey ! ' . $x . $y . '<br>'; //concatenation de texte et la variable
    echo '<br>' , 'coucou' , '<br>'; //concaténation avec une virgule (la virgule et le point de concatenation sont similaire)


        echo '<hr><h2 class="display-4 text-center">Concatenation lors de l\'affectation</h2><hr>';

        $prenom1 = 'Bruno';
        $prenom1 = 'Claire';
        echo $prenom1 . '<br>'; //cela remplace 'Bruno' par 'Claire', donc affiche 'Claire'

        $prenom2 = 'Nicolas';
        $prenom2 = 'Marie';
        echo $prenom2 . '<br>';// cela  ajoute SANS remplacer la valeur précédente grace à l'opérateur .=, affiche 'Nicolas Marie'


        
        echo '<hr><h2 class="display-4 text-center">Constante et constante magique</h2><hr>';
        //Une constante tout comme cariable permet de conserve une valeur mais comem son nom l'indique, la valeur est ...
        //constante!! On ne pourra pas changer sa valeur durant l'execurion du script
        define('CAPITALE', 'Paris');//Par convention, une constante se déclare toujours en majuscule
        echo CAPITALE . '<br>';

        //define('CAPITAL', 'Rome'); /!\ erreur ! Il n'est pas possible de rédeclarer une constante deja definit

        //constante magique
        echo __FILE__.'<br>';
        echo __LINE__.'<br>';
        // _FUNCTION_ / _CLASS_ / _METHOD_

        // Exo : afficher vert-jaune-rouge (avec les tirets) en mettant chaque couleur dans une variable, faites en sorte que chaque
        //mot soit de la bonne couleur

        $vert = "<font color='green'>vert";
        $jaune = "<font color='yellow'>jaune";
        $rouge = "<font color='red'>rouge";

        $vert = '<span class="text-success">vert</span>';
        $jaune = '<span class="text-warning">yellow</span>';
        $rouge = '<span class="text-danger">red</span>';


        echo "$vert-$jaune-$rouge<br>";
        echo $vert . '-' . $jaune . '-' . $rouge;

               echo '<hr><h2 class="display-4 text-center">Operateurs arithmétique</h2><hr>';
               $a = 10; $b = 2;

               echo $a + $b . '<br>'; //affiche 12
               echo $a - $b . '<br>';//affiche 8
               echo $a * $b . '<br>';//affiche 20
               echo $a / $b . '<br>';//affiche 5

               // opération /affectation

               $a += $b; //equivaut = $a = $a + $b;
               echo $a . '<br>'; //12
               $a -= $b;//equivaut = $a = $a - $b;
               echo $a . '<br>'; //10
               $a *= $b;//equivaut = $a = $a * $b;
               echo $a . '<br>'; //20
               $a /= $b;//equivaut = $a = $a / $b;
               echo $a . '<br>'; //10

            //    contexte : pratique pour le calcul d'un panier

            echo '<hr><h2 class="display-4 text-center">Structures conditionnelles (if/else) - operateurs de comparison</h2><hr>';

            //Isset & Empty
            $var1 = 0;
            $var2 = '';

            if(empty($var2))
            // empty est une variable qui s'execute quand la variable est vide ou non définie
            {
                echo "0, vide ou non définie<br>";
            }

            //------------------------------------------------
            //isset text l'exsistence de variable
            if(isset($var2))
            {
                echo "var2 existe et est définie par rien <br>";
            }

            /*OPARETEURS DE comparison
            = égal à9== comparison de la valeur
            == comparison de la valeur
            === comparison de la valeur et du types
            < Strictement inférieur à
            > Strictement superieur à
            <= Inferieur ou egal à
            >= Superieur ou egal à
            ! nest pas
            != different de
            || OR OU
            && AND ET
            XOR condition exclusive
            */

            $a = 10; $b = 5; $c = 2;
            // if / else
            if($a <$b) 
            {
                echo "A est bien superieur à B<br>";
            }
            else
            // si la condition if n'est pas vrifée, c'est le code dans la else qui s'execute / else($b == 5> =>/!\ erreur)
            {
                echo "non c'est B qui est superieure à A <br>";
            }

            //if / elseif / else
            if($a >$b && $b > $c)
            {
                echo "ok pour les deux conditions";
            }
            else if($a == 9 || $b > $c)
            {
                echo "ok pour au mois une des 2 conditions";
            }
            else {
                echo "tout le monde est faux";
            }

            //ELSE IF permet d'ajouter des cas supplimentaire a la 
            //condition if
            // Il peut y avoir plusieurs ELSEIF dans la meme condition
            // Si une des conditions superieures est verifiée, ELSEIF
            // blcoque le script et tout les conditions suivantes ne seront pas exalues.

            // Condition exclusive
            if($a == 10 XOR $b == 6)
            {
                echo "ok condition exclusive<br>";
            }
            //Pour entrer dans les accolades, il faut que seulement une des 2 conditions soient verifiees.


            // Forme contracté : 2eme possibilite d'ecriture
            echo ($a == 10)? "A est egal à 10<br>" : "A n'est pas egal a 10<br>";
            // condition ternaire : le '?' remplace le IF et ':' remplace de ELSE

            $varA =1;
            $varB ='1';
            if($varA == $varB)
            {
                echo"Il s'agit de la meme chose<br>";
            }

            // Avec la presence du triple egal , le tst ne fonction pas, car les types de variables sont differentes. INTEGER n'est pas égal a string.
            // = égal à9== comparison de la valeur
            // == comparison de la valeur
            // === comparison de la valeur et du types

            echo '<hr><h2 class="display-4 text-center">Condition SWITCH</h2><hr>';

            // $perso = 'Mario';
            // switch($perso)
            // {
            //     case 'Luigi':
            //         echo "Vous avez choisi $perso<br>";
            //     break;
            //     case 'Toad':
            //         echo "Vous avez choisi $perso<br>";
            //     break;
            //     case 'Bowser':
            //         echo "Vous avez choisi  $perso<br>";
            //     break;
            //     default:
            //         echo "Vous etes fou !! C'est Mario la meilleur!";
            //     break;
            // }
            // Si on a une grande comparison de cas, la condition SWITCHest a privilégié
            // 'case' représente le cas dans lesquel nous pouvons potentiellement tomber
            //'break' permet de stopper le script si nous tombons dans le cas

            // EXO : pouvez vous faire le meme chose que le SWITCH avec des conditions if / elseif / else ?

            $perso1 = 'Mario';
            $perso2 = 'Luigi';
            $perso3 = 'Toad';
            $perso4 = 'Bowser';
            if($perso1 === $perso2 || $perso1 === $perso3 || $perso1 === $perso4)
            {
                echo "Vous avez choisi $perso1<br>";
            }
            else if($perso1 = $perso1)
            {
                echo "Vous avez choisi $perso1<br>";
            }
            else {
                echo"Vous etes fou !! C'est Mario la meilleur!";
            }

            
            echo '<hr><h2 class="display-4 text-center">Fonctions prédéfinies</h2><hr>';

            // https://www.php.net/manual/en/refs.fileprocess.process.php
            // Une fonction predefinie permet de realiser un traitement specifique

            echo 'Date :' . date("d/m/Y") . '<br>';
            // Lorsque l'on utilise un fonction predifinie, il faut toujours se poser la questio, à savoir
            // ce qu'on doit lui envoyer comme arguments et surtout savoir ce qu'elle retourne
            //  Les arguments de la fonction date() ne sortent pas de nul part, on les retrouvent sur le documentation.

            echo '<hr><h2 class="display-4 text-center">Traitement des chaines (iconv_strlen, strpos, substr</h2><hr>';

            //strpos()
            $email1 = "yuliabelova2307@gmail.com";
            echo strpos($email1, "@");

            /*
            strpos() : string position / fonction prédefinie qui permet de trouver la position d'un caractère dans une chaine arguments :
            1 - la chaine dans laquelle nous souhaitons chercher
            2 - la caractère a trouvè

            // contexte : utile pour vérifie le format d'un email
            */

            $email2 = 'Bonjour';
            echo strpos($email2, "@");
            // cette ligne ne sort rien, pourtant il y a bien quelque chose à l'interieur : FALSE !
            var_dump(strpos($email2, "@"));
            //var8dump shows us that something that the function returns because the function always returns smth
            // Il en existe une autre : print_r()

            // iconv_strlen()
            $phrase = "Mettez une phrase ici à cet endroit";
            echo iconv_strlen($phrase) . '<br>';
            // iconv_strlen() est une fonction prédéfinie qui perùet de calculer la taille d'une chaine
            // de caractère. 
            // Contexte: nous poirrons utiliser pour savoir si le pseudo et le mdp lors d'une
            // inscription ont des tailles conforme.

            //substr()
            $texte = "u Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                        Pourquoi l'utiliser?
                        On sait depuis longtemps que travailler avec du texte lisible et 
                        contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. 
                        L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une 
                        distribution de lettres ple temps, parfois par accident, souvent intentionnellement
                        (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).";

            echo substr($texte, 0, 20) . "<a href=''>Lire la suite</a>";
            //substr() est une fonction prédefinie permettant de retourner une partie de la Chaine
            // arguments: 
            // 1 - la chaine a couper
            // 2- la position de debut 
            // 3 - la position de fin
            // contexte : souvent utilisé pour affichee les actualities avec accroche

            echo '<hr><h2 class="display-4 text-center">Fonction utilisateur</h2><hr>';
            // Les fonctions utilisateurs permettant d'eviter de copier : colelr un code récurant, 
            // on l'encapsule dans une fonction


            // on déclare toujours une focntion avec le miot clé fonction suivi d'une nom de la fonction que nous définissons
            function separation()
            //toujours des parentheses, une fonction peut potentionallement recevoir des arguments;
            {
                echo "<hr><hr></hr>";
            }
            separation();

            //function avec arguments
            function bonjour($qui)
            {
                return "Bonjour $qui <br>";
            }

            echo bonjour('Gregory');
            // quand il y a un "return" dans la fonction, on fair un echo avant
            $prenom = 'Jaques';
            echo bonjour($prenom);
            // l'argument peut etre une variable

            // //----------------------EXO----------------------------------------------
            // function appliqueTva($nombre)
            // {
            //     return $nombre*1.2;
            // }
            // echo "500 euros avec tva 20% font : " . appliqueTva(500); //600€
            // we have put 500 by ourself . "<br>";

            // Exo : pourriez vous améliorer cette function afin que l'on puisse
            //calculer un nombre avec tes tauxes de notre choix (19.6%, 5.5%, 7% etc.)

        //     function appliqueTva($nombre)
        //     {
        //         return $nombre*19.6;
        //     }
        //     echo "500 euros avec tva 20% font : " . appliqueTva(500);
        //     // how to count the taux : 1 + taux / 100%
        // 
        

        function appliqueTVA($nombre, $taux = 20)
        {
            return $nombre *(1+$taux/100);
        }
           echo "500 euros avec tva 19.6% font : " .
           appliqueTva(500, 19.6) . "€<br>"; 
           echo "500 euros avec tva 7% font : " .
           appliqueTva(500, 7) . "€<br>"; 
           echo "500 euros avec tva 5.5% font : " .
           appliqueTva(500, 5.5) . "€<br>"; 
           echo "500 euros avec tva 20% font : " .
           appliqueTva(500, 19.6) . "€<br>"; 

   // ----------------------
   function meteo($saison, $temperature)
   {
       return "Nous sommes en $saison et il fait $temperature degre(s)<br>";
   }
   echo meteo("ete", 20);

   // Exo : gérer le S de degréS en fonction de la temperature, pensez à gérer les articlees : "en" été / "au" printemps
   
    function exoMeteo($saison, $temperature)
   {
        if($temperature > 1 || $temperature < -1)
            $degre = 'degres';
        else
            $degre = 'degre';
    // -------------------------------------------------------
    if($saison == 'printemps')
        $art = 'au';
    else
        $art = 'en';
            
        
        return "Nous sommes en $saison et il fait
        $temperature $degre(s)<br>";
   }
   echo exoMeteo('ete', 2);
   echo exoMeteo('automne', -2);
   echo exoMeteo('hiver', 0);
   echo exoMeteo('printemps', 1);
   echo exoMeteo('printemps', -1);


   //espace globale et espace locale

   function jourSemaine()
   {//espace locale
       $jour = 'Jeudi';
       return $jour;
       echo 'Allo!';
   }

   echo $jour; // ! \\ ne fonctionne pas car cette variable n'est connu qu'à l'intérieur de la fonction,
   // Il n'est pas possible d'appeler une variable déclarée dans l'espace locale 
   //(dans une fonction) vars l'espace globale (espace par défaut de php)

   $recup = jourSemaine();
   echo $recup . "<br>";

    //-----------------------------------------------------------------------------
    $pays = 'France';// variable global
    function affichagePays()
    {
        global $pays; // global permet d'importer une variable déclarée dans l'espace global vers l'espace local (dans une fonction)
        return $pays;
    }
    echo affichagePays();
   
    echo '<hr> <h2 class="display-4 text-center">Structure itérative: les boucles</h2><hr>';
        // Boucle While
        $i = 0;
        while ($i < 5) {
            echo "$i---";
            $i++;
        }
        echo '<br>';
        // exo => faire en sorte que pour le dernier tour de boucle les tirets n' existent plus
        /* Mon Travail
        $i = 0;
        while ($i < 4) {
            echo "$i---";
            $i++;
        }
        if ($i < 3) {
            echo "$i---";
        }else{
            echo "$i";
        } */
        // correction du formateur
        $j = 0;
        while ($j < 5) {
            if ($j == 4)
                echo $j;
            else
                // pas ouvrir une seconde accolade pour le else, dans la même que le if
                echo "$j---";
            $j++;
        }
        echo '<br>';
        // la boucle for
        // même principe que la while, sauf que tout va se passer entre les parentheses ( initialisation, condition d' entrée, incrémentation)
        for ($j = 0; $j < 16; $j++) {
            echo "$j-";
        }
        echo '<br>';
        // exo afficher un selecteur de 30 options avec une boucle
        echo '<hr><select>';
        for ($v = 1; $v < 31; $v++) {
            echo "<option>$v</option>";
        }
        echo '</select>';
        // echo du select fermant obligatoire pour la suite du code
        echo '<br>';
        // exo: faire une boucle qui affiche de 0 a 9 sur la même ligne ( 10 tours)
        $a = 0;
        while ($a < 10) {
            echo "$a-";
            $a++;
        }
        echo '<br>';
        // exo: faire une boucle qui affiche de 0 a 9 sur la même ligne, dans un tableau
        /*Mon travail
        echo '<tr><td>';
        for ( $b = 0; $b <10; $b++){
            echo "<td> $b |</td>";
        }
        
        echo '</td></tr>'; */
        // correction du formateur
        echo '<table class="table table-bordered text-center"><tr>';
        for ($b = 0; $b < 10; $b++) {
            echo "<td> $b</td>";
        }
        echo '</tr></table><hr>';
        echo '<br>';
        // faire la même chose, de 0 a 99, sur  10 lignes, mais sans faire 10 boucles ( principe de la boucle imbriquée)
        echo '<table class="table table-bordered text-center"><tr>';
        // mon travail
        // for ($c = 0; $c < 10; $c++)
        //     for($d = 0; $d <10; $d++) {
        //     echo "<td> $c</td>";
        // }
        // echo '</tr></table><hr>';
        // echo '<br>';
        // correction
        $compteur = 0;
        // le compteur qui va s' incruster dans les td
        echo '<table class="table table-bordered text-center">';
        for ($ligne = 0; $ligne < 10; $ligne++)
            // la boucle qui va créer les lignes ( 10 tel que demandé)
            {
                echo '<tr>';
                for ($cellule = 0; $cellule < 10; $cellule++)
                    // la boucle qui va créer les cellules - colonnes. A chaque fois qu' on crée dix colonnes, on crée une nouvelle ligne etc...
                    {
                        echo "<td>$compteur</td>";
                        // on rappelle ici la variable compteur pour remplir les cellules (td)de notre tableau
                        $compteur++;
                        // le compteur va aller jusqu' a 99, ne va pas se réinitialiser, car on ne l'a pas borduré comme la création de ligne ou de colonnes (<10)
                    }
                echo '</tr>';
            }
        echo '</table>';
        echo '<hr> <h2 class="display-4 text-center">Tableau de données Array</h2><hr>';
        // un tableau ARRAY est declaré un peu comme une variable améliorée car on ne conserve pas qu' une, mais un ensemble de valeurs
        $liste = array("Grégory", "Aziz", "Nassim", "Sylvain", "Nelson");
        // $liste = ["Grégory", "Aziz", "Nassim", "Sylvain", "Nelson"]; - deuxieme façon de ecriture
        // echo $liste;
        // générer une erreur car on ne peut afficher un array avec un simple écho
        // var_dump($liste);
        // permet d' afficher les éléments du array; leur type, length etc....
        echo '<pre>';
        var_dump($liste);
        echo '</pre>';
        // la balise <pre>nt permet d' afficher des infos meiux présentées, avec d' autres infos, tel que l' indice
        // elle permet de formater la sortie du pront_r et du var_dump
        // ces intructions d' affichage améliorées permettent de consulter et d' afficher les données d' un tableau, d' une variable, d' un objet etc....
        /*
        ---------------------------
        | Indice    | valeur      |
        ---------------------------
        |      0   | Grégory     |
        ---------------------------
        |      1   | Aziz        |
        ---------------------------
        |     2    | Nassim      |
        ---------------------------
        |     3    | Sylvain     |
        ---------------------------
        |     4    | Nelson      |
        ---------------------------
        */

        // Exo : tenter de sortir "Aziz" en passant par le tableau de données ARRAY sans faire un 'echo Aziz';
        echo $liste[1] . '<br>'; // On va crocheter à l'indice 1 du tableau ARRAY pour extraire la valeur étant stocké à l'indice 1

        echo '<hr> <h2 class="display-4 text-center">Boucle foreach pour les tableau de données ARRAY</h2><hr>';        

        $tab[] = "France";//autre moyen d'effecter une valeur dans un tableau, les crochets vide permettent de générer das indices numériques.
        $tab[] = "Angleterre";
        $tab[] = "Espagne";
        $tab[] = "Italie";
        $tab[] = "Portugal";
        // echo $tab; /!\erreur!

        // echo 'pre'; print_r($tab); echo '<pre>';

        // bouclle foreach
               /*
        ---------------------------
        | Indice    | valeur      |
        ---------------------------
        |     0   | France        |
        ---------------------------
        |     1   | Angleterre    |
        ---------------------------
        |     2    | Espagne      |
        ---------------------------
        |     3    | Italie       |
        ---------------------------
        |     4    | Portugal     |
        ---------------------------
           $key             $value
        */
        // Lorsqu'il n y a qu'un seule variable, $value parcours la colonne des valeurs du tableau de donnée ARRAY
        //La boucle foreach est un moyen simple de passer en revue un tableau de données ARRAY (aussi les objets : futur chapitre)
        foreach($tab as $value)// as fait partie du langage et est obligatoire, $value est une variable de reception que nous nommons, elle
        //receptionne une valeur du tableau
        //par tour de boucle
        {
            echo "$value<br>";//on affiche successivement les éléments du tableau
        }

        // -----------------------------
        // foreach : indice + valeur
        // Lorsqu'il y a 2 variables, la première parcours la colonne des indices ($key)
        //et l'autre la colonne des valeurs ($value)
        foreach($tab as $key => $value) // la flèche est obligatoire
        {
            echo "$key => $value<br>";
        }
   ?>
   <hr>

   <!-- 2ème possibilité d'écriture -->
   <?php foreach($tab as $key => $value): ?>

   <?= $key; ?> => <?= $value; ?><br>

   <?php endforeach;  ?>

   <!-- for(): /endfor -->
   <!-- if(): / else: / endif -->
   <!-- while(): / endwhile -->


   <?php
   // il est possible de définir ses proipres indices
        $perso = array("m" => "Mario", "L" => "Luigi", "z" => "Aziz", "n" => "Nassim");
        echo '<hr><pre>'; print_r($perso); echo '</pre>';

        echo "Taille du tableau : ". count($perso) . '<br>';
        echo "Taille du tableau : ". sizeof($perso) . '<br>';
        // sizeof et count retourne la taille d'un tableau ARRAY, combien d'éléments il y a à l'interieur. Pas de differnce entre les deux.

        echo implode("-", $perso) . '<br>';// implode() est une fonction prédéfinie qui rassemble les éléments
        // d'un tableau en un chaine (séparé par un simbole). L'inverse: explode

        
        echo '<hr> <h2 class="display-4 text-center">Table ARRAY multidimensionnel</h2><hr>';    
        // pleusiers tableaux dans l'autre tableau = multidimensionnel

        $tab_multi = array(
            0 => array("nom" => "Macron", "salaire" => 1),
            1 => array("nom" => "Lacroix", "salaire" => 15000)
        );

        echo '<pre>'; print_r($tab_multi); echo '</pre>';

        //Exo: tenter de sortir "Macron" en passant par le tableau multidimensionnel représentépar $tab_multi sans faire un 'echo Macron'
        
        echo $tab_multi[0]["nom"] . '<br>';

        //Exo: afficher l'ensemble du tableau multi à l'aide de boucle foreach

    foreach($tab_multi as $key => $tab)
    {
        echo'<div class="col-md-4 offset-md-4 alert alert-success text-dark mx-auto text-center">';
        foreach($tab as $key2 => $value)
        {
            echo "$key2 => $value<br>";
        }
        echo '</div>';
    }
    
    // ---------------------------------------------------------------------------------------------------------------------------------------

    // la boucle for permet de tourner autant de fois qu\'il y a de lignes dans la tableau multi, donc 2 tour de boucle dans notre cas
    for($i = 0; $i < count($tab_multi); $i++)
    { 
     echo'<div class="col-md-4 offset-md-4 alert alert-info text-dark mx-auto text-center">';
                          //0
        foreach($tab_multi[$i] as $key => $value)
        //on se sert le variable $i de la boucle pour aller
        //crocher à chaque indice du tableau multi et parcourir les données.
        {
            echo "$key2 => $value<br>";
        }
        echo '</div>';
    }


       echo '<hr> <h2 class="display-4 text-center">Superglobales</h2><hr>';

    //    Les superglobales sont des variables de type ARRAY, elles sont accessibles de partout, c'est à la
    //fois dans l'espace glovbale et local, elle permettent de véhiculer des données
    /*
         $_SERVER : véhicule les données lié au serveur
                        $_GET : véhicule les données transmit dans l'URL
                        $_POST : véhicule les données dun formulaire
                        $_FILES : véhicule les données d'un fichier umploader
                        $_COOKIE : véhicule les données d'un fichier cookie
                        $_SESSION : véhicule les données d'un session en cours
                */


    echo '<pre>'; print_r($_SERVER); echo '</pre>';



// ---------------------------------------------------------------------------------------------------------------------------

    echo '<hr><h2 class="display-4 text-center">Classe de objet</h2><hr>';

    // un objet est un autre type de données. Un peu à la manier d'un ARRAY, il permet de regrouper des informations.
    //Cependent , cela va beaucoup plus loin car on peux y déclarer des variables (applée : attribut ou propriété) mais aussi des fonctions (appelée : méthodes).

    // une class est un peu comme un plan de construction, qui regroupe des données 
    // Par convention, le nom la classe always starts with a big letter
    class Etudiant
    {
        public $prenom = 'Iuliia';// public permet de précider que l'élément sera accessible de partout (il y a aussi PROTECTED et PRIVATE)
        public $age = 26;
        public function pays()
        {
            return 'France';
        }
    }

$objet = new Etudiant; // new permet dd'instancier la classe Etudiant et d'en faire un objet. $objet est un exemplaire de la classe Etudiant, c'est un enfant de la classe. 
// Pour exploiter les données déclarées dans la classe, il faut créer un instance / un objet de la classe
echo '<pre>'; var_dump($objet); echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($objet)); echo '</pre>'; // var_dump permet dobserve que l'on a bien un objet issu de la classe Etudiant à
// l'identifiant 1 et en observe aussi les propriétés (varaiaibles) déclarées dans la classe

// On pioche dans un ARRAY avec les crochets '[]' / on pioche dans un objet toujours avec une fléchee '->'
echo "Je m'appel : " . $objet->prenom . '<hr>';
// dans l'objet, cela nous permet datteindre la propriété $prenom déclarée dans la classe
// get_class_methods() permet dafficher toute les méthodes (fonctions) issu de la classe Etudiant


echo "Je age est : " . $objet->age . 'ans<hr>';
echo "J'habite en' : " . $objet->pays() . '<hr>';


?>


    </div>
</body>
</html>