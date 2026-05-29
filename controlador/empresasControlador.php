<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."empresasModelo.php");

class empresasControlador
{

    static public function viewEmpresas(){


        $empresas = empresasModelo::viewEmpresas();
         return $empresas;

    }

    static public function insertarEmpresa($data){


        $insert = empresasModelo::insertarEmpresa($data);
         return $insert;

    }
    static public function viewEmpresasID($id){


        $categorias = empresasModelo::viewEmpresasID($id);
         return $categorias;

    }
    

}
