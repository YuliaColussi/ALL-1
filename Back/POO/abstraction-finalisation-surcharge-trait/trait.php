<?php

trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "Affichage des produits !! <hr>";
    }
}

//----------------------------------------------------

trait TMembre
    {
        public function affichageMembres()
        {
            return "Affichage des memebres !!<hr>";
        }
    }

//---------------------------------------------
    class Site
    {
        USE TPanier, TMembre;
    }
    
//--------------------------------------------------    

$site = new Site;

echo '<pre>';print_r(get_class_methods($site));echo '</pre>';

echo $site->affichageProduits() .'<hr>';
echo $site->affichageMembres() .'<hr>';


// Exo : créer un objet issu de la classe 'Site' et afficher les méthodes issu de cette class
// Et faire les différents affichage des méthodes déclarées



?>