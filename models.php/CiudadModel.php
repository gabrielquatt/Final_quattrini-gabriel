<?php

class CiudadModel extends Model{
    public function __construct()
    {
        
    }

    public function existCiudad($id){
        $query = $this->getDB()->prepare('SELECT * FROM Ciudad WHERE id= ?');
        $query->execute([$id]);
        $result= $query->fetchAll(PDO::FETCH_OBJ);
        if($result){
            return true;
        }else{
            return false;
        }
    }

}

?>