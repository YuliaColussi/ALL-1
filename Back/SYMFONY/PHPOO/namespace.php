<?php

// Sylvain : Inscription

namespace Membre; // this should be always the first line of the code - its like we always need to put a wardrobe begore putting anything into it

use PDO;
use Commentaire; // we will use the space of 'Commentaire'


// Aziz : Commentaire
namespace Commentaire;
class User
    {
        private $pdo;

        public function setPdo() {
            $pdo = new \Pdo(); // because if we dont do that anti slash - it will tell that it doesnt know $pdo, so with anti slash we go to another file where we can find an $pdo 
            // we can also use a 'use PDO';
             
        }
    }


$user = new Membre\User;
$user = new Commentaire\User;

?>

<!-- Namespace is a tirroire virtuelle where we stock our classes - but we always need to note a dossier when we write after ->

