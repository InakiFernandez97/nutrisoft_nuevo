<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLADOR_PATH."ventasControlador.php");
include (CONTROLADOR_PATH."cierresControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class cierresAjax{

    static public function insertarCierre($data){

        $temporal = cierresControlador::insertarCierre($data);
        return  $temporal; 

    }





}





if (isset($_POST['cierre'])) {
 
    
//var_dump($_POST);

    $data = array(
        "fecha"=>$_POST['fecha'],
        "Descripcion"=>$_POST['descripcion']
    );
$insert = cierresAjax::insertarCierre($data);

if($insert == 1){
    $mensaje = 'Cierre de caja efectuado correctamente';
    $estado = 1;
}else{
    $mensaje = 'Problemas efectuando el cierre de caja';
    $estado = 0;

}


$resultado = array(
    "estado" => $estado,
    "mensaje" => $mensaje

);
echo json_encode($resultado); 




}