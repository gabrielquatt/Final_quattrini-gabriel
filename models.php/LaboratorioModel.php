<?php

class LaboratorioModel extends Model
{
    public function __construct()
    {
        
    }

    public function existLaboratorio($id){
        $query = $this->getDB()->prepare('SELECT * FROM Laboratorio WHERE id =?');
        $query->execute([$id]);
        $result= $query->fetchAll(PDO::FETCH_OBJ);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function contieneStock($id){
        $query = $this->getDB()->prepare('SELECT Laboratorio.stock_lotes FROM Laboratorio WHERE id =?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_NUM);
    }

    public function editStockLote($aux,$id){
        $query= $this->getDB()->prepare('UPDATE Laboratorio SET stock_lotes =? WHERE id = ?');
        $query->execute([$aux,$id]);
    }

    public function getIDlab(){
        $query = $this->getDB()->prepare('SELECT Laboratorio.id FROM Laboratorio ');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_NUM);
    }

    public function getName($id){
        $query = $this->getDB()->prepare('SELECT Laboratorio.name FROM Laboratorio WHERE id=?');
        return  $query->execute([$id]);
         }
   

}

?>