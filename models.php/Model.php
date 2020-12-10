<?php 

class Model{
    
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=1_salud_db;charset=utf8', 'root', '');
    }

    public function getDB(){
        return $this->db;
    }

}

?>