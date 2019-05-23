<?php

// le fishier controller.php contient toute les actions et les méthodes a executées. Par exemple si Je souhaite afficher des informations 10 par 10, c'est dans ce fichier que l'on fera ce traitement


namespace Controller;

class Controller
    {
       private $db;
       public function __construct()
       {
           $this->db = new \Model\EntityRepository; // autoload voit passer le mot clé 'new' et fait appel au fichier Controller.php  et dans un 2eme temps, dans le controlelr il y a une instance 'new' de EntityRepository, donc l'autoload s'execute et fait appel au fichier EntityRepository

        //    permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
       }
       public function handlerRequest()
       {
           $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si 'op' est définit dans l'URL, on le stock dans une variable sinon on stock 'NULL'

           try
           {
                if($op == 'add' || $op == 'update') $this->save($op); // si on ajoute ou modifie un employé, on appel un méthode save()
                elseif($op == 'select') $this->select(); // si on selectionne 1 employé, on fait appel à la méthode select()
                elseif($op == 'delete') $this->select(); // si on supprime un employé, on fait appel à la méthode delete()

                else $this->selectAll(); //permet d'afficher l'ensemble des employes

           }
           catch(Exception $e)
           {
                die("Problème dans l'action de l'internaute !!!");
           }
       }
       
       public function selectAll()
       {
           echo 'Methode selectAll !!';
           $r = $this->db->selectAll();
        //    db represente un objet issu de la classe EntityRepository
        //    db->selectAll() : on pointe sur la méthode selectAll() déclarée sans la classe EntityRepository
            echo '<pre>';print_r($r);echo'</pre>';
        }
    }


?>