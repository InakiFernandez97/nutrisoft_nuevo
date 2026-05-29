<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."historialModelo.php");

class historialControlador
{

    static public function viewHistorias(){


        $categorias = historialModelo::viewHistorial();
         return $categorias;

    }

    static public function insertarHistorial($data){

      

        $historial = historialModelo::insertarHistorial($data);
         return $historial;

    }
    static public function viewHistorialID($id){


        $historial = historialModelo::viewHistorialID($id);
         return $historial;

    }

    static public function deletePaciente($id){

        $delete = historialModelo::deletePaciente($id);
        return  $delete;
    }
    

}


if(isset($_POST['insertoHistorial'])){

    $historial = historialControlador::insertarHistorial($_POST);



    if($historial== 1){
        $mensaje = 'Historial ingresado exitosamente';

        $resultado = array(
            "estado" => 1,
            "mensaje" => $mensaje
        
        );
    }else{
        $mensaje = 'Problemas Ingresando al Historial';
        
        $resultado = array(
            "estado" => 0,
            "mensaje" => $mensaje
        
        );
    }

  
    echo json_encode($resultado); 
    
    }
