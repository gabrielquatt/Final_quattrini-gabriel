<?php

class ModelLote extends Model{
    public function __construct()
    {
      /*   Lote(id: int, 
nro_lote: varchar,
 año_vencimiento: int; 
 id_ciudad: int; 
 id_laboratorio: int)  */
    }

    public function addLote($lote, $vencimiento,$id_ciudad,$id_loboratorio){
        $query = $this->getDB()->prepare('INSERT INTO Lote SET nro_lote = ?, año_vencimiento = ?,id_ciudad = ?, id_laboratorio = ? VALUE (?,?,?,?)');
        $query->execute([$lote, $vencimiento,$id_ciudad,$id_loboratorio]);
    }

    public function getTotalLotesAsignados($id){
        $query = $this->getDB()->prepare('SELECT * FROM Lote WHERE id_laboratorio =?');
        $query->execute([$id]);
        $num = $query->fetchAll(PDO::FETCH_OBJ);
        return sizeof($num);
    }

    public function getPrecio($id){
        $query = $this->getDB()->prepare('SELECT Laboratorio.lote_costo WHERE id =');
        return   $query->execute([$id]);
    
    }


}
?>