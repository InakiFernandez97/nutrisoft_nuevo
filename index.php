<?php 
// Iniciar sesión de forma segura
if (session_status() === PHP_SESSION_NONE) {
    // Configuración de sesión optimizada para LiteSpeed
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    ini_set('session.cookie_samesite', 'Lax');
    session_start();
}

// Importante: config.php ANTES de los controladores
require_once "config.php";
require_once "controlador/plantillaControlador.php";

//echo $_SESSION['login'];
if( isset($_SESSION['login']) && $_SESSION['login'] == 1){

    PlantillaControlador::startPlantilla(1);

}else{
    PlantillaControlador::startPlantilla(0);

}



//PlantillaControlador::startPlantilla($login);




# Incluimos la clase que nos hara el rotuing
//require_once "RoutingManager.php";

# Instanciamos la clase routing para extraer la ruta de la url.
//$routes = new RoutingManager();
//$return = $routes->init();

# Escribimos por pantalla el resultado
//print_r( $return);



?>