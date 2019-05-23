<?php

class Societe
{
    public $adresse;
    public $ville;
    public $cp;
                        //villes //Paris
    public function __set($nom, $valeur)
    {
        echo "La propriété <strong>$nom</strong> n'a pas été déclarée, la valeur <strong>$valeur</strong> n'a donc pas étéaffectée !! <hr>";
    }
    // __set() est une méthode magique qui se déclanche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas

    public function __get($nom)
    {
        echo "La propriété <strong>$nom</strong> n'a pas été déclarée, on ne peut pas donc lafficher !! <hr>";
    }
    // __get() est une méthode magique qui se déclanche dans le cas ou l'on tente d'afficher une propriete qui n'a pas été declarée

    public function __call($nom, $argument)
    {   
        // $argument : table ARRAY qui receptionne les arguments de la méthode executée 
        echo '<pre>'; print_r($argument);echo'</pre>';
        echo "La méthode <strong>$nom</strong> n'a pas été déclarée, les arguments étaient <strong>" . implode("-",$argument) . "</strong> </hr>";
        //implode allows us to extract the values from an array
        // __call() est une méthode magique qui s'execute auomatiquement en cas de tentative d'execution d'une méthode qui n'a pas été déclarée
    }
}

$societe = new Societe;

$societe->villes = "Paris"; //tentative d'affectation d'une propriété qui n'a pas été déclarée, on ne peut pas donc lafficher !! <hr>

echo $societe->titre;

echo $societe->dsjghdghd(1,'test',true); // la méthode qui n'esxiste pas

echo '<pre>';print_r($societe);echo'</pre>';

/*

Il y a trop d'erreur "sale" en PHP, les méthodes magiques permettent d'affciher des erreurs 'propres' en français

*/






?>