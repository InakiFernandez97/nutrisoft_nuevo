<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLADOR_PATH."ventasControlador.php");
include (CONTROLADOR_PATH."productosControlador.php");
include (CONTROLADOR_PATH."menuControlador.php");
//var_dump($_SERVER['DOCUMENT_ROOT']);
class productosAjax{

    static public function insertarProductos($data){

        $temporal = productosControlador::insertarProductos($data);
        return  $temporal; 

    }

    static public function eliminoItemTemporal($random, $id){

        $random = ventasControlador::eliminoItemTemporal($random, $id);
        return  $random; 

    }
    static public function deleteProducto($id){

        $categoria = productosControlador::deleteProducto($id);
        return $categoria;
    }

    static public function deleteIngrediente($id){

        $categoria = menuControlador::deleteIngrediente($id);
        return $categoria;
    }
    
    static public function UpdateStock($id, $stock){

        $categoria = productosControlador::UpdateStock($id, $stock);
        return $categoria;
    }


}





if (isset($_POST['inserproducto'])) {
 
    
//var_dump($_POST);



    $data = array(
        "Nombre_Producto"=>$_POST['nombre'],
        "Valor_Producto"=>$_POST['valor'],
        "Gramaje"=>$_POST['gramaje'],
        "Categoria_Producto"=>$_POST['categoria'],
        "Carbohidrato"=>$_POST['carbohidrato'],
        "Calorias"=>$_POST['calorias'],
        "Proteinas"=>$_POST['proteinas']
    );
$insert = productosAjax::insertarProductos($data);

if($insert == 1){
    $mensaje = 'Producto cargado correctamente';
    $estado = 1;
}else{
    $mensaje = 'Problemas cargando el producto, intentelo nuevamente';
    $estado = 0;

}


$resultado = array(
    "estado" => $estado,
    "mensaje" => $mensaje

);
echo json_encode($resultado); 




}



if(isset($_POST['updateStock'])){

    $id = $_POST['id'];
    $stock = $_POST['stock'];
    $rs = productosAjax::UpdateStock($id, $stock);

    $resultado = array(
        "estado" => $rs
    
    );
    echo json_encode($resultado); 



    }


    
if(isset($_POST['deleteProducto'])){

    $id = $_POST['id'];

    $rs = productosAjax::deleteProducto($id);

    $resultado = array(
        "estado" => $rs
    
    );
    echo json_encode($resultado); 

    }
    
    if(isset($_POST['deleteIngrediente'])){

        $id = $_POST['id'];
    
        $rs = productosAjax::deleteIngrediente($id);
    
        $resultado = array(
            "estado" => $rs
        
        );
        echo json_encode($resultado); 
    
        }
    