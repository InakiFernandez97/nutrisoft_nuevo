<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLADOR_PATH."ventasControlador.php");
include (CONTROLADOR_PATH."categoriasControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class categoriaAjax{

static public function insertarCategorias($data){

    $categoria = categoriasControlador::insertarCategorias($data);
    return $categoria;
}

}



if (isset($_POST['insercategoria'])) {
 
    
    //var_dump($_POST);
    
        $data = array(
            "Nombre_Producto"=>$_POST['nombre']
           
        );
    $insert = categoriaAjax::insertarCategorias($data);
    
    if($insert == 1){
        $mensaje = 'Categoría cargada correctamente';
        $estado = 1;
    }else{
        $mensaje = 'Problemas cargando la Categoría, intentelo nuevamente';
        $estado = 0;
    
    }
    
    
    $resultado = array(
        "estado" => $estado,
        "mensaje" => $mensaje
    
    );
    echo json_encode($resultado); 
    
    
    
    
    }