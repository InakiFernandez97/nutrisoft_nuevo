<?php
require_once("conexion.php");


class pacienteModelo{

    


    static public function viewPacientes(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pacientes, empresas WHERE Empresa_Paciente = Id_Empresa"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }
    static public function pacientesTodosDatos(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pacientes p, empresas e, menu m WHERE p.Empresa_Paciente = e.Id_Empresa AND p.desayuno = m.id"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }

    static public function viewPacienteID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pacientes, empresas WHERE Empresa_Paciente = Id_Empresa AND Id_Paciente = $id"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            $data = json_decode(json_encode($results));
            return $data;
        }else{

            return 0;
        }

    }

    static public function insertarPaciente($data){
        $con = ConexionMysql::ConectarMysql();
  

      
        $sql="INSERT INTO pacientes (Rut_Paciente, Nombre_Paciente, Apellido_Paciente, Edad_Paciente, Nacimiento_Paciente, Estatura_Paciente, Peso_Paciente, Sexo_Paciente, Enfermedades_Paciente,ActFisica_Paciente, Email_Paciente, Fono_Paciente,Comentario_Paciente, FechaIngreso, Usuario_Paciente,Empresa_Paciente) 
        values(:Rut_Paciente, :Nombre_Paciente, :Apellido_Paciente, :Edad_Paciente, :Nacimiento_Paciente, :Estatura_Paciente, :Peso_Paciente, :Sexo_Paciente, :Enfermedades_Paciente,:ActFisica_Paciente, :Email_Paciente, :Fono_Paciente,:Comentario_Paciente, :FechaIngreso, :Usuario,:Empresa_Paciente)";
        $sql = $con->prepare($sql);

       
       
        $rut            = $data['rut'];
        $nombre         = $data['nombre'];
        $apellido       = $data['apellido'];
        $edad           = $data['edad'];
        $nacimiento     = $data['nacimiento'];
        $estatura       = $data['estatura'];
        $peso           = $data['peso'];
        $sexo           = $data['sexo'];
        $enfermedades   = $data['enfermedades'];
        $actividad      = $data['actividad'];
        $email          = $data['email'];
        $fono           = $data['fono'];
        $comentario     = $data['comentario'];
        $usuario        = $data['usuario'];
        $empresa        = $data['empresa'];

        
        $fecha          = date('Y-m-d');
     
  
        $sql->bindParam(':Rut_Paciente',$rut,PDO::PARAM_STR);
        $sql->bindParam(':Nombre_Paciente',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':Apellido_Paciente',$apellido,PDO::PARAM_STR);
        $sql->bindParam(':Edad_Paciente',$edad,PDO::PARAM_INT);
        $sql->bindParam(':Nacimiento_Paciente',$nacimiento,PDO::PARAM_STR);
        $sql->bindParam(':Estatura_Paciente',$estatura,PDO::PARAM_STR);
        $sql->bindParam(':Peso_Paciente',$peso,PDO::PARAM_STR);
        $sql->bindParam(':Sexo_Paciente',$sexo,PDO::PARAM_STR);
        $sql->bindParam(':Enfermedades_Paciente',$enfermedades,PDO::PARAM_INT);
        $sql->bindParam(':ActFisica_Paciente',$actividad,PDO::PARAM_STR);
        $sql->bindParam(':Email_Paciente',$email,PDO::PARAM_STR);
        $sql->bindParam(':Fono_Paciente',$fono,PDO::PARAM_INT);
        $sql->bindParam(':Comentario_Paciente',$comentario,PDO::PARAM_STR);
        $sql->bindParam(':FechaIngreso',$fecha,PDO::PARAM_STR);
        $sql->bindParam(':Usuario',$usuario,PDO::PARAM_INT);
        $sql->bindParam(':Empresa_Paciente',$empresa,PDO::PARAM_INT);
  
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){

                $resultado = array(
                    "id" => $lastInsertId,
                    "estado" => 1
                
                );
                    return  $resultado;
            }
            else{

            // print_r($sql->errorInfo()); 
               $resultado = array(
                "paciente" => 0,
                "estado" => 0
            
            );
                return  $resultado;

            
            } 


    }

    static public function EstadisticasHombres(){

       // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva

        $con = ConexionMysql::ConectarMysql();
        $total = "SELECT COUNT(Sexo_Paciente) AS Hombres
        FROM pacientes
        WHERE Sexo_Paciente ='MASCULINO'";
        $query = $con->prepare($total); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
  


    }

    static public function EstadisticasMujeres(){

        // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva
 
         $con = ConexionMysql::ConectarMysql();
         $total = "SELECT COUNT(Sexo_Paciente) AS Mujeres
         FROM pacientes
         WHERE Sexo_Paciente ='FEMENINO'";
         $query = $con->prepare($total); 
         $query -> execute(); 
         $results = $query -> fetch(PDO::FETCH_OBJ);
         if($query -> rowCount() > 0){
 
             return $results;
         }else{
 
             return 0;
         }

        }
         static public function EstadisticasEmpresas(){

            // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva
     
             $con = ConexionMysql::ConectarMysql();
             $total = "SELECT COUNT(Id_Empresa) AS Empresas
             FROM empresas";
             $query = $con->prepare($total); 
             $query -> execute(); 
             $results = $query -> fetch(PDO::FETCH_OBJ);
             if($query -> rowCount() > 0){
     
                 return $results;
             }else{
     
                 return 0;
             }
        
   
 
 
     }

     static public function updateMenuPaciente($data){

        // echo $id;
         $con = ConexionMysql::ConectarMysql();
    
    
    
    
         $usuario                   = $data['usuario'];
         $desayuno                  = $data['desayuno'];
         $almuerzo                  = $data['almuerzo'];
         $once                      = $data['once'];
         $gramaje                   = $data['gramaje'];
         $obs                       = $data['obs'];


         $consulta = "UPDATE pacientes SET  desayuno = :desayuno,
                                            almuerzo = :almuerzo,
                                            once = :once,
                                            gramaje = :gramaje,
                                            obs = :obs
                                        WHERE Id_Paciente = :usuario";
        $sql = $con-> prepare($consulta);
        $sql->bindParam(':usuario',$usuario,PDO::PARAM_INT);
        $sql->bindParam(':desayuno',$desayuno,PDO::PARAM_INT);
        $sql->bindParam(':almuerzo',$almuerzo,PDO::PARAM_INT);
        $sql->bindParam(':once',$once,PDO::PARAM_INT);
        $sql->bindParam(':gramaje',$gramaje,PDO::PARAM_INT);
        $sql->bindParam(':obs',$obs,PDO::PARAM_STR);

   
        
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


         
    
    
    }
    
    


    


