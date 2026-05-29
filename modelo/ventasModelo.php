<?php
require_once("conexion.php");


class ventasModelo{


    static public function viewVentas(){

     
        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM ventas"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }
    
    static public function viewVentasID($id){

       
        return 0;

    }

    static public function insertarVentas($data){

        $con = ConexionMysql::ConectarMysql();
        $sql="insert into ventas(Id_Usuario,Id_Cliente, Fecha_Venta, Neto_Venta, Iva_Venta, Total_Venta,Descuento_Venta,Comentario_Venta,Medio_Pago, Estado_Venta) 
                values(:Id_Usuario, :Id_Cliente, :Fecha_Venta, :Neto_Venta, :Iva_Venta, :Total_Venta, :Descuento_Venta, :Comentario_Venta, :Medio_Pago, :Estado_Venta)";
        $sql = $con->prepare($sql);

        $Id_Usuario      = $data['Id_Usuario'];
        $Id_Cliente      = $data['Id_Cliente'];
        $Fecha_Venta     = $data['Fecha_Venta'];
        $Neto_Venta      = $data['Neto_Venta'];
        $Iva_Venta       = $data['Iva_Venta'];

        $Total_Venta     = $data['Total_Venta'];
        $Descuento_Venta = $data['Descuento_Venta'];
        $Comentario_Venta= $data['Comentario_Venta'];
        $Medio_Pago      = $data['Medio_Pago'];
        $Estado_Venta    = $data['Estado_Venta'];
      
        $sql->bindParam(':Id_Usuario',$Id_Usuario,PDO::PARAM_INT);
        $sql->bindParam(':Id_Cliente',$Id_Cliente,PDO::PARAM_INT);
        $sql->bindParam(':Fecha_Venta',$Fecha_Venta,PDO::PARAM_STR);
        $sql->bindParam(':Neto_Venta',$Neto_Venta,PDO::PARAM_INT);
        $sql->bindParam(':Iva_Venta',$Iva_Venta,PDO::PARAM_INT);
        $sql->bindParam(':Total_Venta',$Total_Venta,PDO::PARAM_INT);
        $sql->bindParam(':Descuento_Venta',$Descuento_Venta,PDO::PARAM_INT);
        $sql->bindParam(':Comentario_Venta',$Comentario_Venta,PDO::PARAM_STR);
        $sql->bindParam(':Medio_Pago',$Medio_Pago,PDO::PARAM_INT);
        $sql->bindParam(':Estado_Venta',$Estado_Venta,PDO::PARAM_INT);
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){
                   // $grilla = self::cargoGrilla($random );
                    return  $lastInsertId;
            }
            else{

                print_r($sql->errorInfo()); 
                return 0;

            
            }

       

    }

    static public function insertarDetalleVentas($data){

        $con = Conexion::Conectar(); 
        $Id_Venta = $data['Id_Venta'];
        $id_Producto = $data['id_Producto'];
        $Cantidad_Detalle = $data['Cantidad_Detalle'];
        $Valor_Detalle = $data['Valor_Detalle'];
       
        $sql2 = "Insert Into ventas_detalle(Id_Venta, id_Producto, Cantidad_Detalle, Valor_Detalle)
                Values($Id_Venta,$id_Producto, $Cantidad_Detalle,$Valor_Detalle)";		   
     
        if (sqlsrv_query($con,$sql2)) {

            return 	1;
        } else {
            return 0;
        }


}

    static public function InsertoTemporal($data){

        $con = ConexionMysql::ConectarMysql();
        $sql="insert into temporal(random, id_producto, nombre, cantidad, valor, subtotal) 
                values(:random,:id_producto,:nombre,:cantidad,:valor,:subtotal)";
        $sql = $con->prepare($sql);

        $random      = $data['random'];
        $id_producto = $data['id_producto'];
        $nombre      = $data['nombre'];
        $cantidad    = $data['cantidad'];
        $valor       = $data['valor'];
        $subtotal    = $data['valor'] * $data['cantidad'];
        $sql->bindParam(':random',$random,PDO::PARAM_INT);
        $sql->bindParam(':id_producto',$id_producto,PDO::PARAM_INT);
        $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':cantidad',$cantidad,PDO::PARAM_INT);
        $sql->bindParam(':valor',$valor,PDO::PARAM_INT);
        $sql->bindParam(':subtotal',$subtotal,PDO::PARAM_INT);
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){
                    $grilla = self::cargoGrilla($random );
                    return  $grilla;
            }
            else{

                print_r($sql->errorInfo()); 
                return 0;

            
            }

    }

    static public function cargoGrilla($random){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM temporal WHERE random = $random"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){
            return $results;
        }else{
            return 0;
        }
    }

    static public function eliminoItemTemporal($random, $id){

            $con = ConexionMysql::ConectarMysql();
            $consulta = "DELETE FROM temporal WHERE random=:random AND id_producto=:id_producto";
            $sql = $con-> prepare($consulta);
            $sql -> bindParam(':random', $random, PDO::PARAM_INT);
            $sql -> bindParam(':id_producto', $id, PDO::PARAM_INT);
            //$id=trim($_POST['id']);

            $sql->execute();

            if($sql->rowCount() > 0)
            {
                 $count = $sql -> rowCount();
                 $gri = self::cargoGrilla($random);
                 return $gri;
            }
            else{
                print_r($sql->errorInfo());
                return 0;

             
            }
           
        
    }

}