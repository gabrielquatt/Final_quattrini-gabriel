<?php
/* 
lote(id: int, 
    nro_lote: varchar,
    año_vencimiento: int; 
    id_ciudad: int; 
    id_laboratorio: int)  */

class LoteController extends Controller
{

    public function __construct()
    {
    }

    public function addNewLote()
    {
        $lote = $_POST['nro_lote'];
        $vencimiento = $_POST['vencimiento'];
        $id_ciudad = $_POST['id_ciudad'];
        $id_loboratorio = $_POST['id_loboratorio'];

        if($lote == ''|| $vencimiento ==''||$id_ciudad==''||$id_loboratorio==''){
            $this->getView()->viewError("uno de los parametros se encuentra vacio");
         }else{
             if($_SESSION['id_user']==''&& $_SESSION['admin']==true){
                $this->getView()->viewError('ususario no logeado o no tiene permisos de administrados');
             }else{
                if($this->getModelCiudad()->existCiudad($id_ciudad) &&
                $this->getModelLaboratorio()->existLaboratorio($id_loboratorio)){
                      $stock = $this->getModelLaboratorio()->contieneStock($id_loboratorio);

                        if($stock > 0){
                            $this->getModelLote()->addLote($lote, $vencimiento,$id_ciudad,$id_loboratorio);
                            $aux = $stock - 1;

                            $this->getModelLaboratorio()->editStockLote($aux,$id_loboratorio);
                        }else{
                            $this->getView()->viewError('No Hay Stock');
                        }
                }else{
                    $this->getView()->viewError('Ciudad O Laboratorio No Existe en la base de datos');
                }
             }
        }

    }
}

?>
<!-- 
Se debe poder agregar un nuevo lote de distribución indicando todos los datos necesarios y cumpliendo los siguientes requerimientos. Informar los errores correspondientes en caso de no cumplirlos.
Controlar posibles errores de carga.
Verificar que el usuario esté logueado y sea administrador
Verificar que realmente existan la ciudad y el laboratorio asociado al lote.
Verificar que exista stock de lotes para el laboratorio indicado y actualizar dicho stock en caso de poder realizar la asignación. -->