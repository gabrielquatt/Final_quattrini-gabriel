<?php

class LaboratorioController extends Controller
{

    public function __construct()
    {
    }

    public function listLaboratorios($id)
    {
      $listIdLab = $this->getModelLaboratorio()->getIDlab();
      $list = array();
     
      foreach($listIdLab as $id){
        $cantidad = $this->getModelLote()->getTotalLotesAsignados($id);
        $total = $this->getModelLote()->getPrecio($id);
        $name = $this->getModelLaboratorio()->getName($id);
        $total= $total*$cantidad;
        $list.array_push($name, $total);
      }

      $this->getView()->view($list);
    }
}


?>

<!-- Se debe mostrar una lista de los laboratorios donde se indique cuánto se le
 debe pagar a cada laboratorio en base a los lotes ya asignados.
Para calcular el monto total, se deben tener en cuenta los lotes asignados a 
ciudades y el valor del lote (no importa el stock)
 -->
<!-- 
 Laboratorio(id: int,
   nombre: varchar, 
   temperatura_requerida: int, 
   stock_lotes: int,
    costo_lote: float) -->