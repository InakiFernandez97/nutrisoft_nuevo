<?php
require_once("conexion.php");


class empresasModelo{


    static public function viewEmpresas(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM empresas"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }

    static public function viewEmpresasID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM empresas WHERE Id_Empresas = '$id'"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

    }

    static public function insertarEmpresa($data){
        //print_r($data);
        $con = ConexionMysql::ConectarMysql();
        $sql="INSERT INTO empresas ( Rut_Empresa, Nombre_Empresa,Fecha_Empresa, Cantidad_Trabajadores,Encargado_Empresa,Fono_Empresa,Contrato_Empresa ) 
        values(:Rut_Empresa, :Nombre_Empresa,:Fecha_Empresa, :Cantidad_Trabajadores,:Encargado_Empresa,:Fono_Empresa,:Contrato_Empresa)";
        $sql = $con->prepare($sql);

       
        $rut         = $data['rut'];
        $nombre      = $data['nombre'];
        $fecha       = $data['fecha'];
        $cantidad    = $data['trabajadores'];
        $encargado   = $data['encargado'];
        $fono        = $data['fono'];
        $contrato    = $data['contrato'];
        $estado      = 1;
     
  
        $sql->bindParam(':Rut_Empresa',$rut,PDO::PARAM_STR);
        $sql->bindParam(':Nombre_Empresa',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':Fecha_Empresa',$fecha,PDO::PARAM_STR);
        $sql->bindParam(':Cantidad_Trabajadores',$cantidad,PDO::PARAM_INT);
        $sql->bindParam(':Encargado_Empresa',$encargado,PDO::PARAM_STR);
        $sql->bindParam(':Fono_Empresa',$fono,PDO::PARAM_INT);
        $sql->bindParam(':Contrato_Empresa',$contrato,PDO::PARAM_INT);
      
  
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){
              
                    return  1;
            }
            else{

               // print_r($sql->errorInfo()); 
                return 0;

            
            } 


    }



}