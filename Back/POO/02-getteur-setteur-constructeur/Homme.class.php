<?php
class Homme
{
    private $error;
    private $prenom; //Iuliia
    private $nom;
    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
        }
        else //nous tombons dans le else dans le cas suivant $homme->setPrenom(28)
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    public function getPrenom()
    {
        return $this->prenom;
        //return $homme->prenom;
    }
    

    // ------------------------------

    public function setNom($nom)
    {
        if(strlen($nom) > 2 && strlen($nom) < 20)
        {
            $this->nom = $nom;
        }
        else 
        {
            $this->error = "Verifier votre nom - ça doit ce compris entre 2 et 20 chiffres";
            return $this->error;
        }
    }

    public function getNom()
    {
        return $this->nom;
        // par convention , on place toujours 'set' et 'get' devant le nom des méthodes

        //return $homme->prenom;
    }
}

$homme = new Homme;
echo '<pre>'; var_dump($homme); echo '</pre>';

// $homme->prenom = 'Iuliia';
 ///!\ erreur !! il nest pas possible dacceder et deffecter une valeur à une propriété 'private' , cela permet de ne pas entrer nimporte quoi dans les propriétées

$homme->setPrenom("Iuliia");
echo "Mon prénom est : " . $homme->getPrenom() . "<hr>";

echo $homme->setPrenom(28) . '<hr>'; // Un message d'erreur s'affiche : "c'est n'est pas un string !!", nous tombons dans le cas else du 'setteur'

echo $homme->setNom("f");
// echo "Mon nom est : " . $homme->getNom() . "<hr>";
 // Un message d'erreur s'affiche : "c'est n'est pas un string !!", nous tombons dans le cas else du 'setteur'

// Un setteur permet de controler les données, par exemple les données saisie d'un formulaire.
// Un getteur permet de voir les données finales, c'est à dire les données qui ont été controlées, par exemple, on peut se servir des méthodes getteurs pour enregistrer des données dans une BDD

// Exo:: réaliser le setteur et getteur pour la propriété '$nom' en controllant dans le setteur que le nom doit etre compris entre 2 et 20 caractères

