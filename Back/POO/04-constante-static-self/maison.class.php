<?php

class Maison 
{
    private static $nbPiece = 7;//propriété appartient à la classe
    public static $espaceTerrain = '500m';//propriété appartient à la classe
    public $couleur = 'blanc';//propriété appartient à l'objet
    const HAUTEUR = '10m';//propriété appartient à la classe
    private $nbPorte = 10;
    //méthode appartient à la classe : static
    public static function getNbPiece()
    {
        return self::$nbPiece;// self permet de faire appel à une propriété static déclarée à l'intérieur de la classe
    }
    //propriété appartient à l'objet
    public function getNbPorte()
    {
        return $this->nbPorte;
    }

 }

//  1 - afficher le nombre de pièce de la maison
echo "Nombre de pièce de la maison : <strong>" . Maison::getNbPiece() . "</strong><hr>";// Lorsqu'une méthode est 'static', cela veut dire qu'elle appartient à la classe et non à l'objet, donc on appel viw la classe

// 2 - afficher lespace terrain de la maison

echo "lespace terrain de la maison : <strong>" . Maison::$espaceTerrain . "</strong><hr>";

// 3 - afficher la hauteur de la maison
echo "la hauteur de la maison est : <strong>" . Maison::HAUTEUR . "</strong><hr>";

// 4 - afficher la couleur de la maison
$maison = new Maison;
echo "la couleur de la maison est : <strong>" . $maison->couleur . "</strong><hr>";

// 5 - afficher le nombre de porte de la maison
echo "Nombre de porte de la maison : <strong>" .$maison->getNbPorte() . "</strong><hr>";

echo $maison::$espaceTerrain . '<hr>'; // ca doit donner une erreur, on be doit pas appeler une propriété static, donc qui appartient à la classe, via l'objet

echo $maison->espaceTerrain . '<hr>'; // erreur !! il n'est pas possible d'accéder à une propriété static via l'objet

echo $maison->getNbPiece() . '<hr>'; //erreur !! fonctionne mais pas logique!! bonne écriture : Maison::getNbPiece()

echo Maison::$couleur; // erreur because we shouldn't call a private properties from the class 



?>

