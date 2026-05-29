<?php 

class PlantillaControlador {

 
    static public function startPlantilla($login) {


        if($login == 1){

            include ROOT_PATH . "vistas/plantilla.php";
        }

        if($login == 0){

            include ROOT_PATH . "vistas/login.php";
        }
       
    
    }

 
}
