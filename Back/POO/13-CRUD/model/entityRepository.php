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
            public function getFields() // méthode permettant de récupérer le noms des champs / colonne de la table 'employe'
            {
                $q = $this->getDb()->query("DESC " . $this->table); // DESC is for description de la table
                $r = $q->fetchAll(\PDO::FETCH_ASSOC);
                return array_splice($r, 1); //permet de retirer le premier champ idEmploye dans le formulaire grace à la méthode array_splice()

            }

                public function select($id)
                {
                    // $q = $this->getDb()->query("SELECT * FROM " . employe where idEmploye = 7256);
                    $q = $this->getDb()->query("SELECT * FROM " .$this->table . ' WHERE id' . ucfirst($this->table) . "=" . (int) $id);
                    $r = $q->fetch(\PDO::FETCH_ASSOC);
                    return $r;
                }

                public function delete($id)
                {
                    // $q = $this->getDb()->query("SELECT * FROM " . employe where idEmploye = 7256);
                    $q = $this->getDb()->query("DELETE FROM " .$this->table . ' WHERE id' . ucfirst($this->table) . "=" . (int) $id);
                  
                }


            public function save()
            {

                $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

                // down its a method that allows us to show all the indices and valeurs

                // $q = $this->getDb()->query('REPLACE INTO (idEmployes, prenom, nom, sexe, service, dateEmbauche, salaire) VALUES (' . $id . ', '$_POST[prenom]' , '$_POST[nom]' et ext);

                $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst ($this->table) . ',' . implode(',', array_keys($_POST)) . ')VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
                // ucfirst - makes the first letter in Majiscule
                //  $this->table : retourn la table 'employe'
                // implode(',', array_keys($_POST)) : permet d'extraire chaque indice du formulaire afin de les appelés comme nom de champ/colonne dans la requete
            }
    }

$e = new EntityRepository;
$e->getDb();

?>