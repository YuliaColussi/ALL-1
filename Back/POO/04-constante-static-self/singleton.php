<?php

class Singleton
{
    public $numero = 20;
    private static $instance = null;
    private function __construct(){} // la classe n'est pas instanciable car le constructeur est privé
    private function __clone(){} // l'objet ne sera pas clonable
    public function getInstance()
    {
        if(is_null(self::$instance)) // si $instance est null, la 1ère fois c'est null, toute les autres fois je ne rentre pas ici car il y a un objet dans l'instance
        {
            self::$instance = new Singleton; //on stock l'objet de la classe Singleton
        }
        return self::$instance; // dans tout les cas je retourne un objet $instance 
    } 

}

// Un pattern Singleton permet de trouver un soulution simple à un problème récurrant
// $s = new Singleton; // Une erreur !! Il n'est pas possible d'instancier la classe puisque le constructeur est privé

$objet1 = Singleton::getInstance();
echo '<pre>';var_dump($objet1);echo '</pre>'; // objet1 est à la référence #1

$objet2 = Singleton::getInstance();
echo '<pre>';var_dump($objet2);echo '</pre>'; // objet2 est à la référence #1, il s'agit bien du meme objet

echo $objet1->numero . '<hr>';
echo $objet2->numero . '<hr>';
$objet2->numero = 22; // lorsqu'on l'on change la valeur de la propriété 'numero' cela impacte dur les 2 variables $objet1 et $objet2, c'est normal puisquen c'est le meme objet
echo $objet1->numero . '<hr>';
echo $objet2->numero . '<hr>';

?>