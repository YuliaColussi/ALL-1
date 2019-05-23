<?php
abstract class Joueur
    {
        public function seConnecter()
        {
            return $this->EtrMajeur();
        }
        abstract public function EtreMajeur();
        abstract public function Devise();
    }
    // ---------------------------------------

    // $test = new Joueur; une erreur !! class abstraite n'est pas instancible

    class JoueurFr extends Joueur
    {
        public function EtreMajeur()
        {
            return 18;
        }
        public function Devise()
        {
            return '€';
        }
    }


// -------------------------------------

// Exo : créer un objet joueurFr et afficher les méthodes contenu dans la class_exists

$joueurFr = new JoueurFr;

echo $joueurFr->EtreMajeur() .'<hr>';
echo $joueurFr->Devise() .'<hr>';


// Exo : créer une classe 'JoueurUs' qui hérite de la classe 'Joueur' et réaliser le traitement permettant d'afficher '21' pour le méthode 'EtreMajeur' et afficher '$' pour la devise

    class JoueurUs extends Joueur
    {
        public function EtreMajeur()
        {
            return 21;
        }
        public function Devise()
        {
            return '$';
        }
    }


$joueurUs = new JoueurUs;

echo $joueurUs->EtreMajeur() .'<hr>';
echo $joueurUs->Devise() .'<hr>';


// La dévelopeur qui écrit la class 'Joueur' est au coeur de l'application (noyau) et va obliger les autres développeurs à rédéfinir les méthodes EtreMajeur() et Devise().
//Cest une bonne méthodologie de travail. On impose de bonne contraintes
