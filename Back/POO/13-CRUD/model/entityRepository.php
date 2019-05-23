<?php

namespace Model;

class EntityRepository
    {
        private $db;
        public $table;
        public function getDb() // méthode permettant d'instancier la classe PDO et de créer un objet PDO
        {
            if(!$this->db) //seulement si $this->$db n'est psa rempli, si il n'y a pas de connexion BDD, alors on la construit
            {
                try
                {
                    $xml = simplexml_load_file('app/config.xml');

                    $this->table = $xml->table; // on associe de la table du fichier XML à la prepriété '$table' de la class, cettepropriété nous servira pour toute nos requetes SQL (INSERT INTO $this->table)
                    //echo '<pre>';print_r($xml);echo'</pre>';
                    try
                    {
                        $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)); // connexion à la BDD, si jamais on change de BDD, nous n'aurons pas besoin de modifier ce code, c'est un code généric, c'est le fichier config.xml que l'on modififera
                        echo '<pre>';var_dump($this->db);echo'</pre>';
                    }
                    catch(\PDOException $e) // we are not in a global space here, so we need to catch uit with an antislash
                    {
                        die("Probleme de connexion BDD !!");
                    }
                    
                }
                catch(\PDOException $e) // here we have all the error details
                {
                        die("Probleme de fichier XML manquent !!");
                }
            }
            return $this->db; // on  retorune le connexion 
        }
            public function selectAll() // méthode permettant de selectionner tout les employes
                //$q = $bdd->query("SELECT * FROM employe")
            {   
                //  $this->getDb() : représente un objet PDO donc une connexion à la BDD
                $q = $this->getDb()->query("SELECT * FROM " . $this->table);
                // $this->table : représente dans notre cas la table 'employe', c'est ce que l'on a recupéré du fichier config.xml
                $r = $q->fetchAll(\PDO::FETCH_ASSOC);
                return $r;
            }
    }

$e = new EntityRepository;
$e->getDb();

?>