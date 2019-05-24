<!-- Exercice 1 : PHPOO
    - Créer une classe Etudiant
    - Créer les propriétés   private
        - prenom (string de 5 à 30 caracteres)
        - nom (string de 5 à 30)
        - email(email)
        - telephone (INT de 10 caracteres)
        
        - Créer une fonction getInfos() qui retourne un array avec toutes les infos
        - Instancier 3 fois la classe dans un autre fichier. Pour chaque etudiant affecter des valeurs et les afficher. 
        
Exercice 2 : AJAX
    - Créer une page HTML avec un bouton afficher (ce bouton ne recharge pas la page)
    - En ajax (JS + PHP), au click sur le bouton, récupérer et afficher sous la forme d'un tableau HTML les infos des produits de la boutique (BDD : site_commerce)
    
    - si tout est terminé, ajouter un formulaire pour ajouter un produit (en AJAX)
Réduire




Zone de message


Envoyer un message à #php -->


<!-- exo 1 -->

<?php
 

 class Etudiant {
     private $error;
     private $prenom;
     private $nom;
     private $email;
     private $telephone;

    //      public function getInfo()
    // {
        public function setTelephone($telephone)
    {
        if(is_numeric($telephone) >= 10)
        {
            $this->telephone = $telephone;
        }
        else 
        {
            $this->error = "ça doit pas etre moins 10 caracteres and doit etre un numero !!";
            return $this->error;
        }
    }
        public function getTelephone()
    {
        return $this->telephone;
        //return $homme->prenom;
    }


        public function setPrenom($prenom)
    {
        if(iconv_strlen($prenom) >5 && iconv_strlen($prenom) < 30)
        {
            $this->prenom = $prenom;
        }
        else 
        {
            $this->error = "ça doit etre entre 5 et 30 caractéres !!";
            return $this->error;
        }
    }
            public function getPrenom()
    {
        return $this->prenom;
        //return $homme->prenom;
    }
        
    
    public function setNom($nom)
    {
        if(iconv_strlen($nom)>5 && iconv_strlen($nom) < 30)
        {
            $this->nom = $nom;
        }
        else 
        {
            $this->error = "ça doit etre entre 5 et 30 caractéres !!";
            return $this->error;
        }
    }
            public function getNom()
    {
        return $this->nom;
        //return $homme->prenom;
    }


        public function setEmail($email)
    {
         $this->email = $email;
    }
        public function getEmail()
    {
        return $this->email;
        //return $homme->prenom;
    }
    




}//FIN class Etudiant
    

    

$etudiant = new Etudiant;


echo '<pre>'; var_dump($etudiant); echo '</pre>';

$etudiant->setPrenom("Iuliiia");
echo "Mon prénom est : " . $etudiant->getPrenom() . "<hr>";
echo $etudiant->setPrenom("Iuliia");

$etudiant->setNom("Colussi");
echo "Mon nom est : " . $etudiant->getNom() . "<hr>";


$etudiant->setEmail("yuliafhhdfjhd@gmail.com");
echo "Mon email est : " . $etudiant->getEmail() . "<hr>";

$etudiant->setTelephone("0000000000");
echo "Mon telephone est : " . $etudiant->getTelephone() . "<hr>";
echo "<pre>";
print_r($etudiant);
echo "</pre>";

?>

    

    
