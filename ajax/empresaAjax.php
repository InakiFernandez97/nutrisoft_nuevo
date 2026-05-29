<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLADOR_PATH."ventasControlador.php");
include (CONTROLADOR_PATH."empresasControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class empresaAjax{

static public function insertarEmpresa($data){

    $empresa = empresasControlador::insertarEmpresa($data);
    return $empresa;
}

}



if (isset($_POST['inserempresa'])) {
 
    
    //var_dump($_POST);
    
        $data = array(
            "rut"=>$_POST['rut'],
            "nombre"=>$_POST['nombre'],
            "fecha"=>$_POST['fecha'],
            "trabajadores"=>$_POST['trabajadores'],
            "encargado"=>$_POST['encargado'],
            "fono"=>$_POST['fono'],
            "contrato"=>$_POST['contrato']
           
        );
    $insert = empresaAjax::insertarEmpresa($data);
    
    if($insert == 1){
        $mensaje = 'Empresa cargada correctamente';
        $estado = 1;
    }else{
        $mensaje = 'Problemas cargando la Empresa, intentelo nuevamente';
        $estado = 0;
    
    }
    
    
    $resultado = array(
        "estado" => $estado,
        "mensaje" => $mensaje
    
    );
    echo json_encode($resultado); 
    
    
    
    
    }