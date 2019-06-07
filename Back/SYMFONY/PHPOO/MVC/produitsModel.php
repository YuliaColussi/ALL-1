<?php

// MVC/produitsModel.php
class produitsModel
{

private $pdo;
public function __construct() {
    $this -> pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,));
    }
    
    // ----------------
    // La mission de ce fichier produitsModele est d'interagir avec la table produit dans la base de données^
    
    // recupérer tous les produits
    public function findAll() {
        
        $resultat = $this -> pdo ->query('SELECT * FROM produit'); 
        $produits = $resultat -> fetchAll();
        return $produits;
        
    }

    public function findCat() {
        
        $resultat = $this -> pdo ->query('SELECT DISTINCT(categorie) FROM produit'); 
        $categories = $resultat -> fetchAll();
        return $categories;
        
    }
    
}

// recupérer tous les par l'id

public function find($id) {
    $resultat -> $this -> pdo -> prepare("SELECT * FROM  produit WHERE id_produit =:id");
    $resultat->bindValue('id',$id, PDO::PARAM_INT);
    $resultat->execute();

    $produit = $resultat -> fetchALL();
    return $produit();
// recupérer tous les produits par le categorie

// INSERT
// UPDATE
// DELETE

?>