<?php

class Electricien
    {
        public function getSpecialiste()
        {
            return "pose de cables, tableaux ou armaoires élèctriques ... <hr>";
        }
        public function getHoraires()
        {
            return "10h / 18h <hr>";
        }
    }

//--------------------------------------------

class Plombier
    {
        public function getSpecialiste()
        {
            return "tuyau, robinets, chauffe-eau, compteurs ... <hr>";
        }
        public function getHoraires()
        {
            return "8h / 19h <hr>";
        }
    }

//--------------------------------------------

class Enterprise
    {
        public $numero = 0;
                            // 'Plombier'
        public function appeUnEmploye($employe)
        {
            $this->numero++;
            // $this->monEmploye1 = new Plombier
            $this->{"monEmploye" . $this->numero} = new $employe;

            return $this->{"monEmploye" . $this->numero}; // on retourne l'objet généré
        }
    }

// --------------------------------------------

    $enterprise = new Enterprise;
    $enterprise->appeUnEmploye('Plombier');

    // Afficher les méthodes de la classe 'Plombier' via l'objet issu de la classe 'entreprise' '$entreprise'

    echo $enterprise->monEmploye1->getSpecialiste() .'<hr>';
    echo $enterprise->monEmploye1->getHoraires() .'<hr>';

    // -----------------------------------------------
    $enterprise->appeUnEmploye('Electricien');
    echo $enterprise->monEmploye2->getSpecialiste() .'<hr>';
    echo $enterprise->monEmploye2->getHoraires() .'<hr>';

?>