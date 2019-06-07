<?php


require('produitsModel.php');

class produitsController {

    private $model; //contient l'obj produitsModel;

    public function __construct() {
        $this -> model = new produitsModel;
    }

    // afficher tout les produits
    public function boutique()
    {
        
        // missions de la fonction: Afficher tous les produits

        // 1. Récupérer tous les produits & les categorie
 
        $produits = $this -> model -> findAll();
        $categories = $this -> model -> findCat();

        // SELECT DISTINCT(categories) FROM produits - that's how we should do do get all the categories and we find it in produitsModel


        // echo '<pre>';print_r($produits);echo'</pre>';

        // 2. Afficher tous les produits

        require('produits.php');

    }
    // afficher un seule produit
    public function affichage($id)
    {

    }
    // afficher tous les produits d'une categor
    public function categorie($categorie)
    {

    }

    // ajouter un produit
    public function ajouterProduit($data)
    {

    }
    // modifier un produit
    public function modifieProduit($id, $data)
    {
        
    }
    // supprimer un produit
    public function supprimerProduit($id)
    {
        
    }

} 

?>