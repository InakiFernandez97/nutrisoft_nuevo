<?php
require_once("conexion.php");


class cierreModelo{


    static public function viewCierre(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM cierre_caja"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }


    }
    
    static public function totalVentas($fecha){

        $con = ConexionMysql::ConectarMysql();
        //$total = " SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad,
        //(SELECT SUM(Medio_Pago)  FROM ventas WHERE Medio_Pago = 1),
       // (SELECT SUM(Medio_Pago)FROM ventas WHERE Medio_Pago = 2),
        //(SELECT SUM(Medio_Pago)FROM ventas WHERE Medio_Pago = 3)
       // FROM ventas
        //WHERE Fecha_Venta ='$fecha'";
       $total = " SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM(Iva_Venta) AS TotalIva
        FROM ventas
        WHERE Fecha_Venta ='$fecha'";

            
            $query = $con->prepare($total); 
            $query -> execute(); 
            $results = $query -> fetch(PDO::FETCH_OBJ);
            if($query -> rowCount() > 0){

                return $results;
            }else{

                return 0;
            }


    }
    
    static public function efectivo($fecha){
        $con = ConexionMysql::ConectarMysql();
        $sql = "SELECT SUM(Total_Venta) AS Efectivo 
        FROM ventas 
        WHERE Medio_Pago = 1 AND Fecha_Venta ='$fecha'";

          $query = $con->prepare($sql); 
          $query -> execute(); 
          $results = $query -> fetch(PDO::FETCH_OBJ);
          if($query -> rowCount() > 0){

              return $results;
          }else{

              return 0;
          }



    }

    static public function transbank($fecha){
        $con = ConexionMysql::ConectarMysql();
        $sql = "SELECT SUM(Total_Venta) AS transbank 
        FROM ventas 
        WHERE Medio_Pago = 2 AND
         Fecha_Venta ='$fecha'";

        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }


    }

    static public function junaeb($fecha){
        $con = ConexionMysql::ConectarMysql();
        $sql = "SELECT SUM(Total_Venta) AS Junaeb 
        FROM ventas 
        WHERE Medio_Pago = 3 AND
         Fecha_Venta ='$fecha'";

        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }



    }

    static public function transferencia($fecha){
        $con = ConexionMysql::ConectarMysql();
        $sql = "SELECT SUM(Total_Venta) AS Transferencia 
        FROM ventas 
        WHERE Medio_Pago = 4 AND
         Fecha_Venta ='$fecha'";

        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }


    }

    static public function insertarCierre($data){


        $con = ConexionMysql::ConectarMysql();
        $sql="insert into cierre_caja( 
                                    Fecha_Cierre,
                                    Usuario_Cierre,
                                    Total_Cierre,
                                    InicioCaja_Cierre,
                                    FinCaja_Cierre,
                                    TotalVentas_Cierre,
                                    Comentarios_Cierre,
                                    FechaSistema_Cierre,
                                    Estado_Cierre,
                                    Pago_Transferencia,
                                    Pago_Efectivo,
                                    Pago_Transbank,
                                    Pago_Junaeb,
                                    Total_Neto,
                                    Total_Iva) 
                            values( :Fecha_Cierre,
                                    :Usuario_Cierre,
                                    :Total_Cierre,
                                    :InicioCaja_Cierre,
                                    :FinCaja_Cierre,
                                    :TotalVentas_Cierre,
                                    :Comentarios_Cierre,
                                    :FechaSistema_Cierre,
                                    :Estado_Cierre,
                                    :Pago_Transferencia,
                                    :Pago_Efectivo,
                                    :Pago_Transbank,
                                    :Pago_Junaeb,
                                    :Total_Neto,
                                    :Total_Iva)";
        $sql = $con->prepare($sql);

        $Fecha_Cierre        = $data['Fecha_Cierre'];
        $Usuario_Cierre      = $data['Usuario_Cierre'];
        $Total_Cierre        = $data['Total_Cierre'];
        $InicioCaja_Cierre   = $data['InicioCaja_Cierre'];
        $FinCaja_Cierre      = $data['FinCaja_Cierre'];
        $TotalVentas_Cierre  = $data['TotalVentas_Cierre'];
        $Comentarios_Cierre  = $data['Comentarios_Cierre'];
        $FechaSistema_Cierre = date("Y-m-d");
        $Estado_Cierre       = 1;

        $Pago_Transferencia  = $data['Pago_Transferencia'];
        $Pago_Efectivo       = $data['Pago_Efectivo'];
        $Pago_Transbank      = $data['Pago_Transbank'];
        $Pago_Junaeb         = $data['Pago_Junaeb'];
        $Total_Neto          = $data['Total_Neto'];
        $Total_Iva           = $data['Total_Iva'];


  
      
        $sql->bindParam(':Fecha_Cierre',$Fecha_Cierre,PDO::PARAM_STR);
        $sql->bindParam(':Usuario_Cierre',$Usuario_Cierre,PDO::PARAM_INT);
        $sql->bindParam(':Total_Cierre',$Total_Cierre,PDO::PARAM_STR);
        $sql->bindParam(':InicioCaja_Cierre',$InicioCaja_Cierre,PDO::PARAM_INT);
        $sql->bindParam(':FinCaja_Cierre',$FinCaja_Cierre,PDO::PARAM_STR);
        $sql->bindParam(':TotalVentas_Cierre',$TotalVentas_Cierre,PDO::PARAM_INT);
        $sql->bindParam(':Comentarios_Cierre',$Comentarios_Cierre,PDO::PARAM_STR);
        $sql->bindParam(':FechaSistema_Cierre',$FechaSistema_Cierre,PDO::PARAM_INT);
        $sql->bindParam(':Estado_Cierre',$Estado_Cierre,PDO::PARAM_INT);

        $sql->bindParam(':Pago_Transferencia',$Pago_Transferencia,PDO::PARAM_INT);
        $sql->bindParam(':Pago_Efectivo',$Pago_Efectivo,PDO::PARAM_INT);
        $sql->bindParam(':Pago_Transbank',$Pago_Transbank,PDO::PARAM_INT);
        $sql->bindParam(':Pago_Junaeb',$Pago_Junaeb,PDO::PARAM_INT);
        $sql->bindParam(':Total_Neto',$Total_Neto,PDO::PARAM_INT);
        $sql->bindParam(':Total_Iva',$Total_Iva,PDO::PARAM_INT);
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

    static public function insertarDetalleVentas($data){

        $con = Conexion::Conectar(); 
        $Id_Venta = $data['Id_Venta'];
        $id_Usuario = $data['id_Usuario'];
        $Id_Cliente = 1;
        $Fecha_Venta =	 date("Y-m-d");
        $Neto_Venta = $data['Neto_Venta'];
        $Iva_Venta = $data['Iva_Venta'];
        $Total_Venta = $data['Total_Venta'];
        $Imagen_Producto = $data['Imagen_Producto'];
        $Estado_Venta =1;
        $sql2 = "Insert Into Ventas(Id_Venta, id_Producto, Cantidad_Detalle, Valor_Detalle)
                                  Values($Id_Venta,$id_Usuario, $Id_Cliente, $Fecha_Venta, $Neto_Venta, $Iva_Venta ,$Total_Venta, $Estado_Venta)";		   
     
        if (sqlsrv_query($con,$sql2)) {

            return 	1;
        } else {
            return 0;
        }


}



}