<?php

class Vehicule
{
    private static $marque = 'BMW';
    private $couleur = 'noir';
    public static function setMarque($marque)
    {
        self::$marque = $marque;
    }

    public static function getMarque()
    {
        return self::$marque;
    }

    //-------------------------------------------
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    
}

// ---------------------------------------------

// Exo : créer un objet issu de la classe Vehicule et faites une phrase en affichant la couleur et la marque du véhicule

$vehicule = new Vehicule;

echo "La marque de vehicule est : <strong>" . Vehicule::getMarque() . "</strong><hr>";

echo "La couleur de vehicule est: <strong>" .$vehicule->getCouleur() . "</strong><hr>";


// <!-- Exo : créer un autre vehicule et changer la couleur par 'violet' en affichante la marque et la couleur de la vehicule

$vehicule2 = new Vehicule;
$vehicule2->setCouleur('violet');

echo "La marque de vehicule est : <strong>" . Vehicule::getMarque() . "</strong> et le couleur  " . $vehicule2->getCouleur() . "</strong><hr>";



// <!-- Exo : créer un autre vehicule 3 et faite une phrase affichante la couleur et la marque du vehicule



$vehicule3 = new Vehicule;

echo "La marque de vehicule est : <strong>" . Vehicule::getMarque() . "</strong> et le couleur " . $vehicule3->getCouleur() . "</strong><hr>";

// <!-- Exo : modifier la marque par 'Mercedes', puis créer un véhicule 4 et faites une phrase affichante la couleur et la marque du vehicule



Vehicule::setMarque('Mercedes');

$vehicule4 = new Vehicule;

echo "La marque de vehicule est : <strong>" . Vehicule::getMarque()  . "</strong> et le couleur  " . $vehicule4->getCouleur() . "</strong><hr>";


/*

    Un élément déclaré comme 'static' appartient à la classe et non à l'objet
    Si je modifie un élément 'static', je modifie la classe elle meme
    $objet-> élément d'un objet à l'extérieur de la classe
    $this-> élément d'un objet à l'intérieur de la classe
    $class:: élément d'un class à l'extérieur de la classe
    self:: élément d'un class à l'extérieur de la classe

*/



?>

