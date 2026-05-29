<?php
require_once("conexion.php");


class historialModelo{


    static public function viewHistorial(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pacientes"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }

    static public function viewHistorialID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM historial WHERE Paciente = $id"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            $data = json_decode(json_encode($results));
            return $data;
        }else{

            return 0;
        }

    }

    static public function insertarHistorial($data){
       // print_r($data);
        $con = ConexionMysql::ConectarMysql();
        $sql="INSERT INTO historial (ActividadFisica, Peso, Talla, IMC, CCintura, PresArterial, Vitaminas, Minerales, Anamnesis,Habitos, Fecha, Usuario, Paciente) 
        values(:ActividadFisica, :Peso, :Talla, :IMC, :CCintura, :PresArterial, :Vitaminas, :Minerales, :Anamnesis,:Habitos, :Fecha, :Usuario, :Paciente)";
        $sql = $con->prepare($sql);

       
        $actividad      = $data['actividad'];
        $peso           = $data['peso'];
        $talla          = $data['talla'];
        $imc            = $data['imc'];
        $ccintura       = $data['ccintura'];
        $arterial       = $data['arterial'];
        $vitaminas      = $data['vitaminas'];
        $minerales      = $data['minerales'];
        $anamnesis      = $data['anamnesis'];
        $habitos        = $data['habitos'];
        $fecha          = date('Y-m-d');
        $usuario        = $data['usuario'];
        $paciente       = $data['paciente'];
       
     
  
        $sql->bindParam(':ActividadFisica',$actividad,PDO::PARAM_STR);
        $sql->bindParam(':Peso',$peso,PDO::PARAM_STR);
        $sql->bindParam(':Talla',$talla,PDO::PARAM_STR);
        $sql->bindParam(':IMC',$imc,PDO::PARAM_STR);
        $sql->bindParam(':CCintura',$ccintura,PDO::PARAM_STR);
        $sql->bindParam(':PresArterial',$arterial,PDO::PARAM_STR);
        $sql->bindParam(':Vitaminas',$vitaminas,PDO::PARAM_STR);
        $sql->bindParam(':Minerales',$minerales,PDO::PARAM_STR);
        $sql->bindParam(':Anamnesis',$anamnesis,PDO::PARAM_STR);
        $sql->bindParam(':Habitos',$habitos,PDO::PARAM_STR);
        $sql->bindParam(':Fecha',$fecha,PDO::PARAM_STR);
        $sql->bindParam(':Usuario',$usuario,PDO::PARAM_INT);
        $sql->bindParam(':Paciente',$paciente,PDO::PARAM_INT);
  
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