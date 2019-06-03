<?php

namespace Model;

class EntityRepository
    {
        private $db;
        public $table;
        public function getDb() 
        {
            if(!$this->db) 
            {
                try
                {
                    $xml = simplexml_load_file('app/config.xml');

                    $this->table = $xml->table;
                    // echo '<pre>';print_r($xml);echo'</pre>';
                    try
                    {
                        $this->db = new \PDO("mysql:dbname=" . $xml->db. ";host=" . $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

                    }
                    catch(\PDOException $e) 
                    {
                        die("Probleme de connexion BDD !!");
                    }
                    
                }
                catch(\PDOException $e) 
                {
                        die("Probleme de fichier XML manquent !!");
                }
            }
            return $this->db; 
        }
            public function selectAll() 
            {   
                
                $q = $this->getDb()->query("SELECT * FROM " . $this->table);
                $r = $q->fetchAll(\PDO::FETCH_ASSOC);
                return $r;
            }
            public function getFields()
            {
                $q = $this->getDb()->query("DESC " . $this->table);
                $r = $q->fetchAll(\PDO::FETCH_ASSOC);
                return array_splice($r, 1);

            }

                public function select($id)
                {
                    $q = $this->getDb()->query("SELECT * FROM " .$this->table . ' WHERE id' . ($this->table) . "=" . (int) $id);
                    $r = $q->fetch(\PDO::FETCH_ASSOC);
                    return $r;
                }

                public function delete($id)
                {
                    $q = $this->getDb()->query("DELETE FROM " .$this->table . ' WHERE id' . ($this->table) . "=" . (int) $id);
                  
                }


            public function save()
            {

                $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

                $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ($this->table) . ',' . implode(',', array_keys($_POST)) . ')VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
            }
         
    }

    class Conducteur 
{   
    // public $litresEssence;
    public function setConducteur($conducteur)
    {
        $this->conducteur = $conducteur;
        // $db = "SELECT * FROM conducteur";
        // $mp=$db->fetchAll(\PDO::FETCH_ASSOC);
        // return $mp;
    }
    public function getConducteur()
    {
        return $this->conducteur;
    }
    
}
    class Vehicule
{   
    // public $litresEssence;
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
        // $db = "SELECT * FROM conducteur";
        // $mp=$db->fetchAll(\PDO::FETCH_ASSOC);
        // return $mp;
    }
    public function getVehicule()
    {
        return $this->vehicule;
    }
    
}

$conducteur = new Conducteur;
$conducteur->nbConducteur = 5;
echo '<pre>'; var_dump($conducteur); echo '</pre>';
echo "La nombre de conducteurs: " . $conducteur->nbConducteur . "<hr>";

$vehicule = new Vehicule;
$vehicule->nbVehicule = 6;
echo "La nombre de vehicules: " . $vehicule->nbVehicule . "<hr>";


$e = new EntityRepository;
$e->getDb();

?>