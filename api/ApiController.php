<?php

include_once("models/CentrosModels.php"); //clase nueva
include_once("views/View.php");

//ejercicio 3 punto B.

class ApiController{

private $view;

public function __construct()
{
    $this->view = new View;
}

    //  ../Api/Municipo/:ID/info 'GET' ..

   /*  public function getInfoCentro($id_municipio){
        // $centros = $this->getModelCentros->getInfoCentros($id_municipio); //retorno los centros asignados al municipio
        // $this->view->mostrarInfoCentros($centros)
    } */

    //  ../Api/Municipio/:ID/lotesDisponibles 'GET' ..

    /* public function getInfoLotesDisponibles($id_municipio){
         $centros = $this->getModelLotes->getInfoLotes($id_ciudad); 
         //en el modelo traeria todos los los lotes asigandos y no usados de la ciudad 

          // $this->view->mostrarInfoLotes($lotes)

    } */

}

?>