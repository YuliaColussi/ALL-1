<?php

class Autoload
    {                                   //Controller\Controller;
        public static function className($className)
        {
            require __DIR__ . '/' .str_replace('\\', '/', $className . '.php');
            // str_replace() permt de remplacer les anti-slash '\', nous avons deux anti-slash sinon l'interpréteur considère que c'est un caractère d'échappement
            echo "require " . __DIR__ . '/' .str_replace('\\', '/', $className . '.php');
        }
    }

    spl_autoload_register(array('Autoload', 'className')); // s'execute lorsque l'interpreteur voit passer le mot clé 'new' et la fonction 'className' est executée dans la meme temps

    // Controller\Controller : envoyé en argument de la méthode 'className'

    //new
$a = new Controller\Controller; // au moment de l'instanciation l'autoload s'execute et va chercher dans le dossier 'Controller' le fichier 'controller.php', d'ou l'importance du nommage des dossiers et des fichiers

// le namespace doit avoir le meme nom que le dossier

// Exo : faire le meme affichage avec le ligne suivante :

//--------------------------------------------------------
$b = new Model\EntityRepository;


    //new

?>