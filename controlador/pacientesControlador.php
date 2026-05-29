<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."pacienteModelo.php");

class pacientesControlador
{

    static public function viewPacientes(){


        $categorias = pacienteModelo::viewPacientes();
         return $categorias;

    }

    static public function insertarPaciente($data){

      

        $paciente = pacienteModelo::insertarPaciente($data);
         return $paciente;

    }
    static public function viewPacienteID($id){


        $paciente = pacienteModelo::viewPacienteID($id);
         return $paciente;

    }
    static public function pacientesTodosDatos(){


        $paciente = pacienteModelo::pacientesTodosDatos();
         return $paciente;

    }
    

    static public function estadisticas(){


        $hombres = pacienteModelo::EstadisticasHombres();
        $mujeres = pacienteModelo::EstadisticasMujeres();
        $empresas = pacienteModelo::EstadisticasEmpresas();
        $estadisticas = array("hombres" => $hombres->Hombres, "mujeres" => $mujeres->Mujeres, "empresas" => $empresas->Empresas);
         return $estadisticas;

    }

    static public function deletePaciente($id){

       // $delete = pacienteModelo::deletePaciente($id);
        //return  $delete;
    }
    static public function updateMenuPaciente($data){


        $paciente = pacienteModelo::updateMenuPaciente($data);
         return $paciente;

    }
    
    

}


if(isset($_POST['insertPacientes'])){

    $paciente = pacientesControlador::insertarPaciente($_POST);



    if($paciente['estado'] == 1){
        $mensaje = 'Paciente ingresado de forma Exitosa, puede ir a la ficha del paciente';

        $resultado = array(
            "paciente" => $paciente['id'],
            "estado" => $paciente['estado'],
            "mensaje" => $mensaje
        
        );
    }else{
        $mensaje = 'Problemas ingresando al paciente revise los datos de ingreso o vuelva a intentarlo';
        
        $resultado = array(
            "paciente" => 0,
            "estado" => 0,
            "mensaje" => $mensaje
        
        );
    }

  
    echo json_encode($resultado); 
    
    }



    if(isset($_POST['updatemenu'])){

        
        $resultado = array(
            "desayuno" => $_POST['desayuno'],
            "almuerzo" => $_POST['almuerzo'],
            "once" => $_POST['once'],
            "gramaje" => $_POST['gramaje'],
            "obs" => $_POST['obs'],
            "usuario" => $_POST['usuario']
        
        );

        $paciente = pacientesControlador::updateMenuPaciente($resultado);
    
    
    
        if($paciente == 1){
            $mensaje = 'Menú asignado a paciente de forma Exitosa, puede ir a la ficha del paciente';

            $resultado = array(
                
                "estado" => 1,
                "mensaje" => $mensaje
            
            );
    
        }else{
            $mensaje = 'Problemas ingresando al paciente revise los datos de ingreso o vuelva a intentarlo';
            
            $resultado = array(
                
                "estado" => 0,
                "mensaje" => $mensaje
            
            );
        }
    
      
        echo json_encode($resultado); 
        
        }