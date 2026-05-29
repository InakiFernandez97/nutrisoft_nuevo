<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."usuariosModelo.php");

class usuariosControlador
{

    static public function viewUsuarios(){


        $categorias = usuariosModelo::viewUsuarios();
         return $categorias;

    }

    static public function insertarUsuarios($data){


        $insert = usuariosModelo::insertarUsuarios($data);
         return $insert;

    }
    static public function viewUsuariosID($id){


        $categorias = usuariosModelo::viewUsuariosID($id);
         return $categorias;

    }
    static public function login($data){

        $user    = trim($data['usuario']);
        $pass    = trim($data['password']);
        $empresa = $_POST['empresa']=1;
        $usuario = usuariosModelo::login($user, $pass, $empresa);
      
        
        if($usuario != 0){

            foreach ($usuario as $fila) {
                $us= $fila->Correo_Usuario;
                $pw= $fila->Password_Usuario;
                $priv= $fila->Privilegio_Usuario;
                $id= $fila->Id_Usuario;
                $nom= $fila->Nombre_Usuario;
    
        
            }
            if($us == $user &&  $pw == $pass ){
                // La sesi\u00f3n ya est\u00e1 iniciada en index.php, solo asignamos valores
                $_SESSION['UserID'] = $id;
                $_SESSION['UserNombre'] = $nom;
                $_SESSION['Privilegio'] = $priv;
                $_SESSION['login'] = 1;
    
            }else{
                // La sesi\u00f3n ya est\u00e1 iniciada en index.php, solo asignamos valores
                $_SESSION['UserID'] = 0;
                $_SESSION['UserNombre'] = 0;
                $_SESSION['Privilegio'] = 0;
                $_SESSION['login'] = 0;
                return 0;
    
            }

            return 1;
        }else{
            // La sesi\u00f3n ya est\u00e1 iniciada en index.php, solo asignamos valores
            $_SESSION['UserID'] = 0;
            $_SESSION['UserNombre'] = 0;
            $_SESSION['Privilegio'] = 0;
            $_SESSION['login'] = 0;
            return 0;

        }
       
     

    }
    

}


if (isset($_POST['inserta'])) 
{
  

$data = array(
"rut"        => trim( $_POST['rut']),
"nombre"     => trim( $_POST['nombre']),
"apellido"   => trim( $_POST['apellido']),
"fono"       => trim( $_POST['fono']),
"email"      => trim( $_POST['email']),
"privilegio" => trim( $_POST['privilegio']),
"password"   => trim( $_POST['password'])

);

$inserto = usuariosControlador::insertarUsuarios($data);

   if($inserto == 1){
    $mensaje = 'Bien.., usuario insertado de forma correcta.';

    $resultado = array(
        "estado" => $inserto,
        "mensaje" => $mensaje
    
    );


   }else{
    $mensaje = 'Problemas insertando al usuario, vuelta a intentarlo.';

    $resultado = array(
        "estado" => $inserto,
        "mensaje" => $mensaje
    
    );
   }

echo json_encode($resultado); 




}


if (isset($_POST['login'])) 
{
  // Asegurar que la sesión esté iniciada
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  $data = array(
  "usuario"   => trim( $_POST['user']),
  "password"  => trim( $_POST['pass']),
  "empresa"   => trim( $_POST['empresa'])
  );

  $user = usuariosControlador::login($data);

  $mensaje = "Nutrisoft - Seguridad";
  if ($user === -1) {
      $mensaje = "Error de servidor: no se pudo conectar a la base de datos";
  }

  $resultado = array(
      "estado" => $user,
      "mensaje" => $mensaje
  );
  
  echo json_encode($resultado); 
  exit(); // Importante: detener ejecución después de enviar JSON
}



//$data = array(
   // "usuario" =>"ERNERTO@PIXELCREATIVO.CL",
  //  "password" =>"123456"
//);

//echo "probando controlador";
//$ob = usuariosControlador::login($data);
//print_r($ob);