<?php
class Etudiant
{   
    private $error;
    private $prenom; //Iuliia - méthode magique
    public function __construct($arg)
    {                                                               // Iuliia
        echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
        return $this->setPrenom($arg);
    }

    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
        }
        else 
        {
            return "Ce n'est pas un string !!";
        }
        
    }
    public function getPrenom()
    {
        return $this->prenom;
        //return $homme->prenom;
    }
    
    
    
    // ------------------------------
    
    // Exo :: réaliser le getteur et setteur pour la propriété $prenom
}

$etudiant = new Etudiant('Iuliia');

echo '<pre>'; var_dump($etudiant); echo '</pre>';
echo "Mon prénom est : " . $etudiant->getPrenom() . "<hr>";

$etudiant->__construct('Djamila'); // le constructeur peut tout de meme etre appelé comme une méthode classique

// --------------------------------

/*

__construct() est une méthode magique qui s'execute automatiquement lorsque l'on instancie la classe. Elle sera l'equivalent du init.php avec session_start(), connexion BDD, autoload etc ...

- new Etudiant('Iuliia')-> A l'instanciation de la classe, 'Iuliia' va automatiquement se stocker en argument de la méthode magique __construct() 

setteur : permet de controler les données
getteur : permet de voir / explopiter les données finales
private $prenom : la propriété est privé afin que l'on ne puisse pas la remplir de l'exterieur de la classe sans avoir fait des controles au préalable, c'est à dire sans etre passé par le getteur / setteur

Si nous avons un formulaire avec 10 champs --> nous aurons 10 setteurs et 10 getteurs 

*/