<?php
// Par convention la première lettre de la class doit etre majuscule
class Panier
{
    public $nbProduits;
    public function ajouterArticle()
    {
        return "L'article a été ajoutté !!";
    }
    protected function retirerArticle()
    {
        return "L'article a été retiré !!";
    }
    private function affichageArticle()
    {
        return "Voici les articles !!";
    }
}

$panier1 = new Panier;

echo '<pre>'; var_dump($panier1); echo '</pre>';// on observe un objet issu de la classe 'Panier' à l'identifiant '#1' (référence de l'objet), il peut y avoir pluisieurs objets conserver en RAM, ils auront tous un identifiant différents

echo '<pre>'; var_dump(get_class_methods($panier1)); echo '</pre>'; // permet d'observer uniquement les méthodes (fontions) publiques issu de la classe

// EXO / affecter la valeur de '5' à la propriété public '$nbProduits;

$panier1->nbProduits = 5; // on affecte la valeur de 5 à la propriété (variable) $nbProduits, jamais le signe '$' lorsqu'on appel une propriété public de l'objet
echo '<pre>'; var_dump($panier1); echo '</pre>';
echo "Nombre de produit dans la panier : " . $panier1->nbProduits . "<hr>";

echo "Panier 1 > " . $panier1->ajouterArticle() . '<hr>'; // on pioche une méthode de la classe à travers l'objet, toujours des parenthèses car on fait appel à une méthode (fonction) / méthode public OK

// echo "Panier 1 > " . $panier1->retirerArticle() . '<hr>'; // /! erreur !! méthode protected !! l'élément est accessible uniquement dans la classe ou cela a été déclarée (class Mère) ainsi que dans les classes héritières

// echo "Panier 1 > " . $panier1affichageArticle() . '<hr>'; erreur - méthode private !! l'élément est accessible uniquement dans la classe ou cela a été déclarée 

// La niveau de visibilité permettant de protéger des données, par exemple les données saisi d'un formulaire ne popurront pas étre attribués à n'importe quelle propriété déclarée, elles passeront par des méthodes qui permettront de controler ces données

$panier2 = new Panier; // on crée un nouvel exemplaire / objet issu de la classe 'Panier' 

echo '<pre>'; var_dump($panier2); echo '</pre>';// on peut observer un objet issu de la classen 'Panier' à l'identifiant '#2'

// EXO : affecter 3 produits à la propriété $nbProduits et afficher le nombre de produit

$panier2->nbProduits = 3;

echo "Nombre de produit dans la panier : " . $panier2->nbProduits . "<hr>";// affichage 

/*
    Niveau de visibilité
    - public : accessible de partout
    - protected : accessible dans la class Mère et hééritières
    - private : accessible uniquement dans la classe Mère

    'new' est un mot clé permettant d'effectuer une instanciation (créer un objet)
    Une classe peut produire plusieurs objets
    $panier1 représente l'objet issu de la classe 'Panier'
    La classe est le plan de construction /$panier1 représente un exemplaire de la classe

    * procedural et objet

    
*/

?>