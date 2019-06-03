<?php

require_once('autoload.php');

$controller = new Controller\Controller;

echo '<pre>';var_dump($controller);echo'</pre>';

$controller->handlerRequest(); 


class Conducteur 
{   
    // public $litresEssence;
    public function setConducteur($conducteur)
    {
        $this->conducteur = $conducteur;
    }
    public function getConducteur()
    {
        return $this->conducteur;
    }
    
}
?>