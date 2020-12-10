<?php

include_once("models/LaboratorioModel.php");
include_once("models/ModelLote.php");
include_once("models/CiudadModel.php");
include_once("views/View.php");



class Controller
{

    private $modelLote;
    private $CiudadModel;
    private $LaboratorioModel;
    private $view;

    public  function __construct()
    {
        $this->modelLote = new ModelLote; 
        $this->CiudadModel = new CiudadModel;
        $this->LaboratorioModel = new LaboratorioModel;
        $this->view = new View;
    }

    public function getModelLaboratorio(){
        return $this->LaboratorioModel;
    }

    public function getModelCiudad(){
        return $this->CiudadModel;
    }

    public function getModelLote(){
        return $this->modelLote;
    }

    public function getView(){
        return $this->view;
    }
}
/* 
 Lote(id: int, 
nro_lote: varchar,
 año_vencimiento: int; 
 id_ciudad: int; 
 id_laboratorio: int) 
Ciudad(id: int, nombre: varchar, temperatura_conservacion: int)
Laboratorio(id: int,  nombre: varchar, temperatura_requerida: int, stock_lotes: int, costo_lote: float) -->
 */


