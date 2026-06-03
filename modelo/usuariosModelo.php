<?php
require_once("conexion.php");


class usuariosModelo{


    static public function viewUsuarios(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM usuarios"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }

    static public function viewUsuariosID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM usuarios"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

    }

    static public function insertarUsuarios($data){

        $con = ConexionMysql::ConectarMysql();
        $sql="INSERT INTO usuarios ( Nombre_Usuario,Apellido_Usuario ,Correo_Usuario ,Fono_Usuario ,Privilegio_Usuario, Password_Usuario) 
        values(:Nombre_Usuario,:Apellido_Usuario ,:Correo_Usuario ,:Fono_Usuario ,:Privilegio_Usuario, :Password_Usuario)";
        $sql = $con->prepare($sql);

       
        $nombre      = $data['nombre'];
        $apellido      = $data['apellido'];
        $correo      = $data['correo'];
        $fono      = $data['fono'];
        $privilegio      = $data['privilegio'];
        $password      = $data['password'];
    
     
        $sql->bindParam(':Nombre_Usuario',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':Apellido_Usuario',$apellido,PDO::PARAM_STR);
        $sql->bindParam(':Correo_Usuario',$correo,PDO::PARAM_STR);
        $sql->bindParam(':Fono_Usuario',$fono,PDO::PARAM_INT);
        $sql->bindParam(':Privilegio_Usuario',$privilegio,PDO::PARAM_INT);
        $sql->bindParam(':Password_Usuario',$password,PDO::PARAM_STR);
 
   
  
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

static public function login($user, $pass, $empresa){
    try {
        $con = ConexionMysql::ConectarMysql();

        // IMPORTANTE: Usar prepared statements para evitar inyección SQL
        $sql = "SELECT * FROM usuarios WHERE Correo_Usuario = :user AND Password_Usuario = :pass"; 
        $query = $con->prepare($sql); 
        
        // Bind de parámetros de forma segura
        $query->bindParam(':user', $user, PDO::PARAM_STR);
        $query->bindParam(':pass', $pass, PDO::PARAM_STR);
        
        $query->execute(); 
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        
        if($query->rowCount() > 0){
            return $results;
        }else{
            return 0;
        }
    } catch(Throwable $e) {
        error_log("Error en login: " . $e->getMessage());
        return -1;
    }
}



}