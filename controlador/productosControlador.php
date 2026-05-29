<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."productosModelo.php");

class productosControlador
{

    static public function viewProductos(){


        $productos = productosModelo::viewProductos();
         return $productos;

    }

    static public function viewProductosID($data){


        $productos = productosModelo::viewProductosID($data);
         return $productos;

    }

    static public function insertarProductos($data){
        $data = array(
            "Nombre_Producto"=>$_POST['nombre'],
            "Valor_Producto"=>$_POST['valor'],
            "Gramaje"=>$_POST['gramaje'],
            "Categoria_Producto"=>$_POST['categoria'],
            "Carbohidrato"=>$_POST['carbohidrato'],
            "Calorias"=>$_POST['calorias'],
            "Proteinas"=>$_POST['proteinas']
        );

        // $img = self::SaveImagenes($_FILES['imagen']);


        $insert = productosModelo::insertarProductos($data);
         return $insert;

    }

    static public function SaveImagenes($imagen)
	{

        $random = time();
        $target_path = "C:/xamppsqlserver74/htdocs/pos/vistas/pages/uploads";
        $target = $target_path . basename( $_FILES['imagen']['name']); 
        

        $info = pathinfo($_FILES['imagen']['name']);
        $nnombre = md5(rand().time()).".".$info['extension'];
        copy($_FILES['imagen']['tmp_name'], $nnombre);




        if(move_uploaded_file($nnombre, $target)) {
            // echo "El archivo ".  basename( $_FILES['imagen']['name']); 
      
            } else{
               // echo "Ha ocurrido un error, trate de nuevo!";
            }
	
	return  $nnombre;
		//var_dump($field_name);
		//$uploadPath = "C:/xamppsqlserver74/htdocs/pos/vistas/pages/uploads";
		//$uploadPath = "/home2/cre54257/public_html/trekrental/uploads/";
	
		//fin de for }


	}

    static public function viewProductosCategorias($id){


        $productos = productosModelo::viewProductosCategorias($id);
         return $productos;

    }

    static public function deleteProducto($id){

        $delete = productosModelo::deleteProducto($id);
        return  $delete;
    }

    static public function UpdateStock($id, $stock){

        $delete = productosModelo::UpdateStock($id, $stock);
        return  $delete;
    }
    static public function UpdateProducto($data){

        $up = productosModelo::UpdateProducto($data);
        return  $up;
    }

}

if (isset($_POST['modificacion'])) 
{

   
$data = array(
"producto"        => trim( $_POST['producto']),
"nombre"          => trim( $_POST['nombre']),
"descripcion"     => trim( $_POST['descripcion']),
"stock"           => trim( $_POST['stock']),
"activo"          => trim( $_POST['activo']),
"carbohidrato"    => trim($_POST['carbohidrato']),
"calorias"        => trim($_POST['calorias']),
"proteinas"       => trim($_POST['proteinas']),
"gramaje"         => trim($_POST['gramaje'])


);

$inserto = productosControlador::UpdateProducto($data);

   if($inserto == 1){
    $mensaje = 'Bien.., producto actualizado de forma correcta.';

    $resultado = array(
        "estado" => $inserto,
        "mensaje" => $mensaje
    
    );


   }else{
    $mensaje = 'Problemas modificando el producto, vuelva a intentarlo.';

    $resultado = array(
        "estado" => $inserto,
        "mensaje" => $mensaje
    
    );
   }

echo json_encode($resultado); 




}

