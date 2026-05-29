<?php
require_once("conexion.php");


class productosModelo{


    static public function viewProductos(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM categorias, productos WHERE Id_Categoria = Categoria_Producto"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }


    }
    
    static public function viewProductosID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM productos WHERE Id_Producto = $id"; 
        //$sql = "SELECT * FROM productos"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }



    }

    static public function insertarProductos($data){

        //var_dump($img);
        $con = ConexionMysql::ConectarMysql();
        $sql="insert into productos( Nombre_Producto ,Valor_Producto, Categoria_Producto,Gramaje, Carbohidrato,Calorias,Proteinas,Estado_Producto) 
                           values(:Nombre_Producto ,:Valor_Producto, :Categoria_Producto,:Gramaje, :Carbohidrato,:Calorias,:Proteinas,:Estado_Producto)";
        $sql = $con->prepare($sql);

        $Nombre_Producto      = $data['Nombre_Producto'];
        $Valor_Producto       = $data['Valor_Producto'];
        $Gramaje              = $data['Gramaje'];
        $Categoria_Producto   = $data['Categoria_Producto'];
        $Carbohidrato         = $data['Carbohidrato'];
        $Calorias             = $data['Calorias'];
        $Proteinas            = $data['Proteinas'];
      //  $Imagen_Producto      = $img;
        $Estado_Producto      = 1;

        $sql->bindParam(':Nombre_Producto',$Nombre_Producto,PDO::PARAM_STR);
        $sql->bindParam(':Valor_Producto',$Valor_Producto,PDO::PARAM_INT);
        $sql->bindParam(':Categoria_Producto',$Categoria_Producto,PDO::PARAM_INT);
        $sql->bindParam(':Gramaje',$Gramaje,PDO::PARAM_INT);
        $sql->bindParam(':Carbohidrato',$Carbohidrato,PDO::PARAM_INT);
       
        $sql->bindParam(':Calorias',$Calorias,PDO::PARAM_INT);
        $sql->bindParam(':Proteinas',$Proteinas,PDO::PARAM_INT);
        $sql->bindParam(':Estado_Producto',$Estado_Producto,PDO::PARAM_INT);
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){
                    return  1;
            }
            else{

                print_r($sql->errorInfo()); 
                return 0;

            
            }



    }

    static public function UpdateProducto($data){

        // echo $id;
         $con = ConexionMysql::ConectarMysql();
    
    
    
    
         $id                   = $data['producto'];
         $nombre               = $data['nombre'];
         $valor                = $data['stock'];
         $Gramaje              = $data['gramaje'];
    
         $Carbohidrato         = $data['carbohidrato'];
         $Calorias             = $data['calorias'];
         $Proteinas            = $data['proteinas'];
         $activo               = $data['activo'];
    
         $consulta = "UPDATE productos SET 
                                    Nombre_Producto = :Nombre_Producto,
                                    Valor_Producto  = :Valor_Producto, 
                                    Gramaje         = :Gramaje, 
                                    Carbohidrato    = :Carbohidrato,
                                    Calorias        = :Calorias,
                                    Proteinas       = :Proteinas,
                                    Estado_Producto = :Estado_Producto
                                    WHERE Id_Producto = :id";
                                    
         $sql = $con-> prepare($consulta);
         $sql->bindParam(':Nombre_Producto',$nombre,PDO::PARAM_STR);
         $sql->bindParam(':Valor_Producto',$valor,PDO::PARAM_INT);
         $sql->bindParam(':Gramaje',$Gramaje,PDO::PARAM_INT);
         $sql->bindParam(':Carbohidrato',$Carbohidrato,PDO::PARAM_INT);
         $sql->bindParam(':Calorias',$Calorias,PDO::PARAM_INT);
         $sql->bindParam(':Proteinas',$Proteinas,PDO::PARAM_INT);
         $sql->bindParam(':Estado_Producto',$activo,PDO::PARAM_INT);
         $sql->bindParam(':id',$id,PDO::PARAM_INT);
    
         
         $sql->execute();
         if($sql->rowCount() > 0)
         {
         //$count = $sql -> rowCount();
         //echo "<div class='content alert alert-primary' > 
         //Gracias: $count registro ha sido eliminado  </div>";
         return 1;
         }
         else{
           //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";
    
         print_r($sql->errorInfo());
         return 0; 
         }
    
    
    }
    static public function viewProductosCategorias($id){

        $con = ConexionMysql::ConectarMysql();
        $msquery = "select * from productos where id= $id";
        //echo "<br>".$msquery;
        if ($msresults = sqlsrv_query($con, $msquery)) {
            $producto = sqlsrv_fetch_object($msresults);
            return 	$producto;
        } else {
            return 0;
        }

    }

    static public function UpdateStock($id, $stock){

        // echo $id;
         $con = ConexionMysql::ConectarMysql();
    
         $antiguo = self::viewProductosID($id);
         //print_r($antiguo);
         $nuevoStock = $antiguo->Valor_Producto + $stock;
         $consulta = "UPDATE productos SET Valor_Producto = :cantidad WHERE Id_Producto = :id";
         $sql = $con-> prepare($consulta);
         $sql -> bindParam(':id', $id, PDO::PARAM_INT);
         $sql -> bindParam(':cantidad', $nuevoStock, PDO::PARAM_INT);
         
         $sql->execute();
         if($sql->rowCount() > 0)
         {
         //$count = $sql -> rowCount();
         //echo "<div class='content alert alert-primary' > 
         //Gracias: $count registro ha sido eliminado  </div>";
         return 1;
         }
         else{
           //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";
    
         //print_r($sql->errorInfo());
         return 0; 
         }
    
    
    }
    
    static public function deleteProducto($id){

        // echo $id;
         $con = ConexionMysql::ConectarMysql();
    
         $consulta = "UPDATE productos SET Estado_Producto = 0 WHERE Id_Producto = :id";
         $sql = $con-> prepare($consulta);
         $sql -> bindParam(':id', $id, PDO::PARAM_INT);
      
         
         $sql->execute();
         if($sql->rowCount() > 0)
         {
         //$count = $sql -> rowCount();
         //echo "<div class='content alert alert-primary' > 
         //Gracias: $count registro ha sido eliminado  </div>";
         return 1;
         }
         else{
           //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";
    
         //print_r($sql->errorInfo());
         return 0; 
         }
    
    
    }

}