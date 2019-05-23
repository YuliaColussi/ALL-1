<?php

abstract class Vehicule
    {
        final public function demarrer()
        {
            return "Je démarre<hr>";
        }
         abstract public function carburant();
         public function nombreDeTestbligatoire()
        {
            return 100;
        }
    }


    //------------------------------------------
    class Peugeot extends Vehicule
    {
        public function carburant()
        {
            return "essence";
        }
            public function nombreDeTestbligatoire()
         {
             $resultat = parent::nombreDeTestbligatoire();
             return $resultat + 30;

         }
    }
    //------------------------------------------
    class Renault extends Vehicule
    {
        public function carburant()
        {
            return "diesel";
        }
         public function nombreDeTestbligatoire()
         {
             $resultat = parent::nombreDeTestbligatoire();
             return $resultat + 70;

         }
    }


    /*
            1. Faire en sorte de ne pas avoir, d'objet Vehicule

            1 abstract class Vehicule

            2. Obligation pour la Renault et le Peugeot de posséder le meme méthode demarrer()

            2 final public function demarrer()

            3. Obligation pour la Renault de déclarer un carburant 'diesel' et pour la peugeot un corburant 'Essence'
            4. La Renault doit faire 30 tests de plus du'un vehicule de base
            5. La Peugeot doit faire 70 tests de plus du'un vehicule de base
            6. Effectuer les affichages nécessaires

    */

    // echo Renault::nombreDeTestbligatoire() . "<hr>";
    // echo Peugeot::nombreDeTestbligatoire();

$peugeot = new Peugeot;
echo $peugeot->demarrer();
echo "La Peugeot consomme du carburant : " . $peugeot->carburant() . "<hr>";
echo "Nombre de test pour la Peugeot : " . $peugeot->nombreDeTestbligatoire() . "<hr>";

$r = new Renault;
echo $r->demarrer();
echo "La Peugeot consomme du carburant : " . $r->carburant() . "<hr>";
echo "Nombre de test pour la Peugeot : " . $r->nombreDeTestbligatoire() . "<hr>";






?>